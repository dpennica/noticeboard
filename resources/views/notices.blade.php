@extends('layouts.app')

@section('content')

<section id="form_section">
    <!-- add section -->
    <div class="row" >
        <form id="add_notice" class="notice col-ms-8 col-md-8" style="display:none" >
            <div class="form-group">
                <label for="message_title">Titolo</label>
                <input class="form-control" id="message_title" type="text" name="title" placeholder="Titolo del messaggio" value="" >
            </div>
            <div class="form-group">
                <label for="message_description">Messaggio</label>
                <textarea class="form-control" id="message_description" name="description" placeholder="Inserisci il messaggio" rows="5" ></textarea>
            </div>
            <button type="button" class="btn btn-default">Aggiungi PostIt</button>
        </form>
        <!-- edit section -->
        <form id="edit_notice" class="notice" style="display:none">
            <input id="edit_message_id" type="hidden" value="" />
            <input id="edit_message_title" type="text"name="title" value="" />
            <button name="submit">Edit Task</button>
        </form>
    </div>
</section>

<!-- show section -->
<section id="data_section" >

    <div class="row notice col-md-8 col-lg-12" >
        <p>
        <button type="button" id="add-postit" class="btn btn-primary" onClick="show_form('add_notice');">Aggiungi PostIt</button>
        </p>

        <ul class="postit" >
            @foreach($notices as $notice)
                @if(!$notice->status)
                <li >
                    <i class="pin"></i>
                    <div id="{{$notice->id}}" class="note yellow">
                        <small>{{$notice->created_at}}</small>
                        <h3><span id="span_{{$notice->id}}" class="notice-title">{{$notice->title}}</span></h3>
                        <p>
                            <span class="notice-description">{{$notice->description}}</span>
                        </p>
                        <a href="#"onClick="delete_message('{{$notice->id}}');"class="icon-delete">Delete</a>
                        <a href="#"onClick="edit_message('{{$notice->id}}','{{$notice->title}}');"class="icon-edit">Edit</a>
                    </div>
                </li>
                @endif
            @endforeach
        </ul>
    </div>
</section>

@endsection

@section('footer')
<script src="js/jquery-3.1.1.min.js"type="text/javascript"></script>
<script src="js/notices.js"type="text/javascript"></script>
@endsection
