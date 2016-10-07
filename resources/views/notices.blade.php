@extends('layouts.app')

@section('content')

<section id="form_section">
    <!-- add section -->
    <div class="row" >
        <form class="notice col-ms-8 col-md-8" id="add_notice"  action="/notice/create" style="display:none" method="POST">
            <div class="form-group">
                <label for="message_title">Titolo</label>
                <input class="form-control" id="message_title" type="text" name="title" placeholder="Titolo del messaggio" value="" >
            </div>
            <div class="form-group">
                <label for="message_description">Messaggio</label>
                <textarea class="form-control" id="message_description" name="description" placeholder="Inserisci il messaggio" rows="5" ></textarea>
            </div>
            <input type="submit" class="btn btn-default" value="Aggiungi PostIt"></input>
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
            <button type="button" id="add-postit" class="btn btn-primary" onClick="show_form('add_notice');">
                Aggiungi PostIt
            </button>
        </p>

        <ul id="data_section" class="notice-list" >
            @foreach($notices as $notice)
                <li>
                    <div class="contenitore yellow" >
                        <a class="chiudi" href="#"></a>
                        <i class="pin"></i>
                            <div id="{{$notice->id}}" class="postit">
                                <p>
                                    <small>{{$notice->created_at}}</small>
                                    <a href="#" onClick="delete_notice('{{$notice->id}}');"class="icon-delete">Delete</a>
                                    <a href="#" onClick="edit_message('{{$notice->id}}','{{$notice->title}}');"class="icon-edit">Edit</a>
                                </p>
                                <section>
                                        <h3><span id="span_{{$notice->id}}" class="notice-title">{{$notice->title}}</span></h3>
                                        <p>
                                            <span class="notice-description">{{$notice->description}}</span>
                                        </p>
                                </section>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</section>

@endsection

@section('footer')
<script src="js/jquery-3.1.1.min.js"type="text/javascript"></script>
<script src="js/notices.js"type="text/javascript"></script>
@endsection
