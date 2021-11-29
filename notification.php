<?php
          include 'db_connect.php';
          require 'top.php';
          $count=0;
          $res_disapprove_not2="";
          $d=date("Y-m-d", strtotime('+5 days'));
          $t_d=date("Y-m-d");
          $res_not2="";
          $res_disapprove_not2_count=0;
          // echo $d;
            // $sql="SELECT post.*,graphics.graphic FROM post,graphics where post.graphic_id=graphics.id and scheduled_date<'$d' and scheduled_date>='$t_d'";
            $sql="SELECT * from notification where scheduled_note=1 and scheduled_dt<'$d' and scheduled_dt>='$t_d'";
            $res=mysqli_query($conn,$sql);
            $sql_disapprove="SELECT * from notification where disapprove_note=1";
            $res_disapprove=mysqli_query($conn,$sql_disapprove);
            $row_not=mysqli_fetch_array($res);
            if(mysqli_num_rows($res)>0){
            $sql_notification2="SELECT post.*,graphics.graphic FROM post,graphics where post.id='$row_not[post_id]' and post.graphic_id=graphics.id and scheduled_date<'$d' and scheduled_date>='$t_d'";
            $res_not2=mysqli_query($conn,$sql_notification2);
            $count=mysqli_num_rows($res_not2);
            }
           
            
          ?>


<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <?php include('navbar.php') ?>
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <?php include('sidebar.php') ?>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <!-- <h1>If you want to quickly create a photo and post it on your social networks, try the smart picture generator.</h1> -->
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item">Approval</li>
                    <li class="breadcrumb-item active">Approved Post</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section" id="photo-editor">

            <div class="row">
                    <div class="card">
                        <form action="" method="post">
                            <div class="row mb-3">
                                <?php
                        while($row=mysqli_fetch_assoc($res_not2)){
                            $start_date = strtotime($row['scheduled_date']);
                            $end_date = strtotime(date("Y-m-d"));
                             $rem_time=($start_date-$end_date)/60/60/24;
                            // $count=mysqli_num_rows($res_not);
                             ?>
                                <div class="col-md-4 my-4 text-center">
                                    <div class="card align-items-center p-3">
                                        <img src="assets/img/<?php echo $row['graphic'] ?>" class="img-fluid" alt="">
                                        <h5 class="card-title"><?php 
                                    $ext=explode('.',$row['graphic']);
                                    echo $ext[count($ext)-2]; 
                                    ?></h5>
                                        <?php
                                           if($row['approve_admin']==1){
                                        ?>
                                           <p class="card-text">Approved</p>
                                           <p class="card-text"><?php echo $row['content'] ?></p>
                                        <p><?php echo "Only ".$rem_time." days left"; ?></p>
                                        <iframe src="https://www.facebook.com/plugins/share_button.php/?href=https://images.unsplash.com/photo-1541963463532-d68292c34b19?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&w=1000&q=80&layout=button_count&size=small&appId=440232214378294&width=77&height=20" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                                           <?php
                                           }
                                           else if($row['approve_admin']==0){
                                        ?>  
                                        <p class="card-text"><?php echo $row['content'] ?></p>
                                        <p><?php echo "Only ".$rem_time." days left"; ?></p>
                                        <a href="createpost.php?post=<?php echo $row['graphic_id'];?>" class="btn btn-primary mb-2">Add to Post</a>
                                        <?php
                                           }
                                        ?>
                                    </div>
                                </div>
                                <?php
                        }
                        if(mysqli_num_rows($res_disapprove)>0){
                            while($row_dis_not=mysqli_fetch_assoc($res_disapprove)){
                            $sql_disapprove_notification2="SELECT post.*,graphics.graphic FROM post,graphics where post.id='$row_dis_not[post_id]' and post.graphic_id=graphics.id order by date desc";
                            $res_disapprove_not2=mysqli_query($conn,$sql_disapprove_notification2);
                        while($row_disapprove_not2=mysqli_fetch_assoc($res_disapprove_not2)){
                            $start_date = strtotime($row_disapprove_not2['scheduled_date']);
                            $end_date = strtotime(date("Y-m-d"));
                             $rem_time=($start_date-$end_date)/60/60/24;
                             ?>
                                <div class="col-md-4 my-4 text-center">
                                    <div class="card align-items-center p-3">
                                        <img src="assets/img/<?php echo $row_disapprove_not2['graphic'] ?>" class="img-fluid" alt="">
                                        <h5 class="card-title"><?php 
                                    $ext=explode('.',$row_disapprove_not2['graphic']);
                                    echo $ext[count($ext)-2]; 
                                    ?></h5>
                                         
                                        <p class="card-text"><?php echo $row_disapprove_not2['content'] ?></p>
                                        <p class="card-text"><b>Disapproved</b></p>
                                        <?php
                                          if($row_disapprove_not2['scheduled_date']!='0000-00-00'){
                                              if($rem_time>0){
                                        ?>
                                        <p><?php echo "Only ".$rem_time." days left"; ?></p>
                                        <?php
                                              }
                                              else{
                                        ?>
                                          <p><?php echo "Expired on ".$row_disapprove_not2['scheduled_date']; ?></p>
                                        <?php
                                          }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                        }
                    }
            }
                    ?>
                            </div>
                        </form>
                </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
     require 'footer.php';
     require 'bottom.php';
  ?>

</body>

</html>