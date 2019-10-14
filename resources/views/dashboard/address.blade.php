@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('postaddress')}}"  method="post">
     @csrf
<ul class="form-style-1">

    <li>
        <label>Introduction <span class="required">*</span></label>
        <textarea name="introduction" class="field-long"></textarea>
    </li>
    <li>
        <label>Location <span class="required">*</span></label>
        <input type="text" name="adress" class="field-long" />
    </li>
    <li>
        <label>Number <span class="required">*</span></label>
        <input type="text" name="phone" class="field-long" />
    </li>
    <li>
        <label>Email<span class="required">*</span></label>
        <input type="email" name="emails" class="field-long" />
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

        <th>introduction</th>
        <th>adress</th>
        <th>phone</th>
        <th>emails</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
@foreach($attach as $key)
<tr>
  <td>{{$key->introduction}}</td>
  <td>{{$key->adress}}</td>
  <td>{{$key->phone}}</td>
  <td>{{$key->emails}}</td>
 <td>


    <a href="{{route('servicedetail', $key->id)}}"> &#9998;</a>
     <a href="{{route('addressdelete', $key->id)}}"> &#10060;</a>


  </td>
</tr>
@endforeach

    </tbody>
  </table>

@endsection
