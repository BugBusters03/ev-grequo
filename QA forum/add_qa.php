<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=quora1', 'root', '');

$error = '';
$post_question= '';
$post_answer = '';

if(empty($_POST["post_question"]))
{
 $error .= '<p class="text-danger">Question is required</p>';
}
else
{
 $post_question = $_POST["post_question"];
}

if(empty($_POST["post_answer"]))
{
 $error .= '<p class="text-danger">Answer is required</p>';
}
else
{
 $post_answer = $_POST["post_answer"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_post_id, post, post_sender_name) 
 VALUES (:parent_post_id, :post, :post_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_post_id' => $_POST["post_id"],
   ':post'    => $post_answer,
   ':post_sender_name' => $post_question
  )
 );
 $error = '<label class="text-success">Post Added Successfully</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>