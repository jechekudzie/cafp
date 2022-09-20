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
                @foreach($capacity_developments as $capacity_development)
                    <div style="margin-top:-80px;" class="blog-box-deatil">
                        <h3><a style="color:#FCC100;" href="{{url('/capacity_development/'.$capacity_development->id)}}">{{$capacity_development->title}}</a></h3>
                        <br/>
                        <h4><a style="color: #117143;" href="{{url('/capacity_development/'.$capacity_development->id)}}"
                               target="_blank">Overview</a></h4>

                        <p>{!! $capacity_development->document !!}</p>
                        <a href="{{url('/capacity_development/'.$capacity_development->id)}}" class="btn btn-success">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Login End -->




@stop
@livewireScripts
<!-- Scripts -->


