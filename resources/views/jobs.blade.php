@extends('layouts.app')

@section('content')
    <div>
        <form action="/lang/{{$job->id}}" method="post" id="lang-form" style="display: none">
            @csrf
            <input type="text" name="code" id="lang-code">
        </form>

        <div class="dropdown">
            <div class="card_margin card" class="McdonaldsManchesterCook">
                <div class="jobDescription card-body">
                    <h2 class="card-title">{{$job->name}}</h2>
                    <p class="card-description">{{$job->desc}}</p>
                    <hr>

                    <div class="emailEmployer" style="margin:auto">
                        <h2>Contact {{$job->employer->name}}</h2>
                        <form action="/jobs" method="post">
                            @csrf
                            <input type="hidden" name="employerid" value="{{$job->employer->id}}">
                            <input type="hidden" name="jobid" value="{{$job->id}}">
                            <div class="form-group">
                                <textarea class="form-control contact-form" name="body" cols="30" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="jobAddress">
                        <h3>Address</h3>
                        <p>{{$job->location}}</p>
                        <div class="googleMaps">
                            <div id="googleMap" class="google-map"></div>
                        </div>
                    </div>
                </div>

                <script>
                    function myMap() {
                        var mapProp= {
                            center:new google.maps.LatLng(40,-73),
                            zoom:5,
                        };
                        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASYmZ4iBjropstijIuXGZXuDVA7AbSEhI&callback=myMap"></script>
            @endsection
