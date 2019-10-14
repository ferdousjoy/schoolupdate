@extends('layouts.dashboard')
@section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="card google-map-area">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Marker Map</h3>
                    </div>
                   <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-expanded="false">...</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>
                <div class="default-map">
                    <div id="markergoogleMap" style="width:100%; height:660px; border-radius: 4px;">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14604.264300749077!2d90.4076850230584!3d23.78066130318934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79ebfc24eab%3A0xea7dab563f12457a!2sGulshan%201%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1570439914893!5m2!1sen!2sbd" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
