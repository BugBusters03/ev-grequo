<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Feedback</h1>

        <br /><br />
        <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Time</th>
                    </tr>

                    <?php 
                        //Create a SQL Query to Get all the event
                        $sql = "SELECT * FROM contact_us";

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
                                $name = $row['name'];
                                $email = $row['email'];
                                $subject=$row['subject'];
                                $msg=$row['msg'];
                                $date_of=$row['date_of'];
                            }
                        }

                    ?>
                    <tr>
                                    <td><?php echo $sn++; ?>. </td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $subject; ?></td>
                                    <td><?php echo $msg; ?></td>
                                    <td><?php echo $date_of; ?></td>
                </table>
    </div>
    
</div>

<?php include('partials/footer.php'); ?>