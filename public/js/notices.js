
function show_form(form_id){

  $("form").hide();

  $('#'+form_id).show("slow");
  $('#add-postit').hide("slow");


}

$('div.postit').click(function(){
   $(this).parent().toggleClass('selezionato');
});


function notice_done(id){

  $.get("/done/"+id, function(data) {

    if(data=="OK"){

      $("#"+id).addClass("done");
    }

  });
}
function delete_notice(id){

  $.post("/notice/delete/", { id:id }, function(data) {

    if(data=="OK"){
      var target = $("#"+id);

      target.hide('slow', function(){ target.remove(); });

    }

  });
}


function edit_notice(id,title){

  $("#edit_notice_id").val(id);

  $("#edit_notice_title").val(title);

  show_form('edit_notice');
}

$('#add_notice').submit(function(event) {

  /* stop form from submitting normally */
  event.preventDefault();

  var title = $('#notice_title').val();
  if(title){
    //ajax post the form
    $.post("/add", {title: title}).done(function(data) {

      $('#add_notice').hide("slow");
      $("#notice_list").append(data);
    });

  }
  else{
    alert("Please give a title to notice");
    }
});

$('#edit_notice').submit(function() {

  /* stop form from submitting normally */
  event.preventDefault();

  var notice_id = $('#edit_notice_id').val();
  var title = $('#edit_notice_title').val();
  var current_title = $("#span_"+notice_id).text();
  var new_title = current_title.replace(current_title, title);
  if(title){
    //ajax post the form
    $.post("/update/"+notice_id, {title: title}).done(function(data){
      $('#edit_notice').hide("slow");
      $("#span_"+notice_id).text(new_title);
    });
  }
  else{
    alert("Please give a title to notice");
  }
});
