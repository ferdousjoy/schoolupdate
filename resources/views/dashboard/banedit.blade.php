@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('banup')}}"  method="post" enctype="multipart/form-data">
     @csrf
<ul class="form-style-1">

    <li>
        <label> Greeting <span class="required">*</span></label>

        <input type="hidden" name="all_id" value="{{$attach->id}}">
          <input type="text" name="word1" class="field-long" value="{{$attach->word1}}" />
    </li>
    <li>
        <label>Introduction<span class="required">*</span></label>
        <input type="text" name="word2" class="field-long" value="{{$attach->word2}}" />
    </li>

    <li>
        <label>Details <span class="required">*</span></label>
        <input type="text" name="sentence" class="field-long"  value="{{$attach->sentence}}" />
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




@endsection
