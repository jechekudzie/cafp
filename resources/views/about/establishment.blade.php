@extends('layouts.site')

@section('content')

    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="inner-banner-detail">
                        {{--<p><a href="javascript:void(0)">Home</a><span> - </span>About Us</p>
                        <h2>Establie</h2>--}}
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
                        <h2>History</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="over-view">
                        <p style="margin-top: -50px">The Centre for Agriculture and Food Policy (CAFP) is a registered
                            Trust governed by a Board
                            of Trustees drawn from the public and private sector. CAFP evolved from a structured
                            Technical Assistance Policy facility of the Livelihood Food Security Programme (LFSP)
                            “Strengthening Evidence and Analysis to Influence Policy and Private Sector Investments”, a
                            collaboration and partnership between the Food and Agriculture Organisation of the United
                            Nations, Indaba Agricultural Policy Research Institute and the Ministry of Lands,
                            Agriculture, Fisheries Water, and Rural Development (MLAWFRD) with funding from the
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
            </div>
        </div>
    </section>
    <!-- History -->


    <!-- Mandate -->
    <section style="margin-top: -100px;" id="companyover-view" class="padding_bottom padding_top">
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
                        <p style="margin-top: -50px">CAFP coverage is national in scope with structures and systems to
                            provide specialized
                            support
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
                    <br/>
                    <br/>
                    <a class="btn btn-success" href="{{asset('/assets/About The Center for Agriculture and Food Policy.pdf')}}"
                        target="_blank">Download Profile</a>
                </div>
            </div>
        </div>

    </section>
    <!-- Mandate -->

@stop
