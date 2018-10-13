@extends('layouts.app')

@section('content')
    <div class="card card_margin" >
        <div class="card-body">
            <h5 class="page_title card-title">Talk with an Employee</h5>
            <hr>
            <div class="card_bubble">
                <div class="text_message_from">From</div>
                <br>

             <div class="bg-primary text_message_to">To</div>

                {{--<p class="text_message_from">Hello Alex</p>--}}
                {{--<p class="text_message_to">Hello Alex</p>--}}


                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Type a Message Here" >
                        <button class="btn btn-primary">➞</button>
                        </div>
                    </div>
            </div>
        </div>

@endsection
