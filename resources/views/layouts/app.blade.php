@php
    use App\Helpers\App;
@endphp
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Harian Purnama - @yield('title')</title>

    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
    <link rel="stylesheet" href="{{ asset('front\css\boostrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{asset('assets/modules/izitoast/css/iziToast.min.css')}}">

    @yield('css')

</head>

<body>
        <!--====== OFFCANVAS MENU PART START ======-->

    <div class="harian-purnama-er-news-off_canvars_overlay"></div>
    <div class="harian-purnama-er-news-offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="harian-purnama-er-news-offcanvas_menu_wrapper">
                        <div class="harian-purnama-er-news-canvas_close">
                            <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="harian-purnama-er-news-offcanvas_main_menu">
                                <li class="harian-purnama-er-news-menu-item-has-children">
                                    <a href="/">Home </a>
                                </li>
                                <li class="harian-purnama-er-news-menu-item-has-children harian-purnama-er-news-active">
                                    <a href="#">Kategori</a>
                                    <i class="fas fa-arrow-down" style="position: absolute; right: 10px; top: 10px"></i>
                                    <ul class="harian-purnama-er-news-sub-menu">
                                        @foreach ($kategori as $item)
                                        <li><a href="/kategori/{{ $item->kategori_slug }}">{{ $item->kategori }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="harian-purnama-er-news-menu-item-has-children">
                                    <a href="archived.html">Author </a>
                                </li>
                                <li class="harian-purnama-er-news-menu-item-has-children">
                                    <a href="author.html">About</a>
                                </li>
                                <li class="harian-purnama-er-news-menu-item-has-children">
                                    <a href="author.html">Contact</a>
                                </li>
                                <li>
                                    <div class="harian-purnama-er-widget position-relative mt-3">
                                        <i style="position: absolute; font-size: .9rem; top: 8px; left: 9px" class="fas fa-search"></i>
                                        <input type="text" autocomplete="off" class="form-control search" onkeyup="search_keyup(this.value)" placeholder="Search anything..." style="padding-left: 25px!important; text-indent: 5px;font-size: .8rem; padding: .275rem .75rem; width: 100%">
                                        <ul class="search-result">
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== OFFCANVAS MENU PART ENDS ======-->
    <header class="harian-purnama-er-header-area">
        <div class="harian-purnama-er-header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-brand logo"><a href="/"><img src="{{ asset('assets/img/project/logo.png') }}" style="width: 170px" alt=""></a></div> <!-- logo -->
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <?php
                                        $url_menu = Request::segment(1);
                                        $url_submenu = Request::segment(2);
                                    ?>
                                    <ul class="navbar-nav m-auto">
                                        <li class="nav-item @if($url_menu == '') active @endif">
                                            <a class="nav-link" href="/">Home</a>
                                        </li>
                                        <li class="nav-item @if($url_menu == 'kategori') active @endif">
                                            <a class="nav-link">Kategori <i class="fa fa-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                @foreach ($kategori as $item)
                                                <li><a href="/kategori/{{ $item->kategori_slug }}" class="header-kategori @if($url_submenu == $item->kategori_slug) active @endif">{{ $item->kategori }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/author">Author</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/about">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/contact">Contact</a>
                                        </li>
                                    </ul>
                                </div> <!-- navbar collapse -->
                                <div class="harian-purnama-er-navbar-btn d-flex">
                                    <div class="harian-purnama-er-widget position-relative">
                                        <i style="position: absolute; font-size: .9rem; top: 8px; left: 9px" class="fas fa-search"></i>
                                        <input type="text" autocomplete="off" class="form-control search" onkeyup="search_keyup(this.value)" placeholder="Search anything..." style="padding-left: 25px!important; text-indent: 5px;font-size: .8rem; padding: .275rem .75rem; width: 200px">
                                        <ul class="search-result">
                                        </ul>
                                    </div>
                                    <span class="harian-purnama-er-toggle-btn harian-purnama-er-news-canvas_open d-block d-lg-none">
                                        <i class="fas fa-bars"></i>
                                    </span>
                                </div>
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="harian-purnama-er-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="harian-purnama-er-footer-widget-style-1">
                                <div class="harian-purnama-er-footer-title">
                                    <h3 class="harian-purnama-er-title">Categories</h3>
                                </div>
                                <div class="harian-purnama-er-footer-menu-list">
                                    <ul class="row">
                                        @foreach ($kategori as $item)
                                        <li class="col-6"><a href="/kategori/{{ $item->kategori_slug }}">{{ $item->kategori }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="harian-purnama-er-footer-widget-style-3">
                                <div class="harian-purnama-er-footer-title">
                                    <h3 class="harian-purnama-er-title">Recent Feeds</h3>
                                </div>
                                <div class="harian-purnama-er-footer-widget-feeds">
                                    <div class="harian-purnama-er-sidebar-latest-post-box">
                                        @for($i=0;$i<2;$i++)
                                        @isset($lastest[$i])
                                            <div class="harian-purnama-er-sidebar-latest-post-item">
                                                <div class="harian-purnama-er-thumb">
                                                    <img src="/berkas/headline/{{ $lastest[$i]->gambar }}" alt="latest">
                                                </div>
                                                <div class="harian-purnama-er-content">
                                                    <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($lastest[$i]->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                                    <h4 class="harian-purnama-er-title"><a href="/detail/{{ $lastest[$i]->slug_judul }}">{{ $lastest[$i]->judul }}</a></h4>
                                                </div>
                                            </div>
                                        @endisset
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="harian-purnama-er-footer-widget-style-3">
                                <div class="harian-purnama-er-footer-title">
                                    <h3 class="harian-purnama-er-title">Trending News</h3>
                                </div>
                                <div class="harian-purnama-er-footer-widget-feeds">
                                    <div class="harian-purnama-er-sidebar-latest-post-box">
                                        @for($i=0;$i<2;$i++)
                                        @isset($trending[$i])
                                        <div class="harian-purnama-er-sidebar-latest-post-item">
                                            <div class="harian-purnama-er-thumb">
                                                <img src="/berkas/headline/{{ $trending[$i]->gambar }}" alt="latest">
                                            </div>
                                            <div class="harian-purnama-er-content">
                                                <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($trending[$i]->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                                <h4 class="harian-purnama-er-title"><a href="/detail/{{ $trending[$i]->slug_judul }}">{{ $trending[$i]->judul }}</a></h4>
                                            </div>
                                        </div>
                                        @endisset
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="harian-purnama-er-footer-widget-info">
                        <div class="harian-purnama-er-logo">
                            <a href="#"><img src="{{ asset('assets/img/project/logo-dark.png') }}" alt=""></a>
                        </div>
                        <div class="harian-purnama-er-social">
                            <ul style="display: flex; justify-content: center; gap: 8px;">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="harian-purnama-er-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspend isse ultrices gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="harian-purnama-er-back-to-top">
            <p>BACK TO TOP <i class="fas fa-long-arrow-right"></i></p>
        </div>
    </footer>
    <div class="harian-purnama-er-footer-copyright-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="harian-purnama-er-copyright-text">
                        <p>Copyright @<span>HarianPurnama</span></p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="harian-purnama-er-copyright-menu float-lg-end float-none">
                        <ul>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Claim A Report</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="harian-purnama-er-back-to-top">
        <p>BACK TO TOP <i class="fas fa-long-arrow-right"></i></p>
    </div>





    <script src="{{ asset('front\js\jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('front/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front\js\magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front\js\boostrap.min.js') }}"></script>
    <script src="{{ asset('front\js\slick.min.js') }}"></script>
    <script src="{{ asset('front\js\nice-select.min.js') }}"></script>
    <script src="{{ asset('front\js\image-loaded.min.js') }}"></script>
    <script src="{{ asset('front\js\isotop.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{asset('assets/modules/izitoast/js/iziToast.min.js')}}"></script>
    
    <script src="{{ asset('front/js/main.js') }}"></script>
    
    @yield('js')

    {{-- <script src="{{ asset('assets/modules/jquery.min.js') }}"></script> --}}
    <script>
        function search_keyup(value){
            if (event.which == 13 || event.keyCode == 13) {
                jQuery.ajax({
                    url: '/display-search/' + value,
                    type: "GET",
                    dataType: 'JSON',
                    success: function (response, textStatus, jQxhr) {
                        jQuery('.search-result').empty();
                        if (response > 0) {
                            window.location.href =
                                `/search?n=${value.replace(/ /g, "+")}`;
                        }else{
                            iziToast.error({
                            title: 'Error!',
                            message: "Berita yang dicari tidak ditemukan",
                            position: 'topRight'
                        });
                        }
                    },
                    error: function (jqXhr, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.warn(jqXhr.responseText);
                    },
                });
            }

            $('.search').keydown(function (event) {
                if (event.keyCode == 13) { //JIKA PENCET ENTER
                    console.log('bbb');
                    event.preventDefault();
                    return false;
                }
            });

            if (value.length > 2) {
                jQuery.ajax({
                    url: '/get-data-search/' + value,
                    type: "GET",
                    dataType: 'JSON',
                    success: function (response, textStatus, jQxhr) {
                        jQuery('.search-result').empty();
                        jQuery.each(response, function (index, value) {
                            jQuery('.search-result').append(`<a style="margin:0;padding:0;border:none" href="/detail/${value.slug_judul.replace(/ /g, "+")}"><li>${value.judul}</li></a>`);
                        });
                    },
                    error: function (jqXhr, textStatus, errorThrown) {
                        console.log(errorThrown);
                        console.warn(jqXhr.responseText);
                    },
                });
            } else {
                jQuery('.search-result').empty();
            }
        }

        jQuery('.search').on("focus", function(){
            jQuery('.search-result').addClass('open');
        })

        jQuery('.search').on("blur", function(){
            
            setTimeout(function(){jQuery('.search-result').removeClass('open')}, 500);
        })
    </script>

</body>

</html>
