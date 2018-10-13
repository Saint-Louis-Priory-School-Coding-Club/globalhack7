@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Auth::user()->jobs->first())
                    <h4 class="home-margin-bottom">Jobs You Have Applied For:</h4>
                    @foreach(Auth::user()->jobs as $job)
                        <a href="/chat/{{$job->id}}" class="home-card-link">
                            <div class="card home-card">
                                <div class="card-header">{{ $job->name }}</div>

                                <div class="card-body">
                                    {{ $job->desc }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif
                    @foreach(Auth::user()->experiences as $experience)
                        <h4>Jobs for {{$experience->name}}</h4>
                        @foreach($experience->jobs as $job)
                            <a href="/jobs/{{$job->id}}" class="home-card-link">
                                <div class="card home-card">
                                    <div class="card-header">{{$job->name}}</div>

                                    <div class="card-body">
                                        {{$job->desc}}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
            </div>
        </div>
    </div>
@endsection
