<?php 
    //Include COnstants Page
     include('../config/constants.php');
   
        $id = $_GET['id'];
       include('../config/constants.php');
        $sql = "DELETE FROM tbl_event WHERE id=$id";
        //Execute the Query
        $res = mysqli_query($conn, $sql);

        //CHeck whether the query executed or not and set the session message respectively
        //4. Redirect to Manage event with Session Message
        if($res==true)
        {
            //event Deleted
            $_SESSION['delete'] = "<div class='success'>FAQ Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-faq.php');
        }
        else
        {
            //Failed to Delete faq
            $_SESSION['delete'] = "<div class='error'>Failed to Delete FAQ.</div>";
            header('location:'.SITEURL.'admin/manage-faq.php');
        }


?>