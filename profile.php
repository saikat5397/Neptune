<?php 
require_once('header.php');
?>
<div class="row">
    <!-- name change star  -->
<div class="col-xl-6">
    <div class="card widget widget-stats">
    
     <div class="card-header">
       <h3>Name change</h3>
     </div>
     <div class="card-body">
        <form action="profile_post.php" method="post">
            <input class="form-control form-control-lg m-b-sm" type="text" placeholder="" name="name" value="<?= $_SESSION['s_name']?>">
            <button class="btn btn-info" type="submit" name="name_cng_btn"> name change</button>
        </form>
     </div>
              
    
    </div>
    </div>
    <!-- name change end -->
    <!-- photo change star  -->
    <div class="col-xl-6">
        <div class="card widget widget-stats">
            
            <div class="card-header">
                <h3>profile photo change</h3>
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="post" enctype="multipart/form-data">
                    <img src="upload\profile_photo/<?= $profile_photo?>" alt="emte" width="100px">
                    <input class="form-control form-control-lg m-b-sm" type="file" name="profile_pic">
                    <button class="btn btn-info" type="submit" name="profile_pic_cng"> photo_change</button>
                </form>
            </div>
        </div>
        
        
        
    </div>
    <!-- photo change end -->
    <!-- Password Change start -->
    
    <div class="col-xl-6">
        <div class="card widget widget-stats">
            
            <div class="card-header">
                <h3>Password Change</h3>
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="post">
                    <input class="form-control form-control-lg m-b-sm" type="Password" placeholder="Old Password" name="old_password" value="">
                    <input class="form-control form-control-lg m-b-sm" type="Password" placeholder="New Password" name="new_password" value="">
                    <input class="form-control form-control-lg m-b-sm" type="Password" placeholder="Confirm Password" name="confirm_password" value="">
                    
                    <button class="btn btn-info" type="submit" name="pass_cng"> Password Change</button>
                </form>
            </div>
            
            
        </div>
    </div>
    <!-- Password Change end -->
</div>
    
</div>



<?
require_once('footer.php');
?>
