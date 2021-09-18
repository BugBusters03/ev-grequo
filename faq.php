<?php include('menu.php'); ?>

    <!-- faq sEARCH Section Starts Here -->
    <section class="faq-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL; ?>faq-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for faq.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- faqs sEARCH Section Ends Here -->



    <!-- faqs MEnu Section Starts Here -->
    <section class="faq-menu">
        <div class="container">
            <h2 class="text-center">faq Menu</h2>

            <?php 
                //Display faqs that are Active
                $sql = "SELECT * FROM tbl_event";

                //Execute the Query
                $res=mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether the faqs are availalable or not
                if($count>0)
                {
                    //Foods Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $question = $row['question'];
                        $answer = $row['answer'];
                        ?>
                        
                        <div class="faq-menu-box">

                            <div class="faq-menu-desc">
                                <h4><?php echo $question; ?></h4>
                                <p class="faq-detail">
                                    <?php echo $question; ?>
                                </p>
                                <br>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //faq not Available
                    echo "<div class='error'>faq not found.</div>";
                }
            ?>

            

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- faq Menu Section Ends Here -->

    <?php include('footer.php'); ?>