
    <?php include('menu.php'); ?>

    <!-- faq sEARCH Section Starts Here -->
    <section class="faq-search text-center">
        <div class="container">
            <?php 

                //Get the Search Keyword
                $search = $_POST['search'];
            
            ?>


            <h2>Questions on Your Search <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>

        </div>
    </section>
    <!-- FAQ sEARCH Section Ends Here -->



    <!-- faq MEnu Section Starts Here -->
    <section class="faq-menu">
        <div class="container">
            <h2 class="text-center">faq Menu</h2>

            <?php 

                //SQL Query to Get faqs based on search keyword
                $sql = "SELECT * FROM tbl_event WHERE question LIKE '%$search%' OR answer LIKE '%$search%'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //Check whether faq available of not
                if($count>0)
                {
                    //faq Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the details
                        $id = $row['id'];
                        $question = $row['question'];
                        $answer= $row['answer'];
                        ?>

                        <div class="faq-menu-box">

                            <div class="faq-menu-desc">
                                <h4><?php echo $question; ?></h4>
                                <p class="faq-detail">
                                    <?php echo $answer; ?>
                                </p>
                                <br>
                            </div>
                        </div>

                        <?php
                    }
                }
                else
                {
                    //faq Not Available
                    echo "<div class='error'>Question not found.</div>";
                }
            
            ?>

            

            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- faq Menu Section Ends Here -->

    <?php include('footer.php'); ?>