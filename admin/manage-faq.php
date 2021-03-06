<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage FAQ</h1>

        <br /><br />

                <!-- Button to Add Admin -->
                <a href="<?php echo SITEURL; ?>admin/add-faq.php" class="btn-primary">Add Question</a>

                <br /><br /><br />

                <?php 
                    if(isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }

                    if(isset($_SESSION['upload']))
                    {
                        echo $_SESSION['upload'];
                        unset($_SESSION['upload']);
                    }

                    if(isset($_SESSION['unauthorize']))
                    {
                        echo $_SESSION['unauthorize'];
                        unset($_SESSION['unauthorize']);
                    }

                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                
                ?>

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Questions</th>
                        <th>Answers</th>
                        <th>Actions</th>
                    </tr>

                    <?php 
                        //Create a SQL Query to Get all the event
                        $sql = "SELECT * FROM tbl_event";

                        //Execute the qUery
                        $res = mysqli_query($conn, $sql);

                        //Count Rows to check whether we have events or not
                        $count = mysqli_num_rows($res);

                        //Create Serial Number VAriable and Set Default VAlue as 1
                        $sn=1;

                        if($count>0)
                        {
                            //We have event in Database
                            //Get the events from Database and Display
                            while($row=mysqli_fetch_assoc($res))
                            {
                                //get the values from individual columns
                                $id = $row['id'];
                                $question = $row['question'];
                                $answer = $row['answer'];
                                ?>

                                <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $question; ?></td>
                                    <td><?php echo $answer; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update-faq.php?id=<?php echo $id; ?>" class="btn-secondary">Edit FAQ</a>
                                        <a href="<?php echo SITEURL; ?>admin/delete-faq.php?id=<?php echo $id; ?>" class="btn-danger">Delete FAQ</a>
                                    </td>
                                </tr>

                                <?php
                            }
                        }
                        else
                        {
                            //event not Added in Database
                            echo "<tr> <td colspan='7' class='error'> Questions not Added Yet. </td> </tr>";
                        }

                    ?>

                    
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>