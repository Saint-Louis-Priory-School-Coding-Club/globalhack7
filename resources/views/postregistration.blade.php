@extends('layouts.app')
@section('content')

    <div class="card card_margin">
        <div class="card-body">
            <h4 class="card-title">Tell us about yourself!</h4>

            <p class="card-text">
                <form id="UserInfo" action="/home" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="sel1">Sex: *</label>
                        <select name="sex" class="form-control" id="sel1">
                            <option value="select">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="experience">Your Previous Area Of Employment</label>
                        <select id="" name="experience" class="form-control">
                            @foreach($experiences as $experience)
                                <option value="{{$experience->id}}">{{$experience->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div >
                        <label for="example-date-input" >Birthday: *</label>
                        <br>
                        <div class="form-group">
                            <input class="form-control" name="bday" type="date" id="bday" required>
                        </div>
                    </div>

                    <div class="form-group">

                        <label for="exampleInputCountry1">Country of Birth: *</label>
                        <input type="text" class="form-control" name="country" id="exampleInputCountry1 CoB" placeholder="Country of Birth">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputLanguage1">Primary Language: *</label>
                        <input type="text" class="form-control" name="lang1" id="exampleInputLanguage1 PriLang" placeholder="Primary Language">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputLanguage2">Secondary Language:</label>
                        <input type="text" class="form-control" name="lang2" id="exampleInputLanguage2 SecLang" placeholder="Secondary Language">
                    </div>

                    <br>
                    <input class="btn btn-primary" type="submit" value="Submit">

                    <br><br>
                    <small>* Means Required Question</small>
                </form>
            </p>
        </div>
    </div>
@endsection
