@extends('layouts.site')

@section('content')


    <!-- Inner Banner Start -->
    <section id="inner-banner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner-banner-detail">
                        <p><a href="javascript:void(0)">Home</a><span> - </span>About Us</p>
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner End -->


    <!-- History -->
    <section id="companyover-view" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_heading heading_space">
                        <p>About The Center for Agriculture and Food Policy </p>
                        <h2>History</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="over-view">
                        <p>The Centre for Agriculture and Food Policy (CAFP) is a registered Trust governed by a Board
                            of Trustees drawn from the public and private sector. CAFP evolved from a structured
                            Technical Assistance Policy facility of the Livelihood Food Security Programme (LFSP)
                            “Strengthening Evidence and Analysis to Influence Policy and Private Sector Investments”, a
                            collaboration and partnership between the Food and Agriculture Organisation of the United
                            Nations, Indaba Agricultural Policy Research Institute and the Ministry of Lands,
                            Agriculture, Fisheries Water, and Rural Resettlement (MLAWFRR) with funding from the
                            Foreign, Commonwealth & Development Office (FCDO).</p>
                        <p>
                            CAFP was set up as an exit strategy to
                            continue and scale up activities initiated by the LFSP programme during its six (6) years of
                            implementation in Zimbabwe. It was set up to work with agricultural stakeholders in policy
                            development processes and provide analytic assessments to programmes and projects to aid
                            policy making.
                        </p>
                    </div>

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="over-view-img">
                        <a title="View About us video" data-height="420" data-width="900"
                           class="html5lightbox content-vbtn-color-blue"
                           href="#">
                            {!! file_get_contents('logo/logo.svg') !!}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- History -->


    <!-- Offer start -->
    {{--<section id="inner-page-offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner_offer-detail">
                        <h3>The Great <span>Offers</span> Available Only For <span>Two Days.</span> Hurry Up!</h3>
                        <p>Vestibulum at magna tellus. Vivamus sagittis et nunc ut in orci aliquam, ac vulputate leo
                            vehicula. Mauris porttit magna tellus. Vivamus sagittis et nunc ut in orci aliquam hicula.
                            Donec eget ultricies ipsmcon. Vestibulum at ma gna tellus. Vivamus sagittis et nunc utin
                            orci.</p>
                        <a href="javascript:void(0)">See all offers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- Offer end -->

    <!-- Mandate -->
    <section id="companyover-view" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div {{--style="text-align: center"--}} class="inner_heading heading_space">
                        <h2>CAFP Mandate and strategic focus</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="over-view">
                        <p>CAFP coverage is national in scope with structures and systems to provide specialized support
                            at provincial, district programme level and individual institution level. CAFP’s principal
                            mandate is to coordinate, implement and conduct objective research and analysis to provide
                            evidence–based policy solutions needed to sustainably transform Zimbabwe’s agricultural and
                            food systems that will aid the country in dealing with food and nutrition insecurity and
                            poverty, and stimulate the country’s agricultural competitiveness, promote trade, create
                            jobs and invigorate rural and urban economies. </p>
                        <p>
                            The activities of CAFP are broadly anchored on three core operational pillars as follows:
                        </p>
                        <ol style="margin-top: -25px;">
                            <li>1) Research and policy development:</li>
                            <li>2) Partnerships, outreach and communications:</li>
                            <li>3) Capacity strengthening for policy implementation:</li>
                        </ol>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Mandate -->

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
                    <div {{--style="text-align: center"--}} class="inner_heading heading_space">
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
                        <h2>CAFP strategic research and policy development thematic areas </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-12"></div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div align="center" class="over-view">
                        <img src="{{asset('pics/Picture1.png')}}">

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
                    <h2>CAFP’s core competencies</h2>
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

@stop
