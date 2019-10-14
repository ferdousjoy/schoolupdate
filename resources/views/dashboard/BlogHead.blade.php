@extends('layouts.dashboard')
@section('content')
<h1>  Welcome To class Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('AHCc')}}"  method="post">
     @csrf
<ul class="form-style-1">
    <li>
        <label>Headline<span class="required">*</span></label> 
           <input type="text" name="maintitle" class="field-long" />  
    </li>

    <li>
        <label>text <span class="required">*</span></label> 
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
              @foreach($attachq as $key)
      <tr>
      <td>{{$key->maintitle}}</td>
      <td>{{$key->txt}}</td> 
      <td>

         <a onclick="return myFunction();" href="{{route('AHCDd', $key->id)}}"> &#10060;</a>

      </td>

     </tr>
      @endforeach
    

    </tbody>
  </table>

@endsection
