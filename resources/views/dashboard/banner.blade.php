@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('banner/entry')}}"  method="post" enctype="multipart/form-data">
     @csrf
<ul class="form-style-1">

    <li>
        <label> Greeting <span class="required">*</span></label>
        <input type="text" name="word1" class="field-long" />
    </li>
    <li>
        <label>Introduction<span class="required">*</span></label>
        <input type="text" name="word2" class="field-long" />
    </li>

    <li>
        <label>Details <span class="required">*</span></label>
        <input type="text" name="sentence" class="field-long" />
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
<h1> Data List</h1>

 <table class="table table-striped" style="padding:15px;">
    <thead>
      <tr>


        <th>Word1</th>
        <th>Word2</th>
        <th>detail</th>
        <th>Image</th>

        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($attach as $key)
      <tr>
      <td>{{$key->word1}}</td>
      <td>{{$key->word2}}</td>
      <td>{{$key->sentence}}</td>
      <td>

<img src="{{$key->pic}}" width="100" alt="">
      </td>
      <td>

        <a href="{{route('ban1', $key->id)}}"> &#9998;</a>
         <a href="{{route('ban', $key->id)}}"> &#10060;</a>

      </td>

     </tr>
      @endforeach


    </tbody>
  </table>

@endsection
