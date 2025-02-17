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
    <section class="harian-purnama-er-main-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="harian-purnama-er-video-post-topbar">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="harian-purnama-er-video-post-title">
                                    <h3 class="mb-4">Hasil Pencarian&nbsp;{{ Request::input('n') }}</h3>
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
                                                        <p>{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi_singkat), 110); !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
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
