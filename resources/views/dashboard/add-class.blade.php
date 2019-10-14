 
@extends('layouts.dashboard')
@section('content')
   <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Classes</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Add New Class</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Add Class Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Add New Class Schedule</h3>
                            </div>
                           <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" 
                                data-toggle="dropdown" aria-expanded="false">...</a>
        
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" action="{{url('postclass')}}"  method="post" enctype="multipart/form-data">
                         @csrf
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Teacher Name *</label>
                                 <input type="text" class="form-control" name="tteacher" >  
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class name</label>
                                    <input type="text" placeholder="" class="form-control" name="class_name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class details</label>
                                    <textarea  class="form-control" name="detail">   </textarea>    
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Time Head *</label>
                                     <input type="text" placeholder="" class="form-control" name="time_head">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class Start Time</label>
                                     <input type="text" placeholder="" class="form-control" name="starttime">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class end Time</label>
                                     <input type="text" placeholder="" class="form-control" name="endtime">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class Size Head*</label>
                                     <input type="text" placeholder="" class="form-control" name="size_head">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Class size Number*</label>
                                  <input type="text" placeholder="" class="form-control" name="size">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>student Age Title*</label>
                                    <input type="text" placeholder="" class="form-control" name="ageHead">
                                </div>
                              
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Student age range *</label>
                                    <input type="text" placeholder="" class="form-control" name="agerange">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Fee head *</label>
                                    <input type="text" placeholder="" class="form-control" name="feeHead">
                                </div>
                                 <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Fee Amount *</label>
                                    <input type="text" placeholder="" class="form-control" name="feeAmount">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Upload Image</label>
                                    <input type="file" placeholder="" class="form-control" name="pic">
                                </div>
                                <div class="col-md-6 form-group"></div>
                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                                    <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Add Class Area End Here -->
       @endsection
     
               