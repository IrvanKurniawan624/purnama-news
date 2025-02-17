@extends('layouts.app')
@php
    use App\Helpers\App;
@endphp

@section('title', $berita_detail->judul)
@section('description', $berita_detail->meta_deskripsi)
@section('keywords', $berita_detail->meta_keyword)

@section('css')
<style>
    .harian-purnama-er-text > *{
        word-wrap: break-word;
        overflow: hidden!important;
    }

    .harian-purnama-er-content{
        padding-bottom: 30px;
    }

    .source-image{
        font-size: 12px;
        color: #777;
        font-weight: 400;
    }

    .harian-purnama-er-text img{
        padding: 10px 15px;
    }

    .harian-purnama-er-text img + *{
        padding: 0px 15px 10px 15px;
    }
</style>
@endsection

@section('content')
<div id="main">

    <!--====== HARIAN PURANAMA AUTHOR USER PART START ======-->
    <section class="harian-purnama-er-author-item-area harian-purnama-er-author-item-layout-1 pb-20">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-9">
                    <div class="harian-purnama-er-author-item mb-40" style="margin-top: 0;">
                        <div class="harian-purnama-er-content">
                            <h3 class="harian-purnama-er-title">{{ $berita_detail->judul }}</h3>
                            <div class="harian-purnama-er-meta-item">
                                <div class="harian-purnama-er-meta-categories">
                                    <a href="/kategori/{{ $berita_detail->kategori->kategori_slug }}">{{ $berita_detail->kategori->kategori }}</a>
                                </div>
                                <div class="harian-purnama-er-meta-date">
                                    <span><i class="fas fa-calendar-alt"></i>{!! App::tgl_indo($berita_detail->created_at->format('Y-m-d')) . "&nbsp;" . $berita_detail->created_at->format('H:i A') !!}</span>
                                </div>
                            </div>
                            <div class="harian-purnama-er-meta-author" style="0 2px 1px -2px gray">
                                <div class="harian-purnama-er-author">
                                    <img src="/berkas/headline/{{ $berita_detail->gambar }}" width="100%" alt="">
                                    <span style="font-size: 12px; font-weight: 400; padding: 10px 0;">{{ $berita_detail->text_gambar }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-lg-12">
                                <div class="harian-purnama-er-blog-details-box">
                                    <div class="harian-purnama-er-text">
                                        <p>{!! $berita_detail->content !!}</p>
                                    </div>
                                    {{-- <div class="row">
                                        <div class=" col-lg-4 col-md-6">
                                            <div class="harian-purnama-er-blog-project-item">
                                                <img src="assets/images/blog-project-1.jpg" alt="">
                                                <div class="harian-purnama-er-blog-project-overlay">
                                                    <a href="#">Problem Solving</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-lg-4 col-md-6">
                                            <div class="harian-purnama-er-blog-project-item">
                                                <img src="assets/images/blog-project-2.jpg" alt="">
                                                <div class="harian-purnama-er-blog-project-overlay">
                                                    <a href="#">Sketching</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" col-lg-4 col-md-6 d-none d-lg-block">
                                            <div class="harian-purnama-er-blog-project-item">
                                                <img src="assets/images/blog-project-3.jpg" alt="">
                                                <div class="harian-purnama-er-blog-project-overlay">
                                                    <a href="#">Designing</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="harian-purnama-er-footer-add-item text-center pt-55">
                                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4416965990315520"crossorigin="anonymous"></script>
                                        <!-- Image Bottom Google 1 -->
                                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4416965990315520" data-ad-slot="2597015540" data-ad-format="auto"data-full-width-responsive="true"></ins>
                                        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                                    </div>
                                    <div class="harian-purnama-er-social-share-tag d-block d-sm-flex justify-content-between align-items-center">
                                        <div class="harian-purnama-er-tag">
                                            <ul>
                                                <li><a href="#">Popular</a></li>
                                                <li><a href="#">Desgin</a></li>
                                                <li><a href="#">UX</a></li>
                                            </ul>
                                        </div>
                                        <div class="harian-purnama-er-social">
                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-typo3"></i></a></li>
                                                <li><a href="#"><i class="fab fa-staylinked"></i></a></li>
                                                <li><a href="#"><i class="fab fa-tumblr"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="harian-purnama-er-blog-post-prev-next d-flex justify-content-between align-items-center">
                                        <div class="harian-purnama-er-post-prev-next">
                                            @if(!empty($previous))
                                            <a href="/detail/{{ $previous->slug_judul }}">
                                                <span>Prev Post</span>
                                                <h4 class="harian-purnama-er-title">{{ $previous->judul }}</h4>
                                            </a>
                                            @endif
                                        </div>
                                        <div class="harian-purnama-er-post-prev-next text-end">
                                            @if (!empty($next))
                                            <a href="/detail/{{ $next->slug_judul }}">
                                                <span>Next Post</span>
                                                <h4 class="harian-purnama-er-title">{{ $next->judul }}</h4>
                                            </a>
                                            @endif
                                        </div>
                                        <div class="harian-purnama-er-post-bars">
                                            <a href="#"><img src="assets/images/icon/post-bars.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3">
                    <div class="harian-purnama-er-populer-news-sidebar">

                        <div class="harian-purnama-er-populer-news-sidebar-post pt-60">
                            <div class="harian-purnama-er-popular-news-title">
                                <ul class="nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Most Popular</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Most Recent</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent-2">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="harian-purnama-er-sidebar-latest-post-box">
                                        @foreach ($trending as $item)
                                        <div class="harian-purnama-er-sidebar-latest-post-item">
                                            <div class="harian-purnama-er-thumb">
                                                <img src="/berkas/headline/{{ $item->gambar }}" alt="latest">
                                            </div>
                                            <div class="harian-purnama-er-content">
                                                <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($item->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                                <h4 class="harian-purnama-er-title"><a href="/detail/{{ $item->slug_judul }}">{{ $item->judul }}</a></h4>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="harian-purnama-er-sidebar-latest-post-box">
                                        @foreach ($lastest as $item)
                                        <div class="harian-purnama-er-sidebar-latest-post-item">
                                            <div class="harian-purnama-er-thumb">
                                                <img src="/berkas/headline/{{ $item->gambar }}" alt="latest">
                                            </div>
                                            <div class="harian-purnama-er-content">
                                                <span><i class="fas fa-calendar-alt"></i> {!! App::tgl_indo($item->created_at->format('Y-m-d')) . "&nbsp;" . $item->created_at->format('H:i A') !!}</span>
                                                <h4 class="harian-purnama-er-title"><a href="/detail/{{ $item->slug_judul }}">{{ $item->judul }}</a></h4>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="harian-purnama-er-populer-news-social harian-purnama-er-author-page-social mt-40">
                            <div class="harian-purnama-er-popular-news-title">
                                <h3 class="harian-purnama-er-title">Social Connects</h3>
                            </div>
                            <div class="harian-purnama-er-social-list">
                                <div class="harian-purnama-er-list">
                                    <a href="#">
                                        <span><i class="fab fa-facebook-f"></i> <span>15000</span> Likes</span>
                                        <span>Like</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-twitter"></i> <span>15000</span> Likes</span>
                                        <span>Tweet</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-behance"></i> <span>5k+</span> Follower</span>
                                        <span>Follow</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-youtube"></i> <span>15000</span> Subscribe</span>
                                        <span>Subscribe</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="harian-purnama-er-populer-news-social harian-purnama-er-author-page-social mt-40">
                            <div class="harian-purnama-er-popular-news-title">
                                <h3 class="harian-purnama-er-title">Advertisement</h3>
                            </div>
                            <div class="harian-purnama-er-video-post harian-purnama-er-recently-viewed-item">
                                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4416965990315520"
                                    crossorigin="anonymous"></script>
                                <ins class="adsbygoogle"
                                    style="display:block; text-align:center;"
                                    data-ad-layout="in-article"
                                    data-ad-format="fluid"
                                    data-ad-client="ca-pub-4416965990315520"
                                    data-ad-slot="5447336325"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== HARIAN PURANAMA AUTHOR USER PART ENDS ======-->

</div>    
@endsection

@section('js')
<script>
    $(document).ready(function(){
        $('.source-image').parent().addClass('d-flex');
        $('.source-image').parent().css("flex-direction", "column");
        $('.source-image').parent().find('br').remove();
        $('.source-image').parent().find('img').css('padding-bottom', 0);
    });
</script>
@endsection
