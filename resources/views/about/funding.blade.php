@extends('layouts.site')

@section('content')

    <!-- Inner Banner Start -->
    <section style="margin-top: 100px" id="inner-banner-funding">
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




    <!--  CAFP’s core competencies  -->
    <section id="creative" class="padding_bottom padding_top">
        <div class="container">
            <div class="row">
                <div style="text-align: center" class="heading">
                    <h2>Funding</h2>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 m-t-35">
                    <div class="creative_detail">
                        <div class="tag">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        {{-- <h3>1. Networks and partnerships </h3>--}}
                        <p>In general, CAFP seeks five broad types of funding as follows: </p>
                        <ol class="special-services-list">
                            <li>Long-term strategic funding;
                            </li>
                            <li>Long-term specific research topic funding;
                            </li>
                            <li>
                                Short-term work plan related assignments;
                            </li>
                            <li>
                                Short-term other agricultural/rural development assignments; and
                            </li>
                            <li>
                                Staff member co-opted into a team/mission/consortium.
                            </li>

                        </ol>

                        <p>
                            CAFP has adopted a programme-led funding model to guarantee financial sustainability. This
                            model ensures that CAFP is more proactive in its resource mobilisation strategy. This is
                            done through research, technical assistance support as the lead agricultural Think Tank in
                            Zimbabwe and provision of advisory services to both public and private sector. CAFP provides
                            technical support to programmes and projects in terms of research evidence generation as
                            well as curate the lessons learnt and evidence generated to influence agricultural policy
                            and private sector investment and strategic thinking. CAFP’s relationship with partners is
                            characterized by a shared vision, knowledge sharing, mutual respect and accountability.
                        </p>

                        <p>
                            Through its Business Development and Innovation department, the Centre innovatively caters
                            for the increasing demand for general and investigative studies related to agriculture and
                            rural livelihoods development from different stakeholders including; Government departments,
                            international agencies, donor-funded projects, Non-Governmental Organizations, private
                            sector organizations and individuals. These services will continue to be tailored to the
                            needs of each particular client for specific time periods, based on agreed terms of
                            reference. The Center also competes in both national and international consultancy markets
                            by responding to requests for proposals either on its own, or through collaborative
                            partnerships and/or consortia.
                        </p>

                    </div>
                    <br/>
                    <br/>
                    <a class="btn btn-success" href="{{asset('/assets/About The Center for Agriculture and Food Policy.pdf')}}"
                       target="_blank">Download Profile</a>
                </div>


            </div>
        </div>
    </section>
    <!--  CAFP’s core competencies  -->

@stop
