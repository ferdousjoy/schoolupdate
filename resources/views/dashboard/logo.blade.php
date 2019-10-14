@extends('layouts.dashboard')
@section('content')

<h1>Upload Your School Logo</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('uploadlogo')}}"  method="post" enctype="multipart/form-data">
     @csrf
    
     <ul>
       <li> <div class="upload-btn-wrapper">
         <button class="btnn">Upload a Logo</button>
         <input type="file" name="uploadlogo"/>

       </div>
     </li><br>
     <li>
       <label>Name <span class="required">*</span></label>
       <input type="text" name="title" class="field-long" />
     </li><br>
     <li></li>
     <li>
       <label>Logo or Name <span class="required">*</span></label>
       <select name="status" class="field-long">
         <option  class="field-long" value="1">Logo</option>
         <option class="field-long" value="2">Name</option>
       </select>
     </li><br>
     <li>   <input type="submit" value="Save" / class="btn btn-info"></li>
     </ul>






</form><br><br><br><br><br>
<br>
<h1>  Logo List</h1>

 <table class="table table-striped">
    <thead>
      <tr>

        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
   @foreach($attach as $key)
   <tr>
   <td><img width="100" src="{{asset($key->uploadlogo)}}"></td>
   <td>    <a class="btn"  href="{{route('logodelete', $key->id)}}"> &#10060;</a></td>
 </tr>
   @endforeach
    </tbody>
  </table>

@endsection
