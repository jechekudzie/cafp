@extends('layouts.site')

@section('content')

    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-data">
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

                        {{--<h2>Coming Soon</h2>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="over-view">

                        <ul>
                            <li style="margin-top: -50px">
                                <h2>General Macroeconomic Data</h2>
                                <br/>
                                <a target="_blank" href="{{url('http://nada.zimstat.co.zw/nada/index.php/catalog/central')
                                }}">
                                    ZimStat Datasets
                                </a>
                                <br/>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- History -->


@stop
