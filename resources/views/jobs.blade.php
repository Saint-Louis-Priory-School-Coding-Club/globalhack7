@extends('layouts.app')

@section('content')
<div >
    <div class="dropdown" style="margin:auto;margin-bottom:25px">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select Job
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Cook for McDonald's @ Manchester</a>
            <a class="dropdown-item" href="#">Sales Attendent for Quik Trip @ Chesterfield</a>
        </div>
    </div>
    <div class="jobInfo card" class="McdonaldsManchesterCook" style="width: 30rem;margin:auto">
        <ul class="list-group list-group-flush">
            <div class="jobDescription card-body">
                <li class="list-group-item"><h2 class="card-title">Cook needed for the McDonald's on Manchester Rd.</h2></li>
                <li class="list-group-item"><p class="card-description">The cook will be paid 9.00$ an hour. Email the employer for more information and to get an interview.</p></li>
            </div>
            <li class="list-group-item">
                <div class="emailEmployer" style="margin:auto">
                    <button type="button" class="btn btn-primary">Email McDonalds @ Manchester Manager!</button>
                </div>
            </li>
            <li class="list-group-item">
                <div class="jobAddress">
                    <h3>Address</h3>
                    <p>1831 Manchester Rd. 63017, Manchester MO, USA</p>
                    <div class="googleMaps">

                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection