<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add FAQ</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
        
            <table class="tbl-30">

                <tr>
                    <td>Question </td>
                    <td>
                        <input type="text" name="question" placeholder="Type Question">
                    </td>
                </tr>

                <tr>
                    <td>Answer </td>
                    <td>
                        <textarea name="answer" cols="100" rows="30" placeholder="Type Answers"></textarea>
                    </td>
                </tr>

                            
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add FAQ" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

        
        <?php 

            //CHeck whether the button is clicked or not
            if(isset($_POST['submit']))
            {
                //Add the Food in Database
                //echo "Clicked";
                
                //1. Get the DAta from Form
                $question = $_POST['question'];
                $answer = $_POST['answer'];

                //Check whether radion button for featured and active are checked or not
              

                
                //3. Insert Into Database

                //Create a SQL Query to Save or Add event
                // For Numerical we do not need to pass value inside quotes '' But for string value it is compulsory to add quotes ''
                $sql2 = "INSERT INTO tbl_event SET 
                    question = '$question',
                    answer = '$answer'
                    ";

                //Execute the Query
                $res2 = mysqli_query($conn, $sql2);

                //CHeck whether data inserted or not
                //4. Redirect with MEssage to Manage event page
                if($res2 == true)
                {
                    //Data inserted Successfullly
                    $_SESSION['add'] = "<div class='success'>FAQ Posted Successfully.</div>";
                    header('location:'.SITEURL.'admin/manage-faq.php');
                }
                else
                {
                    //FAiled to Insert Data
                    $_SESSION['add'] = "<div class='error'>Failed to Add FAQ.</div>";
                    header('location:'.SITEURL.'admin/manage-faq.php');
                }

                
            }

        ?>


    </div>
</div>

<?php include('partials/footer.php'); ?>