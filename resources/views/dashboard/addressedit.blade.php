@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('editaddress')}}"  method="post">
     @csrf
<ul class="form-style-1">

    <li><input type="hidden" name="all_id" value="{{$attach->id}}">
        <label>Introduction <span class="required">*</span></label>
        <textarea name="introduction" class="field-long" >{{$attach->adress}}</textarea>
    </li>
    <li>
        <label>Location <span class="required">*</span></label>
        <input type="text" name="adress" class="field-long"  value="{{$attach->adress}}"/>
    </li>
    <li>
        <label>Number <span class="required">*</span></label>
        <input type="text" name="phone" class="field-long" value="{{$attach->phone}}" />
    </li>
    <li>
        <label>Email<span class="required">*</span></label>
        <input type="email" name="emails" class="field-long" value="{{$attach->emails}}" />
    </li>


    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form><br><br><br><br><br>
<br>


@endsection
