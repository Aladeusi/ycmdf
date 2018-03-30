@extends('layouts.landing-page')

@section('content')
        <!--START HOME-->
        <section class="home-bg-img section h-100vh" id="home">
            <div class="bg-overlay"></div>
            <div class="home-table">
                <div class="home-table-center">
                    <div class="container position-relative z-index">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="text-white text-center">
                                    <h1 class="bus_home_title mx-auto">FINESSEHACKERS</h1>  

                                    <h2>A reliable platform where you can hire profesional hacker</h2>  
                                    <div class="bus_home_btn">
                                        <a href="" class="btn btn-outline-custom btn-rounded mt-4 mr-3 ">More</a> 
                                        <a href="{{route('request.create')}}" class="btn btn-custom btn-rounded mt-4 mr-3">Hire</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <!--END HOME-->



<!-- START SERVICES -->


        
        <section class="section bg-light" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto lan_sec-title">
                            <h2 class="font-weight-bold">About Us</h2>
                            <div class="bus_lan_titbor">
                                <i class="mdi mdi-vector-combine"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-4 pt-4">
                    <div class="col-lg-8">
                        <div class="lan_box_ser mt-3 text-center">
                           


                            <div class="service-content mt-4" style="text-align: justify;">
                                <h2>{{$About->title}}</h2>
                                <hr>
                                <div class="text-muted">
                                    
                                     {!!html_entity_decode($About->value)!!}
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4"> 
                        <div class="lan_box_ser mt-3 text-center">
                            <div class="ser_icon">
                                <i class="mbri-hot-cup"></i>
                            </div>

                            <div class="service-content mt-4" style="text-align: justify;">
                                <p>LOCATION</p>
                                <p class="mt-3 text-muted">202, Grasselli Street , Conway.</p>
                                <br>

                                <p>EMAIL ADRESSES</p>
                                <p class="mt-3 text-muted">Finessehackers1@gmail.com</p>

                                <p class="mt-3 text-muted">Extremeinfiltrators@gmail.com</p>
                                <br>

                                <p>OPENING HOURS</p>
                                <p class="mt-3 text-muted">
                                Monday - Sunday @ 12AM -12 PM
                            </p>
                            </div>
                        </div>
                    </div>
                    
                </div>








            </div>
        </section>
        <!-- END SERVICES -->






<!-- Start Testimonial -->
        <section class="section" id="services" style="background-color: black;">
            <div class="container" style="color: white;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto lan_sec-title">
                            <h2 class="font-weight-bold text-white">Hacking Services</h2>
                            <div class="bus_lan_titbor">
                                <i class="mdi mdi-vector-combine text-white"></i>
                            </div>
                            
                        </div>
                    </div>
                </div>



                <div class="row mt-4 pt-4">

                    <?php
                        $count=1;
                    ?>

                    @foreach($Services as $Service)

                    <div class="col-lg-4">
                        <div class="lan_box_ser mt-3 text-center">
                            <div class="ser_icon">
                                <i class="">{{$count}}</i>
                            </div>
                            <div class="service-content mt-4">
                                <h5 class="font-weight-bold">{{$Service->name}}</h5>
                                <p class="mt-3 text-muted">{{$Service->desc}}</p>
                            </div>
                        </div>
                    </div>

                    <?php

                        $count++;

                    ?>

                    @endforeach



                </div>


            </div>
        </section>
        <!-- End Testimonial -->




        <!-- Start Testimonial -->
        <section class="section bg-dark" id="testimony">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto lan_sec-title">
                            <h2 class="font-weight-bold text-white">Our Clients</h2>
                            <div class="bus_lan_titbor">
                                <i class="mdi mdi-vector-combine text-white"></i>
                            </div>
                            <p class="text-muted bus_subtitle mx-auto mt-2">Testimonies from some of our clients round the world</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center mt-5 pt-4">

                    @foreach($Testimonies as $Testimony)
                    <div class="col-lg-4">
                        <div class="text-center testi_boxes mt-3 rounded">
                            <div class="bus_testi_icon text-custom">
                                <i class="mbri-quote-left"></i>
                            </div>
                            <div class="mt-3">
                                <p class="client_review font-italic text-center">"{{$Testimony->body}}"</p>
                                <p class="client_name text-center text-white mb-0 mt-4">- {{$Testimony->name}}, {{$Testimony->city}}</p>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    
                </div>


                <!--<div class="row mt-5 pt-4">
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/5.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-lg-2 mt-3">
                        <div class="logo_img">
                            <img src="images/clients/6.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div>-->
            </div>
        </section>
        <!-- End Testimonial -->

      

        <!-- Funfact Start -->
        <section class="section" style="background-color: black;">
            <div class="container">
                <div class="row" id="counter">
                    <div class="col-lg-4">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-timer h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="654">24</h1>
                            <p class="lan_fun_name mb-0 text-muted">Working Hours</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-gift h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="6400">3,000</h1>
                            <p class="lan_fun_name mb-0 text-muted">Completed Jobs</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="text-center lan_funfact p-4 mt-3 rounded text-white">
                            <div class="lan_fun_icon mb-3">
                                <i class="mbri-user h1"></i>
                            </div>
                            <h1 class="lan_fun_value mb-1" data-count="2389">2,500</h1>
                            <p class="lan_fun_name mb-0 text-muted">No. of Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Funfact End -->



         <!-- START CTA -->
        <section class="section bg-dark" id="hire">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="text-white">HAVE AN HACKING TASK? SUBMIT BELLOW</h1>

                            <p class="text-muted">Click the button below to quickly hire a hacker to complete your task!</p>
                          
                            <div class="mt-4 pt-3">
                                <a href="{{route('request.create')}}" class="btn btn-custom btn-rounded">Hire Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CTA -->
@endsection
