<?php
    include("connection.php");
    session_start();
    
?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="Colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Charity</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">=
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="logo">
								<a href="#home"><img src="img/logo.png" alt=""></a>
							</div>
							<div class="main-menubar d-flex align-items-center">
								<nav class="hide">
								<a href="index.php">Home</a>
									<a href="aboutus.html">About</a>
                                    <a href="donate.php">Donate</a>
                                    <?php
										if(isset($_SESSION['user_id'])){
											echo " <a href='logout.php'>Logout</a>";	
										}else{
											echo "<a href='signin_registration.html'>Signup/Login</a>";
										}
									?>
								</nav>
                                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
							</div>
						</div>
					</div>
				</div>
			</header>
            <!-- End Header Area -->
            			<!-- Start donate Area -->
			<section class="donate-area relative section-gap" id="donate">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-end">
						<div class="col-lg-6 col-sm-12 pb-80 header-text">
                            <h1>Donate Now</h1>
                            <div><?php
                                    if(!isset($_SESSION['user_name'])){
                                        echo "<h3 style='color:red;'> You have to log in to make a Donation</h3>";
                                    }
                                ?>
                            </div>
							<p>
                                <!--Message Here-->
							</p>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 contact-left">
							<div class="single-info">
								<h4>Divided Evenly</h4>
								<p>
                                    <!--Message Here-->
								</p>
							</div>
							<div class="single-info">
								<h4>Transperancy All the Way</h4>
								<p>
                                    <!--Message Here-->
								</p>
							</div>
							<div class="single-info">
								<h4>Trustworthy</h4>
								<p>
                                    <!--Message Here-->
								</p>
							</div>
						</div>
						<div class="col-lg-6 contact-right">
							<form class="booking-form" action="donation_process.php" method="post" enctype="multipart/form-data">
								 	<div class="row">
								 		
							 			
                                        <div class="col-lg-6 d-flex flex-column">
                                            <select name="ngo" class="app-select form-control mt-20 " onchange="ngoItems(this)" required>
                                               <option data-display="NGO you want to donate to">NGO you want to donate to</option>
                                               <?php
											   $ngo_urgent = [];
											   $ngo_good = [];
											   $query = "select ngo_name , good_to_have, urgently_needed from ngo";
											   if($result = mysqli_query($con , $query)){
												   $i=0;
												if(mysqli_num_rows($result)>0){
													while($row = $result -> fetch_assoc()){
														echo "<option id=".$i." value=".$row['ngo_name'].">".$row['ngo_name']."</option>";
														$ngo_urgent[$i] = $row['urgently_needed'];
														$ngo_good[$i] = $row['good_to_have'];
														$i++;
													}
												}
											}
											   ?>
                                           </select>
                                        </div>
                                        <div class="col-lg-6 d-flex flex-column">
                                           <select size="2" name="type" class="app-select form-control mt-20" required>
                                              <option data-display="Type of Donation ">Type of Donation</option>
                                              <option value="Food">Food</option>
                                              <option value="Cloths">Cloths</option>
                                              <option value="Shoes">Shoes</option>
											  <option value="Fan">Fan</option>
											  <option value="TV">Chair</option>
											  <option value="Bed">Bed</option>
											  <option value="Cabinet">Cabinet</option>
											  <option value="Stool">Stool</option>
											  <option value="Cushion">Cushion</option>
											  <option value="Pillow">Pillow</option>
											  <option value="Desk">Desk</option>
											  <option value="Ladder">Ladder</option>
											  <option value="Mirror">Mirror</option>
											  <option value="Table">Table</option>
											  <option value="Bedsheets">Bedsheets</option>
											  <option value="Worktable">Worktable</option>

                                          </select>
                                       </div>
                                        <div class="col-lg-12 d-flex flex-column">
                                            <select name="condition" class="app-select form-control mt-20" required>
                                               <option data-display="Is the item ready to use">Condition</option>
                                               <option value="Yes">Yes</option>
                                               <option value="No">No</option>
                                           </select>
                                        </div>
										<div class="col-lg-12 d-flex flex-column">
											<input name="file" placeholder="Upload Pictures of Donation Items" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upload Multiple Donation using Ctrl Key'" class="form-control mt-20" required="" type="file" multiple/>

											<textarea class="form-control mt-20" name="message" placeholder="Any Specific Information about the item" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>

										<div class="col-lg-12 d-flex justify-content-end send-btn">
											<input type="submit" class="submit-btn primary-btn mt-20 text-uppercase " name="submit" value="submit">
                                            </div>

                                            <div class="alert-msg"></div>
                                        </div>
					  		</form>

						</div>
					</div>
				</div>
			</section>
			<!-- End donate Area -->
			<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Items </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
        <!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row d-flex flex-column justify-content-center">
						<ul class="footer-menu">
							<li><a href="#home">Home</a></li>
							<li><a href="#project">Projects</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#donate">Donate</a></li>
						</ul>
						<div class="footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
						
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>
		</body>
		<script>
			var ngo_urgent = <?php echo json_encode($ngo_urgent); ?>;
			var ngo_good = <?php echo json_encode($ngo_good); ?>;
			function ngoItems(s){
					var id = s[s.selectedIndex].id;
                    // Get the modal
                    var modal = document.getElementById("myModal");
                    var urgent = ngo_urgent[id].split(",");
					var good = ngo_good[id].split(",");
					$(".modal-body").html("<p style='color:red'><h3>Urgent Needed Items : </h3>"+urgent+"</p><br /> <h3>Good to Have Items : </h3>"+good);
					$("#myModal").modal("show"); 
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];
            }
		</script>
	</html>
