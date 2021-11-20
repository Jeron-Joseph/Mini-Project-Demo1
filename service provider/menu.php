<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">MAIN NAVIGATION</li>
              <li class="treeview">
                <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
              </li>
              <?php
              include("dbconn.php");
              
              $email=$_SESSION['email'];
              $s="select status from login where email='$email'";
              $r=mysqli_query($conn,$s);
              //echo($s);
              $data=mysqli_fetch_assoc($r);
              $status=$data["status"];
              if($status=="0"){

                ?>
              <li class="treeview">
                <a href="verification.php">
                <i class="fa fa-check"></i> <span>Get Approval From Admin</span>
                </a>
              </li>
              <?php
              }
              else{

              

              ?>
<li class="treeview">
                <a href="profile.php">
                <i class="fa fa-edit"></i> <span>My Profile</span>
                </a>
              </li>
        <li class="treeview">
                <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Components</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="grids.html"><i class="fa fa-angle-right"></i> Grids</a></li>
                  <li><a href="media.html"><i class="fa fa-angle-right"></i> Media Css</a></li>
                </ul>
              </li>
              <?php
            }
              ?>
              <li class="treeview">
                <a href="../logout.php">
                <i class="fa fa-power-off"></i> <span>logout</span>
                </a>
              </li>
            </ul>
          </div>