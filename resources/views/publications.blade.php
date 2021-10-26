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
    <section style="margin-top: 100px" id="inner-banner-contact">
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
                <div class="col-md-12">
                    <div class="inner_heading heading_space">
                        <h2>Hello to <span> CAFP team</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (session('message'))
                    <div class="alert alert-success alert-rounded"><i class="fa fa-check-circle"></i>  {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                @endif
                <form method="post" action="{{url('/send_email')}}" class="contact_form">
                    @csrf
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control">
                        </div>


                        <div class="form-group">
                            <input type="email" name="email" placeholder="E - mail" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="message" placeholder="Enter your Message"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="form-group">
                            <input name="button" class="contact-form-button" value="Submit" type="submit">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Login End -->

    @live


@stop
@livewireScripts
<!-- Scripts -->


