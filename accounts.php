<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Accounts - Zoyo</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/othercss.css">
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
                    <li class="breadcrumb-item">Administration</li>
                    <li class="breadcrumb-item active">Accounts</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section" id="social-accounts">
            <div class="row accounts">
                <div class="card">
                    <div class="alert alert-primary mt-3 text-center" role="alert">
                        You can manage your content. Unlimited number of accounts.
                    </div>
                    <h5 class="card-title text-center">Accounts Management</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card account">
                                <h4 class="card-title text-center">Social Accounts</h4>
                                <ul>
                                    <li>
                                        <a href=""><i class="fab fa-facebook face"></i><span> Facebook</span></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fab fa-twitter twit"></i><span> Twitter</span></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fab fa-instagram insta"></i><span> Instagram</span></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fab fa-linkedin linkedin"></i><span> LinkedIn</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card account">
                                <h4 class="card-title text-center">Social Groups</h4>
                                <ul>
                                    <li>
                                        <a href=""><i class="fab fa-facebook face"></i><span> Facebook Group</span></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fab fa-linkedin linkedin"></i><span> Linkedin Companies</span></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fab fa-telegram telegram"></i><span> Telegram</span></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fab fa-whatsapp whatsapp"></i><span> Whatsapp</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="card">
                    <form action="" method="post">
                        <h5 class="card-title">Project Accounts</h5>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <select name="" id="" class="form-control">
                                    <option value="">Select</option>
                                    <option value="">Move to Project</option>
                                    <option value="">Delete</option>
                                </select>
                            </div>
                        </div>
                    </form>
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