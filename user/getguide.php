<?php
include("dbconn.php");
$area=$_POST["a"];
//echo $area;
            $sql="select * from registration a,login b,guide c where a.email=b.email and b.status=1 and b.usertype='g' and c.email=b.email and c.area like '%$area%'";
            //echo $sql;
            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0){
                while($r=mysqli_fetch_assoc($res)){
                    $guidename=$r["name"];
                    $email=$r["email"];
            ?>
            <!-- <h2></h2> -->
            <?php 
            $sql1="select max(review) from review where sp_email='$email'";
            
            $res1=mysqli_query($conn,$sql1);
            $r1=mysqli_fetch_assoc($res1);


            ?>
            
                            <div class="col-md-3 grid_box1">

                               <div class="card border-primary" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $r["profile_pic"]?>" alt="Card image cap" width="300" height="280">
  <div class="card-body">
    <h3 class="text-center"><?php echo $guidename ?></h3>
    <p class="card-text text-center" color="red">Verified By Admin</p>
    <h4 class="text-center"><?php echo $r["price"]?> Rs<br>
        <?php 
        $review= $r1['max(review)'];
        for ($i=0; $i <$review ; $i++) { 

        ?>
    <i class="fa fa-star text-danger"></i>


        <?php
           
        }


    ?>

    </h4>
    <h3 class="text-center"><a href="viewguides.php?guide_email=<?php echo $r['email']?>" class="btn btn-primary">View Details</a></h3>
  </div>
</div>
</div>
            <?php

                }
            }
            else{


            ?>
            	<h3>Search result not found</h3>
            	<?php
            }
            ?>