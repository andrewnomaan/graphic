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
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item">Create</li>
                    <li class="breadcrumb-item active">Add Graphic</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section" id="photo-editor">
            <?php
               include 'upload_form.php';
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