@foreach($notices as $notice)
  <li id="{{$notice->id}}">
      <a href="#" onClick="message_done('{{$notice->id}}');" class="toggle"></a>
      <span id="span_{{$notice>id}}">{{$notice->title}}</span>
      <a href="#"onClick="delete_message('{{$notice->id}}');" class="icondelete">Delete</a>
      <a href="#" onClick="edit_message('{{$notice>id}}','{{$notice->title}}');" class="icon-edit">Edit</a>
  </li>
@endforeach
