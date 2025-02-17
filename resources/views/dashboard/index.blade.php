@extends('layouts.app')
@php
    use App\Helpers\App;
@endphp

@section('css')
    <style>
        .nav-pills .nav-link.active{
            background: #FF5800!important;
        }

        @media (min-width: 993px) and (max-width: 1273px){
            .nav-link{padding: .2rem .5rem!important};
        }

        @media (max-width: 993px){
            #pills-tab-2{
                margin-bottom: 15px;
            }
        }

        @media only screen and (max-width: 768px){
            #headline-container{
                position: relative;
            }

            #headline-date{
                font-size: 1.5rem;
                position: absolute;
                z-index: 100;
                top: 0;
                right: 16px;
            }

            .harian-purnama-er-meta-date{
                float: right;
            }

            .harian-purnama-er-title a{
                display: flex;
                min-width: 100%;
            }

            .harian-purnama-er-trending-news-list-box .harian-purnama-er-content .harian-purnama-er-meta-item .harian-purnama-er-meta-date{
                margin: unset!important;
            }
        }
    </style>
@endsection

@section('content')
<div id="main">
        <!--====== HARIAN PURNAMA HEDLINE POST PART START ======-->

    <section class="harian-purnama-er-video-post-area">
        <div class="container">
            <div class="row" id="headline-container">
                <div class="col-md-9 col-xl-10">
                    <div class="harian-purnama-er-video-post-topbar">
                        <div class="harian-purnama-er-video-post-title">
                            <h3 class="harian-purnama-er-title">Headline</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xl-2">
                    <h5 class="d-flex justify-content-center align-items-center" id="headline-date" style="font-size: 1.5rem">{{ App::tgl_indo(date('Y-m-d')) }}</h5>
                </div>
            </div>
            <div class="tab-content">
                <div class="" role="tabpanel">
                    <div class="justify-content-center row">
                        <div class="col-lg-3 col-md-6 order-lg-1 order-1">
                            <div class="harian-purnama-er-video-post-item">
                                @if(!empty($headline[1]))
                                <div class="harian-purnama-er-trending-news-list-box">
                                    <div class="harian-purnama-er-thumb">
                                        <img src="/berkas/headline/{{ $headline[1]->gambar }}" alt="">
                                        <div class="harian-purnama-er-play">
                                            <a class="harian-purnama-er-video-popup" href="#">Headline</a>
                                        </div>
                                    </div>
                                    <div class="harian-purnama-er-content">
                                        <div class="harian-purnama-er-meta-item">
                                            <div class="harian-purnama-er-meta-categories">
                                                <a href="/kategori/{{ $headline[1]->kategori->kategori_slug }}">{{ $headline[1]->kategori->kategori }}</a>
                                            </div>
                                            <div class="harian-purnama-er-meta-date">
                                                <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($headline[1]->created_at->format('Y-m-d')) . "&nbsp;" . $headline[1]->created_at->format('H:i A') !!}</span>
                                            </div>
                                        </div>
                                        <div class="harian-purnama-er-trending-news-list-title">
                                            <h4 class="harian-purnama-er-title"><a href="/detail/{{ $headline[1]->slug_judul }}">{{ $headline[1]->judul }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(!empty($headline[2]))
                                <div class="harian-purnama-er-trending-news-list-box">
                                    <div class="harian-purnama-er-thumb">
                                        <img src="/berkas/headline/{{ $headline[2]->gambar }}" alt="">
                                        <div class="harian-purnama-er-play">
                                            <a class="harian-purnama-er-video-popup" href="#">Headline</a>
                                        </div>
                                    </div>
                                    <div class="harian-purnama-er-content">
                                        <div class="harian-purnama-er-meta-item">
                                            <div class="harian-purnama-er-meta-categories">
                                                <a href="/kategori/{{ $headline[2]->kategori->kategori_slug }}">{{ $headline[2]->kategori->kategori }}</a>
                                            </div>
                                            <div class="harian-purnama-er-meta-date">
                                                <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($headline[2]->created_at->format('Y-m-d')) . "&nbsp;" . $headline[2]->created_at->format('H:i A') !!}</span>
                                            </div>
                                        </div>
                                        <div class="harian-purnama-er-trending-news-list-title">
                                            <h4 class="harian-purnama-er-title"><a href="/detail/{{ $headline[2]->slug_judul }}">{{ $headline[2]->judul }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-2 order-3">
                            @if(!empty($headline[0]))
                            <div class="harian-purnama-er-video-post-item">
                                <div class="harian-purnama-er-trending-news-list-box main-item">
                                    <div class="harian-purnama-er-thumb">
                                        <img src="{{ '/berkas/headline/' . $headline[0]->gambar }}" alt="">
                                        <div class="harian-purnama-er-play">
                                            <a class="harian-purnama-er-video-popup" href="#">Headline</a>
                                        </div>
                                    </div>
                                    <div class="harian-purnama-er-content">
                                        <div class="harian-purnama-er-meta-item">
                                            <div class="harian-purnama-er-meta-categories">
                                                <a href="/kategori/{{ $headline[0]->kategori->kategori_slug }}">{{ $headline[0]->kategori->kategori }}</a>
                                            </div>
                                            <div class="harian-purnama-er-meta-date">
                                                <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($headline[0]->created_at->format('Y-m-d')) . "&nbsp;" . $headline[0]->created_at->format('H:i A') !!}</span>
                                            </div>
                                        </div>
                                        <div class="harian-purnama-er-trending-news-list-title">
                                            <h4 class="harian-purnama-er-title"><a href="/detail/{{ $headline[0]->slug_judul }}">{{ $headline[0]->judul }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="  col-lg-3 col-md-6 order-lg-3 order-2">
                            <div class="harian-purnama-er-video-post-item">
                                @if(!empty($headline[3]))
                                <div class="harian-purnama-er-trending-news-list-box">
                                    <div class="harian-purnama-er-thumb">
                                        <img src="/berkas/headline/{{ $headline[3]->gambar }}" alt="">
                                        <div class="harian-purnama-er-play">
                                            <a class="harian-purnama-er-video-popup" href="#">Headline</a>
                                        </div>
                                    </div>
                                    <div class="harian-purnama-er-content">
                                        <div class="harian-purnama-er-meta-item">
                                            <div class="harian-purnama-er-meta-categories">
                                                <a href="/kategori/{{ $headline[3]->kategori->kategori_slug }}">{{ $headline[3]->kategori->kategori }}</a>
                                            </div>
                                            <div class="harian-purnama-er-meta-date">
                                                <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($headline[3]->created_at->format('Y-m-d')) . "&nbsp;" . $headline[3]->created_at->format('H:i A') !!}</span>
                                            </div>
                                        </div>
                                        <div class="harian-purnama-er-trending-news-list-title">
                                            <h4 class="harian-purnama-er-title"><a href="/detail/{{ $headline[3]->slug_judul }}">{{ $headline[3]->judul }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(!empty($headline[4]))
                                <div class="harian-purnama-er-trending-news-list-box">
                                    <div class="harian-purnama-er-thumb">
                                        <img src="/berkas/headline/{{ $headline[4]->gambar }}" alt="">
                                        <div class="harian-purnama-er-play">
                                            <a class="harian-purnama-er-video-popup" href="#">Headline</a>
                                        </div>
                                    </div>
                                    <div class="harian-purnama-er-content">
                                        <div class="harian-purnama-er-meta-item">
                                            <div class="harian-purnama-er-meta-categories">
                                                <a href="/kategori/{{ $headline[4]->kategori->kategori_slug }}">{{ $headline[4]->kategori->kategori }}</a>
                                            </div>
                                            <div class="harian-purnama-er-meta-date">
                                                <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($headline[4]->created_at->format('Y-m-d')) . "&nbsp;" . $headline[4]->created_at->format('H:i A') !!}</span>
                                            </div>
                                        </div>
                                        <div class="harian-purnama-er-trending-news-list-title">
                                            <h4 class="harian-purnama-er-title"><a href="/detail/{{ $headline[4]->slug_judul }}">{{ $headline[4]->judul }}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== HARIAN PURNAMA HEDLINE POST PART ENDS ======-->

    <section class="harian-purnama-er-trending-today-area">
        <div class="harian-purnama-er-bg-cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="harian-purnama-er-trending-today-topbar">
                        <div class="harian-purnama-er-trending-today-title">
                            <h3 class="harian-purnama-er-title">Trending News</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($trending as $key => $item)
                <div class="col-lg-3 col-md-6">
                    <div class="harian-purnama-er-trending-today-item">
                        <div class="harian-purnama-er-trending-news-list-box">
                            <div class="harian-purnama-er-thumb">
                                <img src="/berkas/headline/{{ $item->gambar }}"
                                    alt="">
                                <div class="trending-popup">
                                    <a class="trending-er-popup" href="#">Trending #{{$key + 1}}</a>
                                </div>
                            </div>
                            <div class="harian-purnama-er-content">
                                <div class="harian-purnama-er-meta-item">
                                    <div class="harian-purnama-er-meta-categories">
                                        <a href="/kategori/{{ $item->kategori->kategori_slug }}">{{ $item->kategori->kategori }}</a>
                                    </div>
                                    <div class="harian-purnama-er-meta-date">
                                        <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($item->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                    </div>
                                </div>
                                <div class="harian-purnama-er-trending-news-list-title">
                                    <h4 class="harian-purnama-er-title"><a href="/detail/{{ $item->slug_judul }}">{{ $item->judul }}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="harian-purnama-er-main-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="harian-purnama-er-video-post-topbar">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="harian-purnama-er-video-post-title">
                                    <h3 class="harian-purnama-er-title">Main Posts</h3>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="harian-purnama-er-video-post-tab">
                                    <ul class="nav nav-pills justify-content-lg-end justify-content-start" id="pills-tab-2" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="all-tab" data-bs-toggle="pill" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                                        </li>
                                        @foreach ($kategori_limit as $item)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="{{ $item->kategori_slug }}-tab" data-bs-toggle="pill" href="#{{ $item->kategori_slug }}" role="tab" aria-controls="{{ $item->kategori_slug }}" aria-selected="false">{{ $item->kategori }}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tab-content" id="pills-tabContent-2">
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row">
                                    @foreach ($berita as $item )
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="harian-purnama-er-main-posts-item">
                                            <div class="harian-purnama-er-trending-news-list-box">
                                                <div class="harian-purnama-er-thumb">
                                                    <img src="/berkas/headline/{{ $item->gambar }}"
                                                        alt="">
                                                </div>
                                                <div class="harian-purnama-er-content">
                                                    <div class="harian-purnama-er-meta-item">
                                                        <div class="harian-purnama-er-meta-categories">
                                                            <a href="/kategori/{{ $item->kategori->kategori_slug }}">{{ $item->kategori->kategori }}</a>
                                                        </div>
                                                        <div class="harian-purnama-er-meta-date">
                                                            <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($item->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                                        </div>
                                                    </div>
                                                    <div class="harian-purnama-er-trending-news-list-title">
                                                        <h4 class="harian-purnama-er-title"><a href="/detail/{{ $item->slug_judul }}">{{ $item->judul }}</a></h4>
                                                        {{-- <p>{!! \Illuminate\Support\Str::limit($item->content, 110) !!}</p> --}}
                                                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi_singkat), 110); !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @if(isset($kategori_limit[0]))
                            <div class="tab-pane fade" id="{{ $kategori_limit[0]->kategori_slug }}" role="tabpanel" aria-labelledby="{{ $kategori_limit[0]->kategori_slug }}-tab">
                                @php
                                    $a = $kategori_limit[0]->kategori_slug;
                                @endphp
                                <div class="row">
                                    @foreach ($$a as $item )
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="harian-purnama-er-main-posts-item">
                                            <div class="harian-purnama-er-trending-news-list-box">
                                                <div class="harian-purnama-er-thumb">
                                                    <img src="/berkas/headline/{{ $item->gambar }}"
                                                        alt="">
                                                </div>
                                                <div class="harian-purnama-er-content">
                                                    <div class="harian-purnama-er-meta-item">
                                                        <div class="harian-purnama-er-meta-categories">
                                                            <a href="/kategori/{{ $item->kategori->kategori_slug }}">{{ $item->kategori->kategori }}</a>
                                                        </div>
                                                        <div class="harian-purnama-er-meta-date">
                                                            <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($item->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                                        </div>
                                                    </div>
                                                    <div class="harian-purnama-er-trending-news-list-title">
                                                        <h4 class="harian-purnama-er-title"><a href="/detail/{{ $item->slug_judul }}">{{ $item->judul }}</a></h4>
                                                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi_singkat), 110); !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            @if(isset($kategori_limit[1]))
                            <div class="tab-pane fade" id="{{ $kategori_limit[1]->kategori_slug }}" role="tabpanel" aria-labelledby="{{ $kategori_limit[1]->kategori_slug }}-tab">
                                <div class="row">
                                    @php
                                        $b = $kategori_limit[1]->kategori_slug;
                                    @endphp
                                    @foreach ($$b as $item )
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="harian-purnama-er-main-posts-item">
                                            <div class="harian-purnama-er-trending-news-list-box">
                                                <div class="harian-purnama-er-thumb">
                                                    <img src="/berkas/headline/{{ $item->gambar }}"
                                                        alt="">
                                                </div>
                                                <div class="harian-purnama-er-content">
                                                    <div class="harian-purnama-er-meta-item">
                                                        <div class="harian-purnama-er-meta-categories">
                                                            <a href="/kategori/{{ $item->kategori->kategori_slug }}">{{ $item->kategori->kategori }}</a>
                                                        </div>
                                                        <div class="harian-purnama-er-meta-date">
                                                            <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($item->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                                        </div>
                                                    </div>
                                                    <div class="harian-purnama-er-trending-news-list-title">
                                                        <h4 class="harian-purnama-er-title"><a href="/detail/{{ $item->slug_judul }}">{{ $item->judul }}</a></h4>
                                                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi_singkat), 110); !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            @if(isset($kategori_limit[2]))
                            <div class="tab-pane fade" id="{{ $kategori_limit[2]->kategori_slug }}" role="tabpanel" aria-labelledby="{{ $kategori_limit[2]->kategori_slug }}-tab">
                                <div class="row">
                                    @php
                                        $c = $kategori_limit[2]->kategori_slug;
                                    @endphp
                                    @foreach ($$c as $item )
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="harian-purnama-er-main-posts-item">
                                            <div class="harian-purnama-er-trending-news-list-box">
                                                <div class="harian-purnama-er-thumb">
                                                    <img src="/berkas/headline/{{ $item->gambar }}"
                                                        alt="">
                                                </div>
                                                <div class="harian-purnama-er-content">
                                                    <div class="harian-purnama-er-meta-item">
                                                        <div class="harian-purnama-er-meta-categories">
                                                            <a href="/kategori/{{ $item->kategori->kategori_slug }}">{{ $item->kategori->kategori }}</a>
                                                        </div>
                                                        <div class="harian-purnama-er-meta-date">
                                                            <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($item->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                                        </div>
                                                    </div>
                                                    <div class="harian-purnama-er-trending-news-list-title">
                                                        <h4 class="harian-purnama-er-title"><a href="/detail/{{ $item->slug_judul }}">{{ $item->judul }}</a></h4>
                                                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi_singkat), 110); !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="harian-purnama-er-sidebar-about">
                        <div class="harian-purnama-er-sidebar-title">
                            <h4 class="harian-purnama-er-title">About Me</h4>
                        </div>
                        <div class="harian-purnama-er-sidebar-about-item">
                            <div class="harian-purnama-er-sidebar-about-user d-flex">
                                <div class="harian-purnama-er-thumb">
                                    <img src="https://html.quomodosoft.com/binduz/assets/images/video-post-thumb-4.png">
                                </div>
                                <div class="harian-purnama-er-content">
                                    <h4 class="harian-purnama-er-title">Nama Penulis</h4>
                                    <span>Author</span>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="harian-purnama-er-text">
                                <p>The functional aspect comes first in the work process because it’s the core of the
                                    object: What is its purpose? something else?</p>
                                <a class="harian-purnama-er-main-btn" href="#">Connect With Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="harian-purnama-er-sidebar-latest-post">
                        <div class="harian-purnama-er-sidebar-title">
                            <h4 class="harian-purnama-er-title">Berita Terbaru</h4>
                        </div>
                        @foreach ($lastest as $item)
                        <div class="harian-purnama-er-sidebar-latest-post-box">
                            <div class="harian-purnama-er-sidebar-latest-post-item">
                                <div class="harian-purnama-er-thumb">
                                    <img src="/berkas/headline/{{ $item->gambar }}"
                                        alt="latest">
                                </div>
                                <div class="harian-purnama-er-content">
                                    <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($item->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                    <h4 class="harian-purnama-er-title"><a href="/detail/{{ $item->slug_judul }}">{{ $item->judul }}</a></h4>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
