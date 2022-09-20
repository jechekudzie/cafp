@extends('layouts.site')

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
                    <div class="alert alert-success alert-rounded"><i
                            class="fa fa-check-circle"></i> {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
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

                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea type="text" name="message" placeholder="Enter your Message"
                                      class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <input name="button" class="contact-form-button" value="Submit" type="submit">
                        </div>

                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="creative_detail">
                            <div class="tag">
                                <i class="fa fa-" aria-hidden="true"></i>
                            </div>
                            {{-- <h3>1. Networks and partnerships </h3>--}}
                            <p>You can get in touch using the following details: </p>
                            <ol class="special-services-list">
                                <li><span style="margin-right: 20px;">Physical Address:</span> 59 Kwame Nkrumah Avenue
                                    Harare, Zimbabwe
                                </li>
                                <li><span style="margin-right: 20px;">Landline: </span> +263 242 754843</li>
                                <li>
                                    <span style="margin-right: 20px;">Mobile:</span> +263 782040979
                                </li>
                                <li>
                                    <span style="margin-right: 20px;">Mobile:</span> +260 978838122
                                </li>
                                <li>
                                    <span style="margin-right: 20px;">Email:</span> info@cafp.org.zw
                                </li>


                            </ol>

                            <a class="btn btn-success"
                               href="{{asset('/assets/About The Center for Agriculture and Food Policy.pdf')}}"
                               target="_blank">Download Profile</a>


                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- Login End -->

    <!-- Map -->
    <div class="index1-map padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <ul class="socialicons">
                        <li><a target="_blank" href="https://www.facebook.com/CAFP2021"><i class="fa fa-facebook"
                                                                                           aria-hidden="true"></i></a>
                        </li>
                        <li><a target="_blank" href="https://twitter.com/CenterforAgric1?s=09"><i class="fa fa-twitter"
                                                                                                  aria-hidden="true"></i></a>
                        </li>
                        <li><a target="_blank"
                               href="https://www.linkedin.com/company/center-for-agriculture-and-food-policy"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.instagram.com/cafp_2021zim/"><i class="fa fa-instagram"
                                                                                                 aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- /#Map -->



@stop
