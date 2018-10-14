
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

$('#ru').click(function () {
    $('#lang-code').val('ru');
    $('#lang-form').submit();
});

$('#en').click(function () {
    window.location.href = "http://gh7.local/jobs/1";
});

if ($('#chat').length) {
    var io = require('socket.io-client');
    const socket = io('http://localhost:3000');

    $('#chat-form').submit(function() {
        if ($('#m').val()) {
            socket.emit('chat message', $('#m').val());
            $('#messages').append($('<br>'));
            $('#messages').append($('<div style="float:right; clear: both; margin-bottom: 5px;" class="text_message_to bg-primary">').text($('#m').val()));
            $('#messages').append($('<br>'));
            $('#m').val('');
        }
        return false;
    });

    socket.on('chat message', function(msg) {
        $('#messages').append($('<div class="text_message_from">').text(msg));
        $('#messages').append($('<br>'));
    });
}
