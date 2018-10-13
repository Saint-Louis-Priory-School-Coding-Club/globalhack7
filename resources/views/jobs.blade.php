@extends('layouts.app')

@section('content')
    <div >
        <div class="dropdown">
            <button class="job-select btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Select Job
            </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Cook for McDonald's @ Manchester</a>
            <a class="dropdown-item" href="#">Sales Attendent for Quik Trip @ Chesterfield</a>
        </div>
        </div>
        <div class="card_margin card" class="McdonaldsManchesterCook">
            <div class="jobDescription card-body">
                <h2 class="card-title">Cook needed for the McDonald's on Manchester Rd.</h2></li>
            <p class="card-description">The cook will be paid 9.00$ an hour. Email the employer for more information and to get an interview.</p></li>
        <hr>
        
        <div class="emailEmployer" style="margin:auto">
            <h2>Contact Company</h2>
            <form action="">
                <div class="form-group">
                    <label for="body">Your message</label>
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
            <p>1831 Manchester Rd. 63017, Manchester MO, USA</p>
            <div class="googleMaps">

            </div>
        </div>
    </div>
@endsection