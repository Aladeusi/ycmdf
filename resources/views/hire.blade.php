@extends('layouts.landing-page1')

@section('content')
      







         <!-- START CTA -->
        <section class="section" id="hire" style="background-color: black; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <br><br>
                            <h1 class="text-white" style="text-transform: uppercase;">Fill the form below to submit your task</h1>
                            
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

                                <form action="{{route('request.create.submit')}}" method="POST" role="form">

                                    {{ csrf_field() }}


                                    

                                    <div class="form-body">

                                  



                                        


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <label>Your Email</label>
                                                    <input type="text" class="form-control"  value="{{old('email')}}" name="email" id="email">

                                                       @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                                </div>

                                            </div>
                                        </div>





                                      

                                        
                                        




                                        


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group{{ $errors->has('hrequest') ? ' has-error' : '' }}">
                                                    <label>Your Request</label>

                                                    <textarea class="form-control" name="hrequest" id="hrequest">
                                                        {{old('hrequest')}}
                                                    </textarea>
                                                    @if ($errors->has('hrequest'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hrequest') }}</strong>
                                    </span>
                                @endif
                                                    
                                                </div>

                                            </div>
                                        </div>



                                     
                                       


                                        



                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <h3>
                                                        Payment method
                                                    </h3>

                                                    <select id="payment_method" class="form-control" name="payment_method" >

                                                <?php $count=1;?>
                                                @foreach($Payments as $Payment)

                                    <option value="{{$Payment->value}}" <?php if($count==1){echo 'selected="selected"';}?>>{{$Payment->name}}
                                    </option>

                                                        <?php $count++; ?>

                                                @endforeach

                                                </select>



                                                    
                                                </div>

                                                

                                            </div>
                                        </div>




                                        

                                        <hr>
                                        
                                         <button type="submit" class="btn btn-primary btn-md">Submit</button> 
                                    </div>
                                </form>

                                
                            </div>

                        </div>
                    </div>


                    
                    
                </div>








            </div>
        </section>
        <!-- END SERVICES -->




@endsection

