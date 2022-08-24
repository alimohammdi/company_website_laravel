@extends('layouts.master')

@section('content')
    <!-- ======= Header ======= -->
   @include('front.partials.blog.header')

    <main id="main">

        <!-- ======= Blog Header ======= -->
      @include('front.partials.blog.header_bg')
        <!-- End Blog Header -->

        <!-- ======= Blog Page ======= -->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row">
                    <!-- start left sidebar -->
                   @include('front.partials.blog.leftsidebar',['allcategory'=>$allcategory,'recentPost'=>$recent_post])
                    <!-- End left sidebar -->
                    <!-- Start single blog -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            @include('front.partials.blog.rightsidebar',['allpost'=>$allpost])
                        </div>
                    </div>
                    <!-- end single blog -->
                </div>
            </div>
        </div>
        <!-- End Blog Page -->

    </main>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
   @include('front.partials.footer',['social'=>$social,'info'=>$info])
    <!-- End  Footer -->
@endsection
