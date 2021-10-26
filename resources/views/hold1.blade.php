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
    <section id="inner-banner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner-banner-detail">
                        <p><a href="javascript:void(0)">Home</a><span> - </span>About Us</p>
                        <h2>Our Strategy</h2>
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
                        <ol>
                            <li>1. To shape a productive, sustainable, inclusive, and resilient agricultural and food
                                system that is capable of achieving broad-based agricultural growth and development to
                                end hunger and malnutrition, and reduce poverty through high quality evidence based
                                public research goods on policies, investments, and programmes.
                            </li>
                            <li>2. To conduct, catalyse, assist, curate and support policy research and analysis in
                                Zimbabwe or elsewhere into all aspects of agriculture.
                            </li>
                            <li>3. To integrate research findings into national, regional, and international
                                investments, policy strategies, dialogue, and programmes.
                            </li>
                            <li>4. To promote platforms for dialogue and engaging to enable agriculture sector
                                stakeholders to effectively participate in agricultural (all value chains) policy
                                development and implementation.
                            </li>
                            <li>5. To establish strategic alliances with institutions that have similar and
                                complementary mandates
                            </li>
                            <li>6. To support the development and strengthening of capacity for policy research,
                                analysis and outreach of public and private institutions through the establishment of
                                strategic alliances, and organizational capacity building of key agriculture sectors
                                stakeholders.
                            </li>
                            <li>7. To build an environment of trust, transparency and accountability necessary for
                                fostering long-term investment, financial stability and business integrity of the Center
                            </li>
                            <li>8. To responsibly generate and manage the Center’s resources in order to enhance the
                                long-term sustainability of the Center.
                            </li>
                        </ol>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  Vision  -->

    <!-- Approcach -->
    <section id="companyover-view" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div style="text-align: center" class="inner_heading heading_space">
                        <h2>Methodology and approach</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="over-view">
                        <p>
                            CAFP’s approach and specific research themes and activities are consistent with the
                            objectives and focal areas of National Development Strategies and country’s agriculture
                            sector priorities, the Comprehensive Africa Agriculture Development Programme (CAADP), the
                            Sustainable Development Goals (SDGs). Our approach include, but not limited to, the
                            following:
                        </p>
                        <ol class="special-services-list" style="margin-top: -25px;">
                            <li> Partnering with government, farmer unions, academic institutions, cooperating
                                partners, civil society, individual analysts and decision makers;
                            </li>
                            <li>
                                Integrating research, outreach, capacity building, and institutional strengthening
                                policy development and implementation;
                            </li>
                            <li>
                                Conducting policy analysis with attention to implementation, in particular provide
                                input and technical support to actualize, monitor, evaluate and learn lessons from
                                implementing the country’s agricultural transformation strategy.
                            </li>
                            <li>
                                “Disaggregated” research that looks below the macro level to examine sub national,
                                community household, and gender-level impacts, and fully explore the dynamics of
                                poverty, gender and agriculture.
                            </li>
                            <li>
                                Taking into account how regional agricultural and food security challenges affect
                                Zimbabwe’s policy decision processes and vice versa.
                            </li>

                        </ol>

                        <p>
                            CAFP conducts empirical research and outreach on core policy themes affecting medium to
                            long-term agricultural growth and food security in Zimbabwe. In addition, the Centre
                            provides “rapid-response” policy analysis on important topics that emerge suddenly and that
                            are judged to require immediate attention to help guide policy discussions and decisions.
                            CAFP’s efforts are founded on the premise that improved empirical information as well as
                            improved capacity to generate such information about the behavior of farmers, consumers, and
                            marketing agents can improve agricultural sector decision making as well as private sector
                            performance in the country.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Approach -->

    <!-- CAFP strategic research and policy development thematic areas  -->
    <section id="companyover-view" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div style="text-align: center;" class="col-md-12">
                    <div class="inner_heading heading_space">
                        <h2>CAFP Monitoring Evaluation, Learning and Impact Assessment Framework</h2>
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
        </div>
    </section>
    <!-- CAFP strategic research and policy development thematic areas  -->

    <!--  CAFP’s core competencies  -->
    <section id="creative" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div style="text-align: center" class="heading">
                    <h2>CAFP Vision, Mission and Strategic Objectives</h2>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 m-t-35">
                    <div class="creative_detail">
                        <div class="tag">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <h3>1. Networks and partnerships </h3>
                        <ol class="special-services-list">
                            <li>CAPF is creating networks and partnerships with both local, regional and international
                                bodies, research and academic institutions, farmer unions, commodity associations, civil
                                society, think tanks, public sector, development partners, and programmes/projects.
                            </li>
                            <li>CAFP works directly with Government by providing independent and evidence-based
                                solutions hence contributing to national development agenda.
                            </li>
                            <li>Indaba Agricultural Policy Research Institute is providing technical backstopping to
                                CAFP for a period of 3 years hence benefitting from a well-established regional partner.
                            </li>

                        </ol>

                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 m-t-35">
                    <div class="creative_detail">
                        <div class="tag">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                        </div>
                        <h3>2. Diverse Board and management skills </h3>
                        <p>The CAFP Board and management have broad local and international experience in policy making,
                            rural development, finance, surveys, and monitoring and impact evaluation skills. Technical
                            skills
                            CAFP staff are highly qualified with skills in policy development, analysis, formulation and
                            packaging. Skills in engaging both technical staff and policy makers such as senior
                            Government officials, Ministers and Members of Parliament.
                        </p>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 m-t-35">
                    <div class="creative_detail">
                        <div class="tag">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <h3>Beneficiaries </h3>
                        <p>TThe Beneficiaries of CAFP activities and programmes include but not limited to the
                            following: Government Ministries responsible for Lands, Agriculture, Fisheries, Water and
                            Rural Resettlement, Social welfare, Climate, Industry, Commerce, Finance, and Local
                            Government; quasi government bodies; private institutions; farmer organizations; civil
                            society groups; members of academia; and local, regional and international development
                            partners.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--  CAFP’s core competencies  -->

    <!-- What we make start -->
    <section id="what-make" class="padding_bottom padding_top">
        <div style="text-align: center;" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_heading heading_space">
                        <p>CAFP</p>
                        <h2>OUR VALUES</h2>
                    </div>
                </div>
            </div>
            <div style="padding-left: 40%" align="center" class="row">
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
        </div>
    </section>
    <!-- What we make end -->


@stop
