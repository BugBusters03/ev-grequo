<?php include('partials/menu.php'); ?>

<?php 
    //CHeck whether id is set or not 
    if(isset($_GET['id']))
    {
        //Get all the details
        $id = $_GET['id'];

        //SQL Query to Get the Selected event
        $sql2 = "SELECT * FROM tbl_event WHERE id=$id";
        //execute the Query
        $res2 = mysqli_query($conn, $sql2);

        //Get the value based on query executed
        $row2 = mysqli_fetch_assoc($res2);

        //Get the Individual Values of Selected event
        $question = $row2['question'];
        $answer = $row2['answer'];
    }
    else
    {
        //Redirect to Manage event
        header('location:'.SITEURL.'admin/manage-faq.php');
    }
?>


<div class="main-content">
    <div class="wrapper">
        <h1>Update faq</h1>
        <br><br>

        <form action="" method="POST" enctype="multipart/form-data">
        
        <table class="tbl-30">

            <tr>
                <td>Question </td>
                <td>
                    <input type="text" name="question" value="<?php echo $question; ?>">
                </td>
            </tr>

            <tr>
                <td>Answer</td>
                <td>
                    <textarea name="answer" cols="30" rows="5"><?php echo $answer; ?></textarea>
                </td>
            </tr>

                               
            <tr>
                <td>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <input type="submit" name="submit" value="Update FAQ" class="btn-secondary">
                </td>
            </tr>
        
        </table>
        
        </form>

        <?php 
        
            if(isset($_POST['submit']))
            {
                //echo "Button Clicked";

                //1. Get all the details from the form
                $id = $_POST['id'];
                $question = $_POST['question'];
                $answer = $_POST['answer'];


                               

                //4. Update the event in Database
                $sql3 = "UPDATE tbl_event SET 
                    question = '$question',
                    answer = '$answer'
                    WHERE id=$id
                ";

                //Execute the SQL Query
                $res3 = mysqli_query($conn, $sql3);

                //CHeck whether the query is executed or not 
                if($res3==true)
                {
                    //Query Exectued and event Updated
                    $_SESSION['update'] = "<div class='success'>Question Updated Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-faq.php');
                }
                else
                {
                    //Failed to Update event
                    $_SESSION['update'] = "<div class='error'>Failed to Update question.</div>";
                    header('location:'.SITEURL.'admin/manage-faq.php');
                }

                
            }
        
        ?>

    </div>
</div>

<?php include('partials/footer.php'); ?>