<?php
require 'db_connect.php';
require 'top.php';
$post=0;
$query_approve_post="SELECT post.*,graphic FROM post,graphics
where graphics.id = post.graphic_id and post.approve_admin=1 and post.admin_delete=0;";
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
                    ?>
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
                                    <a href="" class="btn btn-primary">Post on facebook</a>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                        </div>
                    </form>
                </div>
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