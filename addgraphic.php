<?php
   require 'db_connect.php';
//    Add graphics
// if(isset($_POST['add_graphic'])){
//     $graphic=$_FILES['graphic'];
//     $graphic_name=$_FILES['graphic']['name'];
//     $graphic_temp_name=$_FILES['graphic']['tmp_name'];
//     $destination="assets/img/".$graphic_name;
    // $extention = pathinfo($_FILES['graphic']['name'],PATHINFO_EXTENSION);
    // move_uploaded_file($graphic_temp_name, $destination);
    // exit;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Add Graphic - Zoyo</title>
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
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item">Create</li>
                    <li class="breadcrumb-item active">Add Graphic</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section" id="photo-editor">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Upload Photo</h5>
                        <form action="action.php" method="post" enctype="multipart/form-data" class="graphic_form" id="form">
                            <div class="row">
                                <div class="col-lg-8 mb-3">
                                    <input class="form-control graphic" type="file" id="formFile" name="graphic_name">
                                    <span id="graphic_err" style="color:red;"></span>
                                </div>
                                <div class="col-lg-4 text-center">
                                    <button type="submit" name="add_graphic" class="btn btn-primary w-50 add_graphic">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $("#form").on('submit',(function(e) {
                e.preventDefault();
                var graphic=$('#formFile').val();
                if(graphic==""){
                    $('#graphic_err').html("Plz select graphic first");
                }else{
                    $.ajax({
                         url:'action.php',
                         method:'post',
                         data:  new FormData(this),
                         contentType: false,
                               cache: false,
                         processData:false,
                         dataType:"json",
                         success:function(response){
                             if(response.code==100){
                            $('#graphic_err').html(response.msg);
                             }
                             else{
                                $('#graphic_err').html(response.msg).css("color","green");
                                $("#graphic_err").fadeOut(3000);
                             }
                         }
                    })
                }
             }))
        })
    </script>

</body>

</html>