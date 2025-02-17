@extends('admin.partial.app')
@section('title','Berita')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Master Berita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Master</li>
                <li class="breadcrumb-item active">Berita</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Berita</h5>
                        <button type="button" style="position: absolute;right: 15px;top: 13px;font-size: 12px" class="btn btn-warning btn-curve"
						onclick="window.location='/admin/master/berita/add'"><i class="fa fa-plus mr-1"></i>
						Tambah Berita</button>
                        <!-- Table with stripped rows -->
                        <table class="table datatable table-striped table-hover" id="tb">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">No.</th>
                                    <th scope="col" class="text-center">Judul</th>
                                    <th scope="col" class="text-center">Gambar</th>
                                    <th scope="col" class="text-center">kategori</th>
                                    <th scope="col" class="text-center" style="width: 30%">Deskripsi Singkat</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center" style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection

@section('js')
<script>
    var tb = $('#tb').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/master/berita/datatables',
            type: 'GET'
        },
        columnDefs: [
            { className: 'text-center', targets: [0,2,5,6] },
        ],
        columns: [
            { data: 'DT_RowIndex',searchable: false, orderable: false},
            { data: 'judul' },
            { data: 'gambar', render: function(data){return `<a href="/berkas/headline/${data}" target="_blank" class="btn btn-primary btn-sm mr-1"><i class="far fa-file-alt"></i> Lihat Foto</a>`}},
            { data: 'kategori.kategori' },
            { data: 'deskripsi_singkat', render: function(data){return data.replace(/(<([^>]+)>)/gi, "").substring(0, 150);}},
            { data: 'is_publish' },
            { data: 'is_publish' },
        ],
        rowCallback : function(row, data){
            var url_edit   = "/admin/master/berita/detail/" + data.id;
            var url_delete = "/admin/master/berita/delete/" + data.id;
            let aksi =`
                <button class="btn btn-info btn-sm mr-1 mb-2" onclick="window.location='${url_edit}'"><i class="fa fa-edit"></i> Edit</button>
                <button class="btn btn-danger btn-sm mr-1 mb-2" onclick="delete_action('${url_delete}','${data.judul}')"><i class="fa fa-trash"></i> Hapus</button>
            `;

            if(data.is_publish == 1){
                $('td:eq(5)', row).html(`<span class="badge badge-success">aktif</span>`);
                // if(data.is_headline == 1){
                //     $('td:eq(5)', row).append(`<span class="badge badge-info ml-2">Headline</span>`);
                // }
                $('td:eq(6)', row).html(aksi + `<button class="btn btn-danger btn-sm mr-1 mb-2" onclick="action('${data.id}','0')"><i class="fa fa-times mr-2"></i>deactivated</button>`);
            }else{
                $('td:eq(5)', row).html(`<span class="badge badge-danger">non-aktif</span>`);
                $('td:eq(6)', row).html(aksi + `<button class="btn btn-info btn-sm mr-1 mb-2" onclick="action('${data.id}','1')"><i class="fa fa-check mr-2"></i>activated</button>`);
            }
        }
    });

    function action(id, status){
        $("#modal_loading").modal('show');
        $.ajax({
            url: '/admin/master/berita/change-status/' + id + "/" + status,
            type: "GET",
            dataType: 'JSON',
            success: function( response, textStatus, jQxhr ){
                setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                if(response.status == 200){
                    iziToast.success({
                        title: 'Success!',
                        message: response.message,
                        position: 'topRight'
                        });
                    tb.ajax.reload(null, false);
                }else{
                    iziToast.error({
                        title: 'Error!',
                        message: response.message,
                        position: 'topRight'
                    });
                }
            },
            error: function( jqXhr, textStatus, errorThrown ){
                setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                console.log( errorThrown );
                console.warn(jqXhr.responseText);
            },
        });
    }
</script>
@endsection
