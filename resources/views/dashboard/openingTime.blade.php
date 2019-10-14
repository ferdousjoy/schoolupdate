@extends('layouts.dashboard')
@section('content')
<style media="screen">
@keyframes check {0% {height: 0;width: 0;}
 25% {height: 0;width: 10px;}
 50% {height: 20px;width: 10px;}
}
.checkbox{background-color:#fff;display:inline-block;height:28px;margin:0 .25em;width:28px;border-radius:4px;border:1px solid #ccc;float:right}
.checkbox span{display:block;height:28px;position:relative;width:28px;padding:0}
.checkbox span:after{-moz-transform:scaleX(-1) rotate(135deg);-ms-transform:scaleX(-1) rotate(135deg);-webkit-transform:scaleX(-1) rotate(135deg);transform:scaleX(-1) rotate(135deg);-moz-transform-origin:left top;-ms-transform-origin:left top;-webkit-transform-origin:left top;transform-origin:left top;border-right:4px solid #fff;border-top:4px solid #fff;content:'';display:block;height:20px;left:3px;position:absolute;top:15px;width:10px}
.checkbox span:hover:after{border-color:#999}
.checkbox input{display:none}
.checkbox input:checked + span:after{-webkit-animation:check .8s;-moz-animation:check .8s;-o-animation:check .8s;animation:check .8s;border-color:#555}
.checkbox input:checked + .default:after{border-color:#444}
.checkbox input:checked + .primary:after{border-color:#2196F3}
.checkbox input:checked + .success:after{border-color:#8bc34a}
.checkbox input:checked + .info:after{border-color:#3de0f5}
.checkbox input:checked + .warning:after{border-color:#FFC107}
.checkbox input:checked + .danger:after{border-color:#f44336}
</style>
<h1>  Welcome To Menu Page</h1>
 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
 <form action="{{url('openinsert')}}"  method="post" class="needs-validation" novalidate>
     @csrf
<ul class="form-style-1">

  <li>
      <label>Start Day<span class="required">*</span></label>
      <select class="field-long" name="startday">
        <option value="saturday"> Saturday</option>
        <option value="sunday"> Sunday</option>
        <option value="monday"> Monday</option>
        <option value="tuesday"> Tuesday</option>
        <option value="wedenesday">Wednesday</option>
        <option value="thursday"> Thursday</option>
        <option value="friday"> Friday</option>
      </select>

  </li>
  <li>
    <label>Start Time<span class="required">*</span></label>
      <input type="time" name="starttime" value="">
  </li>
  <li>
      <label>End Day<span class="required">*</span></label>
      <select class="field-long" name="endday">
        <option value="saturday"> Saturday</option>
        <option value="sunday"> Sunday</option>
        <option value="monday"> Monday</option>
        <option value="tuesday"> Tuesday</option>
        <option value="wedenesday">Wednesday</option>
        <option value="thursday"> Thursday</option>
        <option value="friday"> Friday</option>
      </select>

  </li>

  <li>
    <label>End Day<span class="required">*</span></label>
      <input type="time" name="endtime" value="">
  </li>
  <li>
      <div class="card" style="margin:40px 0px">
               <div class="card-header">Close Day</div>

               <ul class="list-group list-group-flush">


                   <li class="list-group-item">
                      Saturday
                                 <label class="checkbox">
                                       <input type="checkbox" autocomplete="off" value="Saturday" name="dayname[]" />
                                       <span class="success"></span>
                                   </label>
                   </li>
                   <li class="list-group-item">
                      Sunday
                                 <label class="checkbox">
                                       <input type="checkbox"autocomplete="off"  value="Sunday" name="dayname[]" />
                                       <span class="success"></span>
                                   </label>
                   </li>
                   <li class="list-group-item">
                      Monday
                                 <label class="checkbox">
                                       <input type="checkbox" autocomplete="off" value="Monday" name="dayname[]" />
                                       <span class="success"></span>
                                   </label>
                   </li>
                   <li class="list-group-item">
                      Tuesday
                                 <label class="checkbox">
                                       <input type="checkbox" autocomplete="off" value="Tuesday" name="dayname[]" />
                                       <span class="success"></span>
                                   </label>
                   </li>
                   <li class="list-group-item">
                      Wednesday
                                 <label class="checkbox">
                                       <input type="checkbox" autocomplete="off" value="Wednesday" name="dayname[]" />
                                       <span class="success"></span>
                                   </label>
                   </li>
                   <li class="list-group-item">
                      Thursday
                                 <label class="checkbox">
                                       <input type="checkbox" autocomplete="off" value="Thursday" name="dayname[]" />
                                       <span class="success"></span>
                                   </label>
                   </li>
                   <li class="list-group-item">
                      Friday
                                 <label class="checkbox">
                                       <input type="checkbox" autocomplete="off" value="Friday" name="dayname[]"/>
                                       <span class="success"></span>
                                   </label>
                   </li>
                   <li>
                       <input type="submit" value="Submit" />
                   </li>


               </ul>
           </div>
           </div>
           </div>
  </li>
</ul>
</form>


@endsection
