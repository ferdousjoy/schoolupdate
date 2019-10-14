@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('about')}}"  method="post">
     @csrf
<ul class="form-style-1">

    <li>
        <label>About <span class="required">*</span></label>

        <textarea name="about" class="field-long"></textarea>
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

        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($attach as $key)
    <tr>

      <td>{{$key->about}}</td>
      <td>
        <a class="btn"  href="{{route('Aboutdelete', $key->id)}}"> &#10060;</a>
        </td>

    </tr>
        @endforeach

    </tbody>
  </table>

@endsection
