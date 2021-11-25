<?php
require '../db_connect.php';
require '../top.php';
?>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <?php include('navbar.php') ?>
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <?php include('sidebar_superadmin.php') ?>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <!-- <h1>If you want to quickly create a photo and post it on your social networks, try the smart picture generator.</h1> -->
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item">Approval</li>
                    <li class="breadcrumb-item active">Approve Post</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section" id="photo-editor">
            <div class="row">
                <div class="card">
                    <div class="alert alert-primary mt-3 text-center" role="alert">
                        Video will not be appear!
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card">
                <?php 
                            $query_approve_post="SELECT post.*,graphic FROM post,graphics
                            where graphics.id = post.graphic_id and post.approve_admin=0 and post.disapprove=0 order by date desc;";
                             $res_approve=mysqli_query($conn,$query_approve_post);
                             while($row=mysqli_fetch_assoc($res_approve)){
                            ?>
                    <form action="action.php" method="post">
                       
                        <div class="row">
                            <div class="col-md-4 mt-4 text-center">
                                <div class="card align-items-center p-3">
                                    <img src="../assets/img/<?php echo $row['graphic'] ?>" class="img-fluid" alt="">
                                    <p class="card-text mt-3"><?php 
                                    $ext=explode('.',$row['graphic']);
                                    echo $ext[count($ext)-2]; 
                                    ?></p>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <h5 class="card-title text-center">Content</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 my-4">
                                                <textarea name="content" id="" class="form-control" rows="6"
                                                    placeholder="Comment"><?php echo $row['content'] ?></textarea>
                                            </div>
                                            <input type="hidden" value="<?php echo $row['id'] ;?>" name="post_id">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" name="approve" class="btn btn-success mx-2 mb-3">Approve
                                                    Post</button>
                                                <button type="submit" name="disapprove" class="btn btn-danger mx-2 mb-3">Disapprove
                                                    Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                    <?php
                             }
                        ?>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
     require '../footer.php';
     require '../bottom.php';
  ?>
    <!-- End Footer -->


</body>

</html>