@extends('admin.partial.app')
@section('title','Dashboard')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Laporan Trending</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Laporan</li>
                <li class="breadcrumb-item active">Trending</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Trending</h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable table-striped table-hover" id="tb">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Jumlah Klik</th>
                                    <th scope="col">Status</th>
                                    <th scope="col" class="text-center" style="width: 30%">Content</th>
                                    <th scope="col">Aksi</th>
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
            url: '/admin/laporan/trending/datatables',
            type: 'GET'
        },
        columnDefs: [
            { className: 'text-center', targets: [0,2,4,5,7] },
        ],
        columns: [
            { data: 'DT_RowIndex',searchable: false, orderable: false},
            { data: 'judul' },
            { data: 'gambar', render: function(data){return `<a href="/berkas/headline/${data}" target="_blank" class="btn btn-primary btn-sm mr-1"><i class="far fa-file-alt"></i> Lihat Foto</a>`}},
            { data: 'kategori.kategori' },
            { data: 'jumlah_klik' },
            { data: 'is_publish' },
            { data: 'content', render: function(data){return data.substring(0,150) + '...';} },
            { data: 'is_publish' },
        ],
        rowCallback : function(row, data){
            // var url_edit   = "/admin/master/kategori/detail/" + data.id;
            // var url_delete = "/admin/master/kategori/delete/" + data.id;
            // $('td:eq(4)', row).html(`
            //     <button class="btn btn-info btn-sm mr-1" onclick="edit('${url_edit}')"><i class="fa fa-edit"></i></button>
            //     <button class="btn btn-danger btn-sm" onclick="delete_action('${url_delete}','${data.kategori}')"><i class="fa fa-trash"> </i></button>
            // `);
            if(data.is_publish == 1){
                $('td:eq(5)', row).html(`<span class="badge badge-success">aktif</span>`);
                $('td:eq(7)', row).html(`<button class="btn btn-info btn-sm" onclick="action('${data.id}','0')"><i class="bi bi-eye-fill mr-1"></i>View News</button>`);
            }else{
                $('td:eq(5)', row).html(`<span class="badge badge-danger">non-aktif</span>`);
                $('td:eq(7)', row).html(``);
            }
        }
    });
</script>
@endsection
