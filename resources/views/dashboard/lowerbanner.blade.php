@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Banner Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('banner/chac')}}"  method="post" enctype="multipart/form-data">
     @csrf
<ul class="form-style-1">

    <li>
        <label> Heading <span class="required">*</span></label>
        <input type="text" name="title" class="field-long" />
    </li>
    <li>
        <label>Text<span class="required">*</span></label>
        <input type="text" name="text" class="field-long" />
    </li>

    <li>
       <label>Upload picture (image size less than 1.50MB)<span class="required">*</span></label>
       <input type="file" name="pic" class="field-long" />

    </li>

    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form><br><br><br><br><br>
<br>
<h1>  Menu List</h1>

 <table class="table table-striped">
    <thead>
      <tr>

        <th>Sl</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>





    </tbody>
  </table>

@endsection
