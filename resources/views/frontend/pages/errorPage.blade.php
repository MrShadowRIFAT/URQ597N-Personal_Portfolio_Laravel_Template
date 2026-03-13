@extends('frontend.layouts.app')
@section('title', '404')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
       
  <!--404 Error Area Start -->
        <section class="error-area pt-185 rpt-130 pb-130 rpb-100 rel z-1 text-center">
            <div class="container">
                <div class="error-content">
                    <div class="image mb-85 rmb-55 wow fadeInUp delay-0-2s">
                        <img src="{{ asset('/assets/images/shape/404-error.png') }}" alt="Error">
                    </div>
                    <div class="section-title mb-40 wow fadeInUp delay-0-2s">
                        <h1>OPPS!</h1>
                        <h2>This Page Are Can't be Found</h2>
                    </div>
                    <a href="{{ route('home') }}" class="theme-btn wow fadeInUp delay-0-2s">Go To Homepage <i class="far fa-angle-right"></i></a>
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
        <!--404 Error Area End -->
            
    
    <!-- footer area end -->
@endsection