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

        <!-- ======= Team Section ======= -->
          @include('front.partials.team',['team'=>$team])
        <!-- End Team Section -->





        <!-- ======= Blog Section ======= -->
        @include('front.partials.blog')
        <!-- End Blog Section -->


        <!-- ======= Contact Section ======= -->
         @include('front.partials.contact')
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('front.partials.footer',['info'=>$info,'social'=>$social])
    <!-- End  Footer -->

@endsection

