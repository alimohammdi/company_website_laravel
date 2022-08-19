@extends('layouts.master')
@section('seo')
    @include('front.partials.seo',['data'=>$seo])
@endsection
@section('content')
    <!-- ======= Header ======= -->
    @include('front.partials.header')
    <!-- End Header -->

    <!-- ======= hero Section ======= -->
   @include('front.partials.hero')
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        @include('front.partials.about',['about'=>$about])
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        @include('front.partials.services')
        <!-- End Services Section -->

        <!-- ======= Team Section ======= -->
          @include('front.partials.team')
        <!-- End Team Section -->

        <!-- ======= Portfolio Section ======= -->
          @include('front.partials.portfolio')
        <!-- End Portfolio Section -->



        <!-- ======= Blog Section ======= -->
        @include('front.partials.blog')
        <!-- End Blog Section -->


        <!-- ======= Contact Section ======= -->
         @include('front.partials.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.partials.footer')
    <!-- End  Footer -->

@endsection

