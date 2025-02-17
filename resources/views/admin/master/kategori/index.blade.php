@extends('admin.partial.app')
@section('title','Dashboard')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Master Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Master</li>
                <li class="breadcrumb-item active">Kategori</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Kategori</h5>
                        <button type="button" style="position: absolute;right: 15px;top: 13px;font-size: 12px" class="btn btn-warning btn-curve"
						onclick="add();"><i class="fa fa-plus mr-1"></i>
						Tambah Kategori</button>
                        <!-- Table with stripped rows -->
                        <table class="table datatable table-striped table-hover" id="tb">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col" class="text-center">Kategori</th>
                                    <th scope="col" class="text-center">Keterangan</th>
                                    <th scope="col">Created By</th>
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

@section('modal')
<div class="modal fade" role="dialog" id="modal" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg" role="document">
       <div class="modal-content">
          <div class="modal-header br">
             <h5 class="modal-title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="form_submit_request" action="/admin/master/kategori/store-update" method="POST" autocomplete="off">
            <input type="text" name="id" id="id" hidden>
            <input type="text" name="type" id="type" hidden>
             <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control required-field" name="kategori" id="kategori">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea name="keterangan" class="form-control" id=""  rows="3"></textarea>
                        </div>
                    </div>
                </div>
             </div>
             <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-warning">Simpan</button>
             </div>
          </form>
       </div>
    </div>
</div>
@endsection

@section('js')
<script>
    var tb = $('#tb').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: '/admin/master/kategori/datatables',
            type: 'GET'
        },
        columnDefs: [
            { className: 'text-center', targets: [0,3,4] },
        ],
        columns: [
            { data: 'DT_RowIndex',searchable: false, orderable: false},
            { data: 'kategori' },
            { data: 'keterangan' },
            { data: 'created_by.name' },
            { data: 'kategori' },
        ],
        rowCallback : function(row, data){
            var url_edit   = "/admin/master/kategori/detail/" + data.id;
            var url_delete = "/admin/master/kategori/delete/" + data.id;
            $('td:eq(4)', row).html(`
                <button class="btn btn-info btn-sm mr-1" onclick="edit('${url_edit}')"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger btn-sm" onclick="delete_action('${url_delete}','${data.kategori}')"><i class="fa fa-trash"> </i></button>
            `);
        }
    });

    function add(){
        $("#modal").modal('show');
        $(".modal-title").text('Tambah Kategori');
        $("#form_submit_request")[0].reset();
        reset_all_select();
    }

    function edit(url){
        edit_action(url, 'Edit Kategori');
        $("#type").val('update');
    }
</script>
@endsection
