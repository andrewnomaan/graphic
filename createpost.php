<?php
   require 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Create Post - Zoyo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

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
            <div class="row">
                <div class="card">
                    <div class="alert alert-primary mt-3 text-center" role="alert">
                        Uploaded video will not be appear!
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Upload Photo / Video</h5>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg-8 mb-3">
                                    <input class="form-control" type="file" id="formFile" alt="Image/Video not found">
                                </div>
                                <div class="col-lg-4 text-center">
                                    <button type="submit" class="btn btn-primary w-50">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="card">
                    <form action="" method="post">
                        <div class="row mb-3">
                            <div class="col-md-4 mb-4 text-center">
                                <h5 class="card-title">Uploaded Photo / Video</h5>
                                <div class="card align-items-center p-3">
                                    <img src="assets/img/product-2.jpg" class="img-fluid" alt="">
                                    <p class="card-text mt-3">Item Name</p>
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <button type="submit" class="btn btn-danger mb-2">Delete</button>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <button type="submit" class="btn btn-success mb-2">Replace</button>

                                        </div>
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

            <div class="row">
                <div class="card">
                    <h5 class="card-title text-center">Your Library</h5>
                    <div class="row mt-3">
                        <div class="col-md-3 mb-3">
                            <div class="card p-2 align-items-center text-center">
                                <form action="">
                                    <img src="assets/img/product-1.jpg" class="img-fluid" alt="">
                                    <p class="card-text mt-2">Image Name</p>
                                    <button type="submit" class="btn btn-primary mb-2">Add to Post</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card p-2 align-items-center text-center">
                                <form action="">
                                    <img src="assets/img/product-1.jpg" class="img-fluid" alt="">
                                    <p class="card-text mt-2">Image Name</p>
                                    <button type="submit" class="btn btn-primary mb-2">Add to Post</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card p-2 align-items-center text-center">
                                <form action="">
                                    <img src="assets/img/product-1.jpg" class="img-fluid" alt="">
                                    <p class="card-text mt-2">Image Name</p>
                                    <button type="submit" class="btn btn-primary mb-2">Add to Post</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card p-2 align-items-center text-center">
                                <form action="">
                                    <img src="assets/img/product-1.jpg" class="img-fluid" alt="">
                                    <p class="card-text mt-2">Image Name</p>
                                    <button type="submit" class="btn btn-primary mb-2">Add to Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Zoyo Ecommerce Pvt. Ltd.</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Developed by <a href="https://zoyoecommerce.com/">Zoyo Ecommerce Pvt. Ltd.</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>