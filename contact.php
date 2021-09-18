<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grequo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style2.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
 <div class="container-fluid">
	 <a class="navbar-brand" href="index.html" ><img src="img/logo4.png" alt="logo"></a>
	 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		 <span class="navbar-toggler-icon"></span>
	 </button>
	 <div class="collapse navbar-collapse" id="navbarResponsive">
		 <ul class="navbar-nav ml-auto">
			 <li class="nav-item active">
				 <a class="nav-link" href="welcome1.php">Home</a>
			 </li>
			 <li class="nav-item">
				<a class="nav-link" href="#">Q&A Forum</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="faq.php">FAQ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="logout.php">logout</a>
			</li>
		 </ul>
	 </div>
 </div>

</nav>


<section class="contact">
		<div class="content">
			<h1 style="text-decoration:none;">&nbsp;&nbsp;&nbsp;CONTACT US.</h2>
				<br>
				<br>
			<h2 style="font-family: sans-serif;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Get touch with us and feel free to give Feedback,We are ready to accept your Comments.<br>
				<br>
				------Thankyou,</b>
				</div>
	<div class="container">

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <h2 style="text-decoration: underline; ">Contact us</h2>
                    
                    <?php session_start(); ?>
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="alert alert-primary" role="alert">
                            Thank you for contacting us!
                        </div>
                    <?php endif; ?>

                    <form role="form" class="contact-form" action="data.php" method="post">


                        <?php if (isset($_SESSION['error'])): ?>
                            <div class="alert alert-warning"><?php echo $_SESSION['error']; ?></div>
                        <?php endif; ?>
                        <div class="row">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="email" class="form-control" name="contact-email" autocomplete="off" id="contact-email" placeholder="E-mail">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" autocomplete="off" id="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <textarea class="form-control textarea" rows="3" name="msg" id="msg" placeholder="msg"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn get-start">Send a message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
</div>

	</section>

			</p>
		</div>















<?php include('footer.php'); ?>