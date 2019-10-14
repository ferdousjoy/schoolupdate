@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('icon')}}"  method="post">
     @csrf
<ul class="form-style-1">
  <li>
      <label>Choose icon From Here (Free Icon) <span class="required">*</span></label>
   <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank"> Click here</a>

  </li>

    <li>
        <label>Icon <span class="required">*</span></label>
        <input type="text" name="icon" class="field-long" />

    </li>
    <li>
        <label> Social Link<span class="required">*</span></label>
        <input type="text" name="link" class="field-long" />

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
