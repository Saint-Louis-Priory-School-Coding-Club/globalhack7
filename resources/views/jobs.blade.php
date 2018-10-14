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
                            <iframe width="100%" height="450" frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?q={{str_replace(' ', '+', $job->location)}}&key=AIzaSyDZvv1cwFNNWACfgJhZLCFu72OdAoSTF2k"></iframe>
                        </div>
                    </div>
                </div>

            @endsection
