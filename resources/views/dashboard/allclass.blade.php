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
             <li>All Classes</li>
         </ul>
     </div>
     <!-- Breadcubs Area End Here -->
     <!-- Class Table Area Start Here -->
     <div class="card height-auto">
         <div class="card-body">
             <div class="heading-layout1">
                 <div class="item-title">
                     <h3>All Class Schedules</h3>
                 </div>
                 <div class="dropdown">
                     <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                     <div class="dropdown-menu dropdown-menu-right">
                         <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                         <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                         <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                     </div>
                 </div>
             </div>


             <table class="table">
                 <thead class="thead-light">
                     <tr>
                         <th>Teacher</th>
                         
                         <th>Class name</th>
                         <th>Detail</th>
                         <th>Time Head</th>
                         <th>time start</th>
                         
                         <th>time End</th>
                         <th>Size title</th>
                         <th>Size</th>
                         <th>Age Title</th>
                         
                         <th>age</th>
                         <th>Fee</th>
                         <th>Amount</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                     @foreach($attachq as $key)
                 <tr>
                     <td>{{$key->tteacher}}</td>
                     <td>{{$key->class_name}}</td>
                     
                     <td>  @php
                     $str = $key->detail;
                     $str = substr($str, 0, 25);
                     echo $str ."...";  
                     @endphp</td> 
                     <td>{{$key->time_head}}</td>
                     <td>{{$key->starttime}}</td>
                     <td>{{$key->endtime}}</td>
                     
                     <td>{{$key->size_head}}</td>
                     <td>{{$key->size}}</td>
                     <td>{{$key->ageHead}}</td> 
                     
                     <td>{{$key->agerange}}</td>
                     <td>{{$key->feeHead}}</td>
                     <td>{{$key->feeAmount}}</td>
                     <td><a class="btn"  href="{{route('csh', $key->id)}}"> &#10060;</a></td>
     
                </tr>
                     @endforeach
                

                 </tbody>
             </table>

         </div>
     </div>
     <!-- Class Table Area End Here -->

 </div>






 @endsection
