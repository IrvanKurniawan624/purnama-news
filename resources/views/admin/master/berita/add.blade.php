@extends('admin.partial.app')
@section('title','Berita')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/modules/dropzonejs/dropzone.css') }}">
<style>
    .image-preview {
        width: 150px !important;
        height: 200px !important;
    }

    .form-input input {
        display:none;
    }

    .note-group-select-from-files {
        display: none;
    }

    .form-input label {
        display:block;
        width:45%;
        height:45px;
        margin-left: 25%;
        line-height:50px;
        text-align:center;
        background:#1172c2;
        color:#fff;
        font-size:15px;
        font-family:"Open Sans",sans-serif;
        text-transform:Uppercase;
        font-weight:600;
        border-radius:5px;
        cursor:pointer;
    }

    .note-btn-group.note-mybutton{
        border: 1px solid whitesmoke;
        background: #efefef;
        border-radius: 17px;
    }
    

    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
</style>
@endsection
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Berita</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/master/berita">Berita</a></li>
                <li class="breadcrumb-item active">@if(!empty($data)) Edit Berita @else Tambah Berita @endif</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header justify-content-between">
                        <h5 style="font-size: 16px; color: #FA8128; font-weight: bold">Data Berita</h5>
                        <div class="card-header-action">
                            <label class="custom-switch mt-2 mr-4">
                                <input type="checkbox" name="is_publish_view" id="is_publish_view" class="custom-switch-input" value="1">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Publish this News</span>
                            </label>
                        </div>
                    </div>
                    <div class="card-body mt-4">
                        <form autocomplete="off" id="form_submit_request2"  action="/admin/master/berita/store-update" method="POST" enctype="multipart/form-data">                            
                            <input type='text' name='is_publish' id='is_publish' hidden value="@if(!empty($data)) {{ $data->is_publish }} @else 0 @endif">
                            <input type='text' name='url_image' id='url_image' hidden value="@if(!empty($data)){{$data->gambar}}@endif">
                            @if (isset($data))
                                <input type="text" hidden name="id" @if (!empty($data)) value="{{$data->id}}"@endif>
                            @endif
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label>Judul Berita</label>
                                            <input type="text" name="judul" class="form-control" id="judul" @if(!empty($data)) value="{{ $data->judul }}" @endif>
                                            <span class="d-flex text-danger invalid-feedback" id="invalid-judul-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control select2" name="kategori" id="kategori" required>
                                                <option selected disabled>- Pilih -</option>
                                                @foreach ($kategori as $item)
                                                    <option value="{{ $item->id }}" @if(!empty($data) && $data->kategori_id == $item->id) selected @endif >{{ $item->kategori }}</option>
                                                @endforeach
                                            </select>
                                            <span class="d-flex text-danger invalid-feedback" id="invalid-kategori-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label>Meta Keyword</label>
                                            <input type="text" name="meta_keyword" class="form-control" id="meta_keyword" @if(!empty($data)) value="{{ $data->meta_keyword }}" @endif>
                                            <span class="d-flex text-danger invalid-feedback" id="invalid-meta_keyword-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="form-group">
                                            <label>Meta Deskripsi</label>
                                            <input type="text" name="meta_deskripsi" class="form-control" id="meta_deskripsi" @if(!empty($data)) value="{{ $data->meta_deskripsi }}" @endif>
                                            <span class="d-flex text-danger invalid-feedback"id="invalid-meta_deskripsi-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Upload Foto (Ukuran Maks 3 Mb)</label>
                                            <div class="needsclick dropzone" id="document-dropzone" style="border:3px dashed #D3D6D9;padding: 10px;text-align: center;">
                                                <div class="fallback">
                                                    <input name="image" type="file" id="my-dropzone" multiple class="required-field" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label>Text Gambar</label>
                                            <input type="text" name="text_gambar" class="form-control" id="text_gambar" @if(!empty($data)) value="{{ $data->text_gambar }}" @endif>
                                            <span class="d-flex text-danger invalid-feedback" id="invalid-text_gambar-feedback"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi Singkat</label>
                                            <span class="d-flex text-danger invalid-feedback" id="invalid-deskripsi_singkat-feedback"></span>
                                            <textarea class="form-control" name="deskripsi_singkat" id="deskripsi_singkat" style="font-size: 13px; height: 150px" maxlength="200" width="50px">@if(!empty($data)) {{ $data->deskripsi_singkat }} @endif</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Content</label>
                                            <span class="d-flex text-danger invalid-feedback" id="invalid-content-feedback"></span>
                                            <textarea class="summernote-content" name="content" id="content" style="font-size: 13px;" width="100px">@if(!empty($data)) {{ $data->content }} @endif</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="button" onClick="history.go(-1); return false;"
                                    class="btn btn-secondary mr-2">Back</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-save m-1"></i>
                                    Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection

@section('js')
    <script src="{{ asset('assets/modules/dropzonejs/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

    <script>
        $(document).ready(function(){
            $('.summernote-content').summernote({
                dialogsInBody: true,
                minHeight: 250,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['mybutton', ['hello']],
                ],
                buttons: {
                    hello: HelloButton
                }
            });
        })

        var HelloButton = function (context) {
        var ui = $.summernote.ui;
        var node = document.createElement('div');
        node.innerHTML = '<div style="display: flex;flex-direction: column;border: 3px dashed sandybrown;padding: 15px 22px; font-size: 1rem"><span style="margin-bottom: 5px;">Baca Juga</span><a href="[LINK DETAIL]">[CONTENT]</a></div>';

        // create button
        var button = ui.button({
            contents: 'Create Box',
            tooltip: 'Create Box',
            click: function () {
            // invoke insertText method with 'hello' on editor module.
            context.invoke('editor.insertNode', node);
            }
        });
            return button.render();   // return button as jquery object
        } 

        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone  = {
            // maxFiles: 2000,
            maxFiles: 1,
            maxFilesize: 3,
            acceptedFiles: "image/*",
            addRemoveLinks: true,
            url: "/admin/master/berita/check-image",
            autoProcessQueue: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            init: function() {
                var myDropzone = this;
                url_image = $('input[name="url_image"]');
                if(typeof(url_image.val()) != "undefined" && url_image.val() !== null && url_image.val() !== '') {
                    let name_image = $(url_image).val() . split('/');
                    console.log(name_image);    
                    var mockFile = {
                        name: name_image,
                        type: 'image/jpeg',
                        status: Dropzone.ADDED,
                    };
    
                    uploadedDocumentMap[name_image] = $(url_image).val();
    
                    // Call the default addedfile event handler
                    myDropzone.emit("addedfile", mockFile);
                    
                    var str1 = $(url_image).val();
                    var str2 = "";
                    var img_url = '/berkas/headline/' + $(url_image).val();
                    // if(str1.indexOf(str2) != -1){
                    // }else{
                    //     var img_url = APP_URL + $(this).val();
                    // }
    
                    // And optionally show the thumbnail of the file:
                    myDropzone.emit("thumbnail", mockFile, img_url);
    
                    myDropzone.files.push(mockFile);
                }

                $("#form_submit_request2").submit(function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    swal({
                        title: 'Yakin?',
                        text: 'Apakah anda yakin akan menyimpan data ini?',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            $("#modal_loading").modal('show');
                            myDropzone.processQueue();
                            myDropzone.on("complete", function () {
                                $('input,textarea.is-invalid').removeClass('is-invalid');
                                $('.invalid-feedback').text('');
                                $.ajax({
                                    url:  $('#form_submit_request2').attr('action'),
                                    type: $('#form_submit_request2').attr('method'),
                                    data: $('#form_submit_request2').serializeArray(),
                                    success: function(response){
                                        console.log(response);
                                        setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                                        if(response.status == 200){
                                            swal(response.message, { icon: 'success', });
                                            $("#modal").modal('hide');
                                            $("#form_submit_request2")[0].reset();
                                            reset_all_select();
                                            tb.ajax.reload(null, false);
                                        }
                                        else if(response.status == 201){
                                            $("#modal").modal('hide');
                                            swal(response.message, { icon: 'success', }).then(function(){
                                                window.location.href = response.link;
                                            });
                                        }
                                        else if(response.status == 203){
                                            swal(response.message, { icon: 'success', });
                                            $("#modal").modal('hide');
                                            tb.ajax.reload(null, false);
                                        }
                                        else if(response.status == 300){
                                            swal(response.message, { icon: 'error', });
                                        }
                                    },error: function (jqXHR, textStatus, errorThrown){
                                        setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                                        console.log((jqXHR.responseJSON.errors));
                                        Object.keys(jqXHR.responseJSON.errors).forEach(function (key) {
                                            // console.log(jqXHR.responseJSON.errors[key]);
                                            var responseError = jqXHR.responseJSON.errors[key];
                                            var elem_name = $('[name=' + responseError['field'] + ']');
                                            var elem_feedback = $('[id=invalid-' + responseError['field'] + '-feedback'+']');
                                            elem_name.addClass('is-invalid');
                                            elem_feedback.text(responseError['message']);
                                        });
                                    }
                                });
                            });
                        }
                    });
                })
                $('.dz-image img').attr('width', 125)
                $('.dz-image img').attr('height', 125);
            },
            success: function (file, response) {
                $('input[name="url_image"]').val(response.name);
                // $('#form_submit_request').append('<input type="text" hidden name="url_image" value="' + response.name + '">');
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function(file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $(url_image).val('');
            }
        }

        $('#is_publish_view').change(function(){
            $('.diskon').val('');
            if(!$(this).is(':checked')){
                $('#is_publish').val('0');
            }else{
                $('#is_publish').val('1');
            }
        });
    </script>
@endsection