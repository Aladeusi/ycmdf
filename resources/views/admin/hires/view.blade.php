 
@extends('layouts.admin')

@section('content')

 <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Finesshack</a></li>
                                    <li class="breadcrumb-item"><a href="#">Request</a></li>
                                </ol>

                            </div>
                        </div>









                <div class="row">

                            <div class="col-12">

                                <div class="portlet"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            View request
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                            <span class="divider"></span>
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="portlet2" class="panel-collapse collapse show" style="">
                                        <div class="portlet-body">



                                            
                                <form action="http://glob.dev/invest" method="POST" role="form">

                                    <legend>Profile</legend>

                                    <div class="form-body">

                                    <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Firstname</label>
                                                    <input class="form-control"   value="{{$Hire->firstname}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>



                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Lastname</label>
                                                    <input class="form-control"  value="{{$Hire->lastname}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input class="form-control"  value="{{$Hire->email}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Nationality</label>
                                                    <input class="form-control"  value="{{$Hire->country}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>



                                         <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input class="form-control"  value="{{$Hire->phone}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>



                                        
                                         <hr>
                                        <legend>
                                            Task Details
                                        </legend>



                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Service</label>
                                                    <input class="form-control"  value="{{$Hire->service->name}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Duration</label>
                                                    <input class="form-control"  value="{{$Hire->completed_at}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Victim's Info</label>

                                                    <textarea class="form-control" disabled="disabled">
                                                        {{$Hire->victim_info}}
                                                    </textarea>
                                                    
                                                </div>

                                            </div>
                                        </div>



                                         <hr>
                                        <legend>
                                            Payment Details
                                        </legend>
                                       


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Price range</label>
                                                    <input class="form-control"  value="{{$Hire->price_range}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Payment Method</label>
                                                    <input class="form-control"  value="{{$Hire->payment_method}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <label>Is payment ready?</label>
                                                    <input class="form-control"  value="{{$Hire->is_payment_ready}}" disabled="disabled">
                                                </div>

                                            </div>
                                        </div>


                                        

                                        <hr>
                                        <legend>Status</legend>
                                        @if($Hire->has_viewed==1)

                                                            <label class="label label-success">completed</label>

                                                            @elseif($Hire->has_completed==1)
                                                            
                                                            <label class="label label-primary">read</label>
                                                        
                                                            @else
                                                            <label class="label label-info">New</label>

                                        @endif

                                        <hr>
                                        <legend>Actions</legend>

                                        <a href="{{route('admin.request.list')}}" class="btn btn-sm btn-primary">Back</a>
                                         <a href="{{route('admin.request.view', ['id'=>$Hire->id])}}" class="btn btn-sm btn-primary">view</a>

                                         @if($Hire->has_completed < 0)
                                         <a href="{{route('admin.request.completed', ['id'=>$Hire->id])}}" class="btn btn-sm btn-primary">Done</a>
                                         @endif
                                                             
                                         <a class="btn btn-sm btn-danger" href="{{route('admin.request.delete', ['id'=>$Hire->id])}}">Delete</a>
                                    </div>
                                </form>



                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        

                    </div> <!-- container -->

                </div> <!-- content -->


                @endsection