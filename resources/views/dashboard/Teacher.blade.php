@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Teacher Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('AHCT')}}"  method="post">
     @csrf
<ul class="form-style-1">
    <li>
        <label>Headline <span class="required">*</span></label> 
           <input type="text" name="maintitle" class="field-long" />  
    </li>

    <li>
        <label>Text <span class="required">*</span></label> 
        <textarea name="txt" class="field-long"></textarea>
    </li>


    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form><br><br><br><br><br>
<br>
<h1> Data List</h1>

 <table class="table table-striped">
    <thead>
      <tr>

        <th>Headline</th>
        <th>Text</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
       

    </tbody>
  </table>

@endsection
