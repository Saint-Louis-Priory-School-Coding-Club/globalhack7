@extends('layouts.app')

@section('content')
    <div id="chat" class="card card_margin" >
        <div class="card-body">
            <h5 class="page_title card-title">Talk with an Employee</h5>
            <hr>
            <div class="card_bubble">
                <div id="messages">
                </div>

                {{--<p class="text_message_from">Hello Alex</p>--}}
                {{--<p class="text_message_to">Hello Alex</p>--}}


                <form action="" class="chat-form form-inline">
                    <div class="input-group">
                        <input id="m" type="text" class="chat-form form-control" placeholder="Type a Message Here" >
                        <button type="submit" id="chat-btn" class="btn btn-primary">➞</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
