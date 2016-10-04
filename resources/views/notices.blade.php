@extends('layouts.app')

@section('content')

<section id="form_section">
    <!-- add section -->
    <form id="add_notice" class="notice col-md-8" style="display:none" >
        <div class="form-group">
            <label for="exampleInputEmail1">Titolo</label>
            <input id="message_title" type="text" name="title"placeholder="Titolo del messaggio" value="" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Messaggio</label>
            <input id="message_description" type="text" name="description"placeholder="Inserisci il messaggio" value="" class="form-control">
        </div>
        <button type="button" class="btn btn-default">Aggiungi messaggio</button>
    </form>
    <!-- edit section -->
    <form id="edit_notice" class="notice" style="display:none">
        <input id="edit_message_id" type="hidden" value="" />
        <input id="edit_message_title" type="text"name="title" value="" />
        <button name="submit">Edit Task</button>
    </form>

</section>

<!-- show section -->
<section id="data_section" class="notice">
    <ul class="todo-controls">
        <li><img src="imgs/add.png" width="14px" onClick="show_form('add_notice');" /></li>
    </ul>
    <ul id="message_list" class="notice-list">
        @foreach($notices as $notice)
        @if(!$notice->status)
    <div class="contenitore">
        <div class="postit done">
            <li id="{{$notice->id}}" >
                <a href="#" class="toggle"></a>
                <span id="span_{{$notice->id}}" class="notice-title">{{$notice->title}}</span><br>
                <span class="notice-description">{{$notice->description}}</span>
                <a href="#"onClick="delete_message('{{$notice->id}}');"class="icon-delete">Delete</a>
                <a href="#"onClick="edit_message('{{$notice->id}}','{{$notice->title}}');"class="icon-edit">Edit</a>
            </li>
        </div>
    </div>
        @else
    <div class="contenitore">
        <div class="postit">
            <li id="{{$notice->id}}">
                <a href="#"onClick="message_done('{{$notice->id}}');"class="toggle"></a>
                <span id="span_{{$notice->id}}" class="notice-title">{{$notice->title}}</span><br>
                <span class="notice-description">{{$notice->description}}</span>
                <a href="#" onClick="delete_message('{{$notice->id}}');" class="icon-delete">Delete</a>
                <a href="#" onClick="edit_message('{{$notice->id}}','{{$notice->title}}');"class="icon-edit">Edit</a>
            </li>
        </div>
    </div>
        @endif

        @endforeach
    </ul>

</section>

@endsection

@section('footer')
<script src="http://code.jquery.com/jquery-latest.min.js"type="text/javascript"></script>
<script src="js/notices.js"type="text/javascript"></script>
@endsection
