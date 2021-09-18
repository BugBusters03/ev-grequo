
<?php include('partials/menu.php'); ?>

        <!-- Main Content Section Starts -->
        <div class="main-content">
            <div class="wrapper">
                <div class="main-heading">
                    <h1 style="font-size:50px; color:tomato; text-align: center;">Grequo</h1>
                    <h2 style="font-size:30px; color:black; text-align:center;">-Platform for EV Enthusiasts
</h2>
                </div>
                <br>
                <br>
                <h2 style="font-size:70px; color:tomato; text-align:center;">-WELCOME ADMIN,</h2>
                <br>
                <br>
                <h1>Dashboard</h1>
                <br><br>
                <?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
                <br><br>

                <div class="col-4 text-center">

                    <?php 
                        //Sql Query 
                        $sql2 = "SELECT * FROM tbl_event";
                        //Execute Query
                        $res2 = mysqli_query($conn, $sql2);
                        //Count Rows
                        $count2 = mysqli_num_rows($res2);
                    ?>

                    <h1><?php echo $count2; ?></h1>
                    <br />
                    Questions
                </div>

               
                <div class="clearfix"></div>

            </div>
        </div>
        <!-- Main Content Setion Ends -->

<?php include('partials/footer.php') ?>