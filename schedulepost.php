<?php
//    require 'db_connect.php';
   require 'top.php';
?>
<!DOCTYPE html>
<html lang="en">

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
                    <li class="breadcrumb-item">Create</li>
                    <li class="breadcrumb-item active">Schedule Post</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section" id="photo-editor">
            <?php
             include 'upload_form.php';
           ?>

            <div class="row">
                <div class="card">
                <div class="alert alert-danger hidden already" role="alert" id="already">
                                        <b></b>
                </div>
                    <form action="action.php" method="post" id="forward_post">
                        <div class="row mb-3">
                            <div class="col-md-4 mb-4 text-center">
                                <h5 class="card-title">Uploaded Photo / Video</h5>
                                <div class="card align-items-center p-3">
                                    <?php
                                    if(isset($_GET['post']) && $_GET['post']!=''){
                                        $sql="SELECT * FROM graphics where id='$_GET[post]'";
                                        $res_query=mysqli_query($conn,$sql);
                                        $row=mysqli_fetch_assoc($res_query);
                                    }
                                    else{
                                     $sql="SELECT * FROM graphics ORDER BY id DESC LIMIT 1";
                                      $res_query=mysqli_query($conn,$sql);
                                      $row=mysqli_fetch_assoc($res_query);
                                    }
                                    ?>
                                    <img src="assets/img/<?php echo $row['graphic'] ?>" class="img-fluid" alt="">
                                    <input type="hidden" value="<?php echo $row['id'];?>" name="graphic_id">
                                    <?php
                                      $arr2=explode('.',$row['graphic']);
                                      $product_name2=$arr2[0];
                                    ?>
                                    <p class="card-text mt-3"><?php echo $product_name2 ?></p>
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <div id="check"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-8">
                                <h5 class="card-title text-center">Content</h5>
                                <div class="card">
                                    <div class="alert alert-success hidden scheduled" role="alert" id="scheduled">
                                        <b></b>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 my-4">
                                                <textarea name="content" id="" class="form-control" rows="6"
                                                    placeholder="Write your comment"></textarea>
                                                <div id="content_err" style="color:red;"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <input type="date" name="schedule_date" id="" class="form-control">
                                                <span id="date_err" style="color:red;"></span>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <input type="time" name="schedule_time" id="" class="form-control">
                                                <span id="time_err" style="color:red;"></span>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" name="action" class="btn btn-primary">Forward
                                                    Post</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>


            <?php
               include 'graphics_library.php';
            ?>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php
               include 'footer.php';
               include 'bottom.php';
    ?>
    <!-- End Footer -->





</body>

</html>