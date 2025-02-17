<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin Panel - Login</title>
    <!-- Bootstrap Styles-->
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-additional.css') }}">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <style>
        .form-control{
            border-radius: 10rem;
            padding: 1.5rem 1rem;
        }

        body{
            height: 100%;
        }

        .form-label{
            margin-left: .5rem!important;
        }

        .min-vh-100{
            min-height: 100vh!important;
        }
    </style>
</head>

<body>
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">

                    
                    <div class="card mb-3">
                        
                        <div class="card-body">
                            <div class="p-5">
                                <div class="pt-4 pb-2">
                                    {{-- <a href="#" class="logo d-flex justify-content-center w-auto">
                                        <img src="{{ asset('assets/img/project/logo-dark.png') }}" style="font-size: 60px" alt="">
                                    </a> --}}
                                    <h1 class="card-title text-center pb-0 fs-4" style="font-size: 1.5rem">Login</h1>
                                    <p class="text-center small" style="font-family: 'poppins', sans-serif">Enter your email & password to login</p>
                                </div>

                                <div class="panel-body">
                                    <div id="status"></div>
                                </div>

                                <form class="row g-3 needs-validation" id="form" method="GET">

                                    <div class="form-group col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" required>
                                    </div>

                                    
                                    <div class="form-group col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="position-relative">
                                            <input type="password" name="password" class="form-control"
                                                id="password" required>
                                            <i class="fas fa-eye-slash" id="hide_password" style="position: absolute; right: 25px; top: 16px; cursor: pointer"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button class="btn btn-primary w-100 btn-signin" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="credits">
                        {{-- &copy; <a href="#">adminpanel</a> --}}
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" role="dialog" id="modal_loading" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body pt-0" style="background-color: #FAFAF8; border-radius: 6px;">
                        <div class="text-center">
                            <img style="border-radius: 4px; height: 140px;" src="{{ asset('assets/img/project/icon/loader.gif') }}" alt="Loading">
                            <h6 style="position: absolute; bottom: 10%; left: 38%;" class="modal-title pb-2">Mohon Tunggu..</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinymce/tinymce.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    
    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/sweetalert/sweetalert.min.js') }}"></script>

    <script>
        $('#hide_password').on('click', function(){
            if($(this).hasClass('fa-eye-slash')){
                $(this).removeClass('fa-eye-slash');
                $(this).addClass('fa-eye');
                $(this).siblings().attr('type', 'text');
            } else{
                $(this).removeClass('fa-eye');
                $(this).addClass('fa-eye-slash');
                $(this).siblings().attr('type', 'password');
            }
        })

        $('#form').submit(function(e){
            e.preventDefault();

            $("#modal_loading").modal('show');
            $.ajax({
                url : "/admin/login",
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(response){
                setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                if(response.status === 201){
                    swal(response.message, {  icon: 'success', }).then(function(){
                        window.location.href = response.link;
                    });
                }else{
                    swal(response.message, {  icon: 'error', });
                }
                },
                error: function (jqXHR, textStatus, errorThrown){
                setTimeout(function () {  $('#modal_loading').modal('hide'); }, 500);
                swal("Oops! Terjadi kesalahan segera hubungi tim IT (" + errorThrown + ")", {  icon: 'error', });
                }
            });
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</body>

</html>