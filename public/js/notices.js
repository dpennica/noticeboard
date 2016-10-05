
function show_form(form_id){

  $("form").hide();

  $('#'+form_id).show("slow");
  $('#add-postit').hide("slow");


}

$('div.postit').click(function(){
   $(this).parent().toggleClass('selezionato'); 
});
