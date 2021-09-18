<?php
//index.php

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Question Answer Forum</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
      body{
          background-color: #f1f1f1;
      }
      </style>
 </head>
 <body>
  <br />
  <h2 align= "center"><strong>Question Answer Forum</strong></a></h2>
  <br />
  <div class="container">
   <form method="POST" id="post_form">
    <div class="form-group">
     <input type="text" name="post_question" id="post_question" class="form-control" placeholder="Enter Question" />
    </div>
    <div class="form-group">
     <textarea name="post_answer" id="post_answer" class="form-control" placeholder="Enter Answer" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="post_id" id="post_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="post_message"></span>
   <br />
   <div id="display_post"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#post_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_qa.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#post_form')[0].reset();
     $('#post_message').html(data.error);
     $('#post_id').val('0');
     load_post();
    }
   }
  })
 });

 load_post();

 function load_post()
 {
  $.ajax({
   url:"fetch_qa.php",
   method:"POST",
   success:function(data)
   {
    $('#display_post').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var post_id = $(this).attr("id");
  $('#post_id').val(post_id);
  $('#post_question').focus();
 });
 $(document).onClick
 
});

</script>
