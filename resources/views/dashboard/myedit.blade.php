@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('myselfupdate')}}"  method="post" enctype="multipart/form-data">
     @csrf
<ul class="form-style-1 form-style-2">

    <li>
        <label> Title<span class="required">*</span></label>
        <input type="text" name="title" class="field-long" value="{{$attach->title}}" />
        <input type="hidden" name="all_id" class="field-long" value="{{$attach->id}}" />
    </li>
    <li>
        <label>Subhead<span class="required">*</span></label>
        <input type="text" name="subhead" class="field-long" value="{{$attach->subhead}}" />
    </li>

    <li>
        <label>Link <span class="required">*</span></label>
        <input type="text" name="linkt" class="field-long" value="{{$attach->link}}" />
    </li>
    <li>
        <label>Detail <span class="required">*</span></label>
        <textarea id="summernote" name="detail"> {{$attach->detail}}</textarea>
    </li>
    
    
     <script>
      $('#summernote').summernote({
        placeholder: 'Write Here',
        tabsize: 2,
        height: 220
      });
    </script>
    <li>
       <label>Upload picture (image size less than 1.50MB)<span class="required">*</span></label>
       <input type="file" name="pic" class="field-long" />

    </li>

    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form> 
 


@endsection
