@extends('layouts.site')
<!-- Styles -->
<!-- TailwindCSS -->
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Nunito';
    }
</style>
@livewireStyles
@section('content')
    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-capacity">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner-banner-detail">
                        {{--<p><a href="javascript:void(0)">Home</a><span> - </span>About Us</p>
                        <h2>Our Strategy</h2>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner End -->

    <!-- 404 Error -->
    <section id="error_page" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                @if (session('message'))
                    <div class="alert alert-success alert-rounded"><i
                            class="fa fa-check-circle"></i> {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-3 col-lg-3"></div>
                    <div class="col-md-4 col-lg-4">
                        <img style="padding-left: 5%;" src="{{asset('logo/logo-02.jpg')}}">
                    </div>
                </div>

                <div class="row">
                    @foreach($capacity_development->capacity_development_sections as $capacity_development_section)
                        <div class="blog-box-deatil">
                            <p>{!! $capacity_development_section->section !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Login End -->




@stop
@livewireScripts
<!-- Scripts -->


