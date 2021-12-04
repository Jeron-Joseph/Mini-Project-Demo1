<?php
include("dbconn.php");
$email=$_SESSION["email"];
$sq="select name,profile_pic from registration where email='$email'";

$rs=mysqli_fetch_assoc(mysqli_query($conn,$sq))


?>
<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							
							
						</li>
						<li class="dropdown head-dpdn">
							<?php
										$sql="select count(*) from notification where reciever_id='$email' and notification_status=0";
										$r=mysqli_query($conn,$sql);
										$c=mysqli_fetch_assoc($r)

										?>
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php echo $c["count(*)"] ?></span></a>
							<ul class="dropdown-menu">
								
								<?php
								$s="select * from notification where reciever_id='$email' order by notification_date desc limit 3";
								$res=mysqli_query($conn,$s);
								if(mysqli_num_rows($res)>0){
									while($row=mysqli_fetch_assoc($res)){
										$sender_id=$row["sender_id"];
										$notification_id=$row["notification_id"];
										?>
										<?php if($row["notification_type"]=="Admin"){
								   		$name="Admin";
								   		$pic="../images/avathar.jpg";
								   	}
								   	else{
								   		$sql2="select name,profile_pic from registration where email='$sender_id'";
								   		$result=mysqli_query($conn,$sql2);
								   		$r2=mysqli_fetch_assoc($result);
								   		$name=$r2["name"];
								   		$pic=$r2["profile_pic"];
								   	} 
								   	?>
										<li><a href="notification.php?id=<?php echo $notification_id ?>">
									<div class="user_img"><img src="<?php echo $pic ?>" alt=""></div>
								   <div class="notification_desc">

								   	<h4><?php echo $name?></h3>
									<p><?php echo $row["content"]?></p>
									<p><span><?php echo $row["notification_date"]?></span>
									</p>
									</div>
								  <div class="clearfix"></div>	
								 </a></li>

								<?php
										
									}
								}

								?>
								
								 <div class="notification_bottom">
										<a href="allnotification.php">See all notifications</a>
									</div> 
								</li>
							</ul>
						</li>	
				
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<!--//end-search-box-->
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img style="width:30%,vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;" src="<?php echo $rs["profile_pic"]?>" alt=""> </span> 
                                    <div class="user-name">
                                        <?php echo $rs["name"] ?>
                                        <span></span>
                                    </div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> My Account</a> </li> 
								<li> <a href="profile.php"><i class="fa fa-suitcase"></i> Profile</a> </li> 
								<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>