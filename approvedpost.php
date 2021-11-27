<?php
require 'db_connect.php';
require 'top.php';
$post=0;
$query_approve_post="SELECT post.*,graphic FROM post,graphics
where graphics.id = post.graphic_id and post.approve_admin=1 and post.disapprove=0 order by date asc;";
$res_approve=mysqli_query($conn,$query_approve_post);
if(mysqli_num_rows($res_approve)>0){
    $post=1;
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
                <div class="card p-4">
                    <?php
                      if($post==0){
                         echo "<b>Approved post is not available</b>"; 
                         exit;
                      }
                      else{
                        echo "<b>Approved post</b>";
                      }
                    ?>
                    </div>
                    <div class="card">
                        <form action="" method="post">
                            <div class="row mb-3">
                                <?php
                        while($row=mysqli_fetch_assoc($res_approve)){
                   ?>
                                <div class="col-md-4 my-4 text-center">
                                    <div class="card align-items-center p-3">
                                        <img src="assets/img/<?php echo $row['graphic'] ?>" class="img-fluid" alt="">
                                        <h5 class="card-title"><?php 
                                    $ext=explode('.',$row['graphic']);
                                    echo $ext[count($ext)-2]; 
                                    ?></h5>
                                        <p class="card-text"><?php echo $row['content'] ?></p>
                                        <?php
                                          if($row['scheduled_date']!='0000-00-00')
                                          {
                                        ?>
                                         <p class="card-text"><b>Scheduled on:</b><?php echo $row['scheduled_date'] ?></p>
                                         <?php
                                          }
                                         ?>
                                        <!-- <a href="new.php?link=http://localhost/gms/graphic/assets/img/<?php echo $row['graphic'] ?>" class="btn btn-primary">Post on facebook</a> -->
                                        <!-- <iframe src="https://www.facebook.com/plugins/share_button.php/?href=http://localhost/gms/graphic/assets/img/BalMithai1456825390.jpg/&layout=button_count&size=small&appId=440232214378294&width=77&height=20" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> -->
                                            <a href="https://www.facebook.com/v11.0/dialog/oauth?client_id=1314409385378233&state=f625e1fc59a666edf82f3048171c3389&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fpostoplan.app%2Fuser%2Fcallback%2Ffacebook_pages&scope=pages_manage_metadata%2Cpages_read_engagement%2Cpages_read_user_content%2Cpages_manage_posts%2Cpages_manage_engagement%2Cread_insights%2Cpages_show_list%2Cpages_messaging">Share</a>
                                    </div>
                                </div>
                                <?php
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