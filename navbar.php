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
          $d=date("Y-m-d", strtotime('+5 days'));
          $t_d=date("Y-m-d");
          // echo $d;
            $sql="SELECT post.*,graphics.graphic FROM post,graphics where post.graphic_id=graphics.id and scheduled_date<'$d' and scheduled_date>'$t_d'";
            $res=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($res);
            // echo date("Y-m-d");
            $x=explode("-",date("Y-m-d"));
            $y=explode("-",$row['scheduled_date']);
             $rem_time=$y[2]-$x[2];
            //  echo $rem_time;
            // print_r($row);
            $count=mysqli_query($conn,"SELECT COUNT(*) FROM post where scheduled_date<'$d' and scheduled_date>'$t_d'");
            $row1=mysqli_fetch_array($count);
            
          ?>

      <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number"><?php echo $row1[0] ?></span>
      </a><!-- End Notification Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
        <li class="dropdown-header">
         
          You have <span><?php echo $row1[0] ?></span> new notifications
          <a href="approvepost.php"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <a href="">
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
        <li class="dropdown-footer">
          <a href="approvepost.php">Show all notifications</a>
        </li>

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