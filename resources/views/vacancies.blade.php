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

@section('content')
    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-publications">
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

                @foreach($vacancies as $vacancy)
                    <div style="margin-top:-80px;" class="blog-box-deatil">
                        <h4><a style="color: #117143;" href="#"
                               target="_blank">Call For Applications: {{$vacancy->job_title}}</a></h4>
                        <p>{!! substr($vacancy->description,0,120) !!}....</p>
                        <button style="margin-bottom: 15px;" type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#staticBackdrop{{$vacancy->id}}">
                            View Full Job Description
                        </button>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- Login End -->

    <!-- Button trigger modal -->


    @foreach($vacancies as $vacancy)
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop{{$vacancy->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@stop

<!-- Scripts -->


