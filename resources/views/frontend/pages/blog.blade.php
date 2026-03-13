@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
        <!-- Page Banner Start -->
        <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title wow fadeInUp delay-0-2s"> Blog Standard</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active"> Blog Standard</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Blog Standard Area start -->
        <section class="blog-standard-area pb-70 rpb-40 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-standard-wrap">
                            <div class="row">
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/blog/blog-standard1.jpg') }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ route('blog') }}">Design</a>
                                                <a class="tag" href="{{ route('blog') }}">Figma</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Tips For Conducting to Usability Studies With Participants</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-4s">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/blog/blog-standard2.jpg') }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ route('blog') }}">Design</a>
                                                <a class="tag" href="{{ route('blog') }}">Figma</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Online Environment Work For Older Users systems ways Tips Usability Studies Pants</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/blog/blog-standard3.jpg') }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ route('blog') }}">Design</a>
                                                <a class="tag" href="{{ route('blog') }}">Figma</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Tips For Conducting to Usability Studies With Participants</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-4s">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/blog/blog-standard4.jpg') }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ route('blog') }}">Design</a>
                                                <a class="tag" href="{{ route('blog') }}">Figma</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Online Environment Work For Older Users systems ways Tips Usability Studies Pants</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/blog/blog-standard5.jpg') }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ route('blog') }}">Design</a>
                                                <a class="tag" href="{{ route('blog') }}">Figma</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Tips For Conducting to Usability Studies With Participants</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-4s">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/blog/blog-standard6.jpg') }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ route('blog') }}">Design</a>
                                                <a class="tag" href="{{ route('blog') }}">Figma</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Online Environment Work For Older Users systems ways Tips Usability Studies Pants</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-2s">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/blog/blog-standard7.jpg') }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ route('blog') }}">Design</a>
                                                <a class="tag" href="{{ route('blog') }}">Figma</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Tips For Conducting to Usability Studies With Participants</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item">
                                    <div class="blog-item style-two wow fadeInUp delay-0-4s">
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/blog/blog-standard8.jpg') }}" alt="Blog Standard">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-20">
                                                <a class="tag" href="{{ route('blog') }}">Design</a>
                                                <a class="tag" href="{{ route('blog') }}">Figma</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Online Environment Work For Older Users systems ways Tips Usability Studies Pants</a></h5>
                                            <hr>
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> September 25, 2023</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 item offset-md-6">
                                    <div class="news-more-btn text-center mt-35 wow fadeInUp delay-0-2s">
                                        <a href="{{ route('blog') }}" class="theme-btn">View More Projects <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="main-sidebar rmt-65">
                            <div class="widget widget-search wow fadeInUp delay-0-2s">
                                <h4 class="widget-title">Search</h4>
                                <form action="#" class="default-search-form">
                                    <input type="text" placeholder="Keywords" required>
                                    <button type="submit" class="searchbutton far fa-search"></button>
                                </form>
                            </div>
                            <div class="widget widget-category wow fadeInUp delay-0-4s">
                                <h4 class="widget-title">Category</h4>
                                <ul>
                                    <li><i class="far fa-angle-right"></i> <a href="{{ route('blog') }}">Web Design</a></li>
                                    <li><i class="far fa-angle-right"></i> <a href="{{ route('blog') }}">Mobile Apps Design</a></li>
                                    <li><i class="far fa-angle-right"></i> <a href="{{ route('blog') }}">Brand Identity Design</a></li>
                                    <li><i class="far fa-angle-right"></i> <a href="{{ route('blog') }}">Motion Graphic Design</a></li>
                                    <li><i class="far fa-angle-right"></i> <a href="{{ route('blog') }}">Web Development</a></li>
                                    <li><i class="far fa-angle-right"></i> <a href="{{ route('blog') }}">Digital Marketing</a></li>
                                </ul>
                            </div>
                            <div class="widget widget-recent-news wow fadeInUp delay-0-2s">
                                <h4 class="widget-title">Latest News</h4>
                                <ul>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news1.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> Sep 25, 2023</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Tips For Conducting Studie</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news2.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> Sep 25, 2023</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Usability With Participants</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news3.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <div class="blog-meta mb-5">
                                                <a class="date" href="#"><i class="far fa-calendar-alt"></i> Sep 25, 2023</a>
                                            </div>
                                            <h5><a href="{{ route('blogDetails') }}">Online Environment Work</a></h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-tag-cloud wow fadeInUp delay-0-2s">
                                <h4 class="widget-title">Popular Tags</h4>
                                <div class="tag-coulds">
                                    <a href="{{ route('blog') }}">Design</a>
                                    <a href="{{ route('blog') }}">Figma</a>
                                    <a href="{{ route('blog') }}">Apps</a>
                                    <a href="{{ route('blog') }}">Branding</a>
                                    <a href="{{ route('blog') }}">Development</a>
                                    <a href="{{ route('blog') }}">Digital</a>
                                    <a href="{{ route('blog') }}">Mobile Apps</a>
                                </div>
                            </div>
                            <div class="widget widget-cta wow fadeInUp delay-0-2s">
                                <div class="cta-widget" style="background-image: url(assets/images/widgets/widget-cta.jpg);">
                                    <span class="sub-title">Get A Quote</span>
                                    <h4>Looking For Creative Web Designer</h4>
                                    <a href="{{ route('contact') }}" class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-lines">
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
               <span></span><span></span>
            </div>
        </section>
        <!-- Blog Standard Area end -->

            <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection