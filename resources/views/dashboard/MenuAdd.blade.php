@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('menu')}}"  method="post">
     @csrf
<ul class="form-style-1">
    
    <li>
        <label>Menu Name <span class="required">*</span></label>
        <input type="text" name="name" class="field-long" />
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
        @foreach($attach as $key)
      <tr>
        <td>{{$sl++}}</td>
        <td>{{$key->name}}</td>
        <td>
          <a class="btn"  href="{{route('menudelete', $key->id)}}"> &#10060;</a>
          </td>
         
      </tr>
          @endforeach
     
    </tbody>
  </table>

@endsection