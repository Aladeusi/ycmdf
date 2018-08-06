@extends('layouts.landing-page1')

@section('content')
      







         <!-- START CTA -->
        <section class="section" id="hire" style="background-color: black; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <br><br>
                            <h1 class="text-white" style="text-transform: uppercase;">404</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END CTA -->


        <!-- START SERVICES -->


        
        <section class="section bg-light" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center mx-auto lan_sec-title">
                            <div class="bus_lan_titbor">
                                <i class="mdi mdi-vector-combine"></i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row mt-4 pt-4">
                    <div class="col-lg-12">
                        <div class="lan_box_ser mt-3 text-center">
                           
                             @if(Session::has('notification'))
                             <br>
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif

                            <div class="service-content mt-4" style="text-align: justify;">

                                <center>
                                    <H2>The page you are looking for cannot be found.</H2>
                                </center>
                                

                                
                            </div>

                        </div>
                    </div>


                    
                    
                </div>








            </div>
        </section>
        <!-- END SERVICES -->




@endsection

