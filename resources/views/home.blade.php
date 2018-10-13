@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h4 class="home-margin-bottom">Jobs You Have Applied for</h4>
            <div class="col-md-8">
                @foreach(Auth::user()->jobs as $job)
                    <a href="#" class="home-card-link">
                        <div class="card home-card">
                            <div class="card-header">{{ $job->name }}</div>

                            <div class="card-body">
                                {{ $job->desc }}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
