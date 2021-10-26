@extends('layouts.site')

@section('content')
    <style>
        .wpf-demo-team {
            width: 400px;
            height: 400px;
        }
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
    <section id="inner-banner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner-banner-detail">
                        <p><a href="javascript:void(0)">Home</a><span> - </span>About Us</p>
                        <h2>Board Of Trustees</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner End -->

    <!--  Team Start  -->
    <section id="team" class="padding_top padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12 heading_space">
                    <div class="inner_heading">
                        <p>About us</p>
                        <h2>Board Of Trustees</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="team_slider">
                    <div class="item">
                        <div class="team-effect">
                            <figure class="wpf-demo-team">
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
                                    <img src="{{asset('/trustees_pics/takavarasha.jpg')}}">
                                </a>
                            </figure>
                            <div class="team_detail">
                                <h3>Dr. Tobias Takavarasha </h3>
                                <span>Chairperson</span>
                            </div>
                            <!-- Large modal -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-effect">
                            <figure class="wpf-demo-team">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('/trustees_pics/Bwenje.jpeg')}}">
                                </a>
                            </figure>
                            <div class="team_detail">
                                <h3>Mr. Clemence Taderera Bwenje   </h3>
                                <span>Vice Chairperson</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-effect">
                            <figure class="wpf-demo-team">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('/trustees_pics/Amb-Mubi.jpg')}}">
                                </a>
                            </figure>
                            <div class="team_detail">
                                <h3>Amb. Mary Mubi   </h3>
                                <span>Trustee</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-effect">
                            <figure class="wpf-demo-team">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('/trustees_pics/Mandas.jpg')}}">
                                </a>
                            </figure>
                            <div class="team_detail">
                                <h3>Dr. Mandas Marikanda   </h3>
                                <span>Trustee</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-effect">
                            <figure class="wpf-demo-team">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('/trustees_pics/mayoyo.png')}}">
                                </a>
                            </figure>
                            <div class="team_detail">
                                <h3>Mr. Alfios Mayoyo  </h3>
                                <span>Trustee</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-effect">
                            <figure class="wpf-demo-team">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('/trustees_pics/chance-Kabaghe-picture.jpg')}}">
                                </a>
                            </figure>
                            <div class="team_detail">
                                <h3>Hon. Chance Kabaghe     </h3>
                                <span>Trustee</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-effect">
                            <figure class="wpf-demo-team">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('/trustees_pics/Jayne_picture.jpg')}}">
                                </a>
                            </figure>
                            <div class="team_detail">
                                <h3>Professor Thom. Jayne    </h3>
                                <span>Trustee</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-effect">
                            <figure class="wpf-demo-team">
                                <a href="javascript:void(0)">
                                    <img src="{{asset('/trustees_pics/Jayne_picture.jpg')}}">
                                </a>
                            </figure>
                            <div class="team_detail">
                                <h3>Professor Thom. Jayne    </h3>
                                <span>Trustee</span>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
                         aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Team End  -->



@stop
