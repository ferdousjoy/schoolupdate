@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('postsubmenu')}}"  method="post">
     @csrf
<ul class="form-style-1">

    <li>
        <label>Name <span class="required">*</span></label>
        <input type="text" name="name" class="field-long" />
    </li>
    <li>
        <label>Link <span class="required">*</span></label>
        <input type="text" name="link" class="field-long" />
    </li>
    <li>
        <label>Menu Name <span class="required">*</span></label>
       <select name="menu_id" class="field-long" >
        @foreach($attach as $key)
           <option {{$key->id}}> {{$key->name}}</option>
        @endforeach
        </select>
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
