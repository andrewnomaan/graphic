<?php
   require 'db_connect.php';
   require 'top.php';
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
                    <li class="breadcrumb-item">Create</li>
                    <li class="breadcrumb-item active">Create Post</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section" id="photo-editor">
           <?php
             include 'upload_form.php';
           ?>
            <div class="row ">
                <div class="card">
                    <form action="" method="post">
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
                                    <?php
                                      $arr2=explode('.',$row['graphic']);
                                      $product_name2=$arr2[0];
                                    ?>
                                    <p class="card-text mt-3"><?php echo $product_name2 ?></p>
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <div id="check"></div>
                                           <a href="action.php?delete=<?php echo $row['id'] ?>" id="delete_graphic" class="btn btn-danger mb-2">Delete</a>
                                        </div>
                                        <!-- <div class="col-md-6 col-6"> -->
                                            <!-- <button type="text" class="btn btn-success mb-2 file_input_replacement">Replace</button> -->
                                            <!-- <input type="file" id="file" style="display:none;">
                                            <label for="file" class="btn btn-success mb-2 file_input_replacement">Replace</label>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <h5 class="card-title text-center">Content</h5>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 my-4">
                                                <textarea name="" id="" class="form-control" rows="6" placeholder="Write your comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn btn-primary">Forward Post</button>
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