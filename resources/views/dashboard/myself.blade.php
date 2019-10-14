@extends('layouts.dashboard')
@section('content')
<h1> Welcome To Menu Page</h1>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif
<form action="{{url('myself')}}" method="post" enctype="multipart/form-data">
    @csrf
    <ul class="form-style-1 form-style-2">

        <li>
            <label> Title<span class="required">*</span></label>
            <input type="text" name="title" class="field-long" />
        </li>
        <li>
            <label>Subhead<span class="required">*</span></label>
            <input type="text" name="subhead" class="field-long" />
        </li>

        <li>
            <label>Link <span class="required">*</span></label>
            <input type="text" name="linkt" class="field-long" />
        </li>
        <li>
            <label>Detail <span class="required">*</span></label>
            <textarea id="summernote" name="detail"></textarea>
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
</form><br><br><br><br><br>
<br>
<h1> Data List</h1>

<table class="table table-striped" style="padding:15px;">
    <thead>
        <tr>


            <th>Title</th>
            <th>Subhead</th>
            <th>detail</th>
            <th>link</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($my as $key)
        <tr>
            <td> {{$key->title}}</td>
            <td> {{$key->subhead}}</td>
            <td> {{$key->detail}}</td>
            <td> {{$key->link}}</td>
            <td> <img src="{{$key->pic}}" width="100" alt=""> </td>

            <td>

                <a href="{{route('mm', $key->id)}}"> &#9998;</a>

                <a onclick="return myFunction();" href="{{route('md', $key->id)}}"> &#10060;</a>
                <script>
                    function myFunction() {
                        if (!confirm("Are You Sure to delete this"))
                            event.preventDefault();
                    }

                </script>

            </td>
            <td> </td>
        </tr>
        @endforeach



    </tbody>
</table>


@endsection
