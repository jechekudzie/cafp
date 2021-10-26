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
    <section style="margin-top: 100px" id="inner-banner-vision">
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

    <!--  Vision  -->
    <section id="creative" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div style="text-align: center" class="heading">
                    <h2>CAFP Vision, Mission and Strategic Objectives</h2>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 m-t-35">
                    <div class="creative_detail">
                        <div class="tag">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                        <h3>VISION</h3>
                        <p>A competitive food and nutrition secure Zimbabwe.</p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 m-t-35">
                    <div class="creative_detail">
                        <div class="tag">
                            <i class="fa fa-clone" aria-hidden="true"></i>
                        </div>
                        <h3>MISSION</h3>
                        <p>
                            To provide competitive-based solutions necessary to shape productive, sustainable, inclusive
                            and resilient agricultural and food systems; alleviate poverty; create wealth and sustain
                            the environment.
                        </p>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 m-t-35">
                    <div class="creative_detail">
                        <div class="tag">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <h3>Strategic Objectives </h3>
                        <ul class="special-services-list">
                            <li>1.
                                To shape a productive,
                                sustainable,
                                inclusive,
                                and
                                resilient agricultural and food
                                system that is capable of achieving broad-based agricultural growth and development to
                                end hunger and malnutrition, and reduce poverty through high quality evidence based
                                public research goods on policies, investments, and programmes.
                            </li>
                            <li>2.  To conduct, catalyse, assist, curate and support policy
                                research and analysis in
                                Zimbabwe or elsewhere into all aspects of agriculture.
                            </li>
                            <li>3.  To integrate research findings into national, regional,
                                and international
                                investments, policy strategies, dialogue, and programmes.
                            </li>
                            <li>4.  To promote platforms for dialogue and engaging to enable
                                agriculture sector
                                stakeholders to effectively participate in agricultural (all value chains) policy
                                development and implementation.
                            </li>
                            <li>5.  To establish strategic alliances with institutions that have similar and
                                complementary mandates
                            </li>
                            <li>6.  To support the development and strengthening of capacity for policy research,
                                analysis and outreach of public and private institutions through the establishment of
                                strategic alliances, and organizational capacity building of key agriculture sectors
                                stakeholders.
                            </li>
                            <li>7.  To build an environment of trust, transparency and accountability necessary for
                                fostering long-term investment, financial stability and business integrity of the Center
                            </li>
                            <li>8.  To responsibly generate and manage the Center’s resources in order to enhance the
                                long-term sustainability of the Center.
                            </li>
                        </ul>

                        <div style="padding-left: 0%" align="left" class="row">
                            <table>

                                <tr>
                                    <td>
                                        <h1 style="text-align:center;color: black;">I</h1>
                                    </td>
                                    <td>
                                        <h5 style="color: black; font-size: large">INNOVATIVE  </h5>
                                        <p style="color: black; font-size: large">
                                            to stay ahead
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 style="text-align:center;color: black;">I</h1>
                                    </td>
                                    <td>
                                        <h5 style="color: black; font-size: large">INCLUSIVE </h5>
                                        <p style="color: black; font-size: large">
                                            to achieve sustainability.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 style="text-align:center;color: black;">I</h1>
                                    </td>
                                    <td>
                                        <h5 style="color: black; font-size: large">INTEGRITY </h5>
                                        <p style="color: black; font-size: large">
                                            in how the Institute conducts itself
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 style="text-align:center;color: black;">O</h1>
                                    </td>
                                    <td>
                                        <h5 style="color: black; font-size: large">OBJECTIVE </h5>
                                        <p style="color: black; font-size: large">
                                            in all research and outreach activities. </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 style="text-align:center;color: black;">T</h1>
                                    </td>
                                    <td>
                                        <h5 style="color: black; font-size: large">TRANSPARENT </h5>
                                        <p style="color: black; font-size: large">
                                            to foster growth.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 style="text-align:center;color: black;">A</h1>
                                    </td>
                                    <td>
                                        <h5 style="color: black; font-size: large">ACCOUNTABLE </h5>
                                        <p style="color: black; font-size: large">
                                            to all our stakeholders
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 style="text-align:center;color: black;">E</h1>
                                    </td>
                                    <td>
                                        <h5 style="color: black; font-size: large">EXCELLENCE  </h5>
                                        <p style="color: black; font-size: large">
                                            in all our work
                                        </p>
                                    </td>
                                </tr>

                            </table>

                            {{--<div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="what-make-details">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">INNOVATIVE </h4>
                                            <p>to Stay Ahead</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="what-make-details">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-html5" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">INCLUSIVE</h4>
                                            <p>to achieve sustainability </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="what-make-details">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-clone" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">INTEGRITY </h4>
                                            <p>in how the Institute conducts itself</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="what-make-details">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-pie-chart" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">OBJECTIVE </h4>
                                            <p>in all research and outreach activities </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="what-make-details">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">TRANSPARENT </h4>
                                            <p>to foster growth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="what-make-details">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-life-ring" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">ACCOUNTABLE </h4>
                                            <p>to all our stakeholders</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="what-make-details">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="javascript:void(0)">
                                                <i class="fa fa-life-ring" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">EXCELLENCE </h4>
                                            <p>in the quality of work</p>
                                        </div>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                        <br/>
                        <br/>
                        <a class="btn btn-success" href="{{asset('/assets/About The Center for Agriculture and Food Policy.pdf')}}"
                           target="_blank">Download Profile</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  Vision  -->



@stop
