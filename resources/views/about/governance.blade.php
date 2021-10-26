@extends('layouts.site')

@section('content')

    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-governance">
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


    <!-- History -->
    <section id="companyover-view" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_heading heading_space">
                        <h2>Board Of Trustees</h2>
                    </div>
                </div>
            </div>
            <div style="margin-top: -200px" class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="over-view">
                        <p style="margin-top: -50px">CAFP is governed as a Trust with Board of Trustees and management
                            run in line with
                            international best practice. The Board of Trustees comprise of members from government,
                            private sector, civil society, regional and international research and academic
                            institutions. This configuration ensures that all interest groups are represented. </p>
                        <p>
                            The Board of Trustees oversee the operations of the CAFP, set the broad policy and strategic
                            direction of the Center as well as sets the guidelines, rules and procedures under which the
                            institution operates. The Trustee Deed helps guide the Board of Trustees oversight of CAFP.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- History -->

    <!-- Mandate -->
    <section style="margin-top: -200px" id="companyover-view" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner_heading heading_space">
                        <h2>Day to day management of CAFP</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="over-view">
                        <p style="margin-top: -50px">CAFP’s day to day activities and programmes are managed by a
                            highly qualified team headed by
                            the Chief Executive Officer. When fully operational, CAFP will have three departments,
                            namely Finance and Administration; Research, Outreach, Programmes and Capacity Building; and
                            Business Development and Innovation. </p>

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
