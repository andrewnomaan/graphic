<?php
  include 'db_connect.php';
?>
<div class="d-flex align-items-center justify-content-between">
  <a href="./" class="logo d-flex align-items-center">
    <img src="../assets/img/logo-3.png" class="img-fluid" alt="">
    <span class="d-none d-lg-block">ZGMS</span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->

<div class="search-bar d-none d-md-block">
  <form class="search-form d-flex align-items-center" method="POST" action="#">
    <input type="text" name="query" placeholder="Search" id="search" title="Enter search keyword">
    <button type="submit" title="Search"><i class="bi bi-search"></i></button>
  </form>
</div><!-- End Search Bar -->

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <!-- <li class="nav-item d-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li> -->
    <!-- End Search Icon-->

    <li class="nav-item dropdown">
    <?php
         $count=0;
          $d=date("Y-m-d", strtotime('+5 days'));
          $t_d=date("Y-m-d");
          $rem_time="";
          $res_not="";
          $ct=mysqli_query($conn,"SELECT count(*) from notification");
          $row_ct=mysqli_fetch_array($ct);
          $count=$row_ct[0];
          if($count>0){
          // echo $d;
            // $sql="SELECT post.*,graphics.graphic FROM post,graphics where post.graphic_id=graphics.id and scheduled_date<'$d' and scheduled_date>='$t_d'";
            $sql="SELECT * from notification where scheduled_note=1 and scheduled_dt<'$d' and scheduled_dt>='$t_d'";
            $res=mysqli_query($conn,$sql);
            $sql_disapprove="SELECT * from notification where disapprove_note=1";
            $res_disapprove=mysqli_query($conn,$sql_disapprove);
            $row_not=mysqli_fetch_array($res);
            if(mysqli_num_rows($res)>0){
            $sql_notification="SELECT post.*,graphics.graphic FROM post,graphics where post.id='$row_not[post_id]' and post.graphic_id=graphics.id and scheduled_date<'$d' and scheduled_date>='$t_d'";
            $res_not=mysqli_query($conn,$sql_notification);
            if(mysqli_num_rows($res_not)>0){
            $row=mysqli_fetch_assoc($res_not);
            $start_date = strtotime($row['scheduled_date']);
            $end_date = strtotime(date("Y-m-d"));
             $rem_time=($start_date-$end_date)/60/60/24;
            }
            }
            $row_dis_not=mysqli_fetch_array($res_disapprove);
            if(mysqli_num_rows($res_disapprove)>0){
            $sql_disapprove_notification="SELECT post.*,graphics.graphic FROM post,graphics where post.id='$row_dis_not[post_id]' and post.graphic_id=graphics.id order by date desc";
            $res_disapprove_not=mysqli_query($conn,$sql_disapprove_notification);
            if(mysqli_num_rows($res_disapprove_not)>0){
            $row_disapprove_not=mysqli_fetch_assoc($res_disapprove_not);
            }
            }
          }
            
          ?>

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number"><?php echo $count ?></span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
         
          You have <span><?php echo $count ?></span> notifications
          <?php
            if($count>0){
          ?>
          <a href="notification.php"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <?php
        if(mysqli_num_rows($res_not)>0){
          ?>
        <a href="notification.php">
          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div class="row">
              <div class="col-md-4">
                <img src="assets/img/<?php echo $row['graphic'] ?>" class="img-fluid" alt="">
              </div>
              <div class="col-md-8">
                <p><?php echo "Only ".$rem_time." days left"; ?></p>
              </div>
            </div>
          </li>
        </a>

        <li>
          <hr class="dropdown-divider">
        </li>
        <?php
        }
        ?>
       <?php
           if(mysqli_num_rows($res_disapprove)>0){
       ?> 
        <a href="notification.php">
          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div class="row">
              <div class="col-md-4">
                <img src="assets/img/<?php echo $row_disapprove_not['graphic'] ?>" class="img-fluid" alt="">
              </div>
              <div class="col-md-8">
                <p><b>Disapproved</b></p>
              </div>
            </div>
          </li>
        </a>

        <li>
          <hr class="dropdown-divider">
        </li>
        <?php
           }
        ?>
        <li class="dropdown-footer">
          <a href="notification.php">Show all notifications</a>
        </li>
       <?php
            }
       ?>
      </ul><!-- End Notification Dropdown Items -->

    </li><!-- End Notification Nav -->

    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="../assets/img/1.jpg" alt="" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">Arpit Dhiman</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <span>ZGMS Head</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Account Settings</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out</span>
          </a>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->