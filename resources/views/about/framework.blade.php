@extends('layouts.site')

@section('content')
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            /*border: 1px solid #dddddd;*/
            text-align: left;
            padding: 8px;
        }

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: l;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {

            display: block;

        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }

        .centered {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>
    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-framework">
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
    <!-- CAFP strategic research and policy development thematic areas  -->
    <section id="companyover-view" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div style="text-align: center;" class="col-md-12">
                    <div class="inner_heading heading_space">
                        <h2>Monitoring Evaluation, Learning and Impact Assessment Framework</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12"></div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div align="center" class="over-view">
                        <img src="{{asset('pics/monitor.png')}}">

                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <a class="btn btn-success" href="{{asset('/assets/About The Center for Agriculture and Food Policy.pdf')}}"
               target="_blank">Download Profile</a>
        </div>
    </section>
    <!-- CAFP strategic research and policy development thematic areas  -->



@stop

