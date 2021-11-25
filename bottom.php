<?php
$bottom_assets="";
  $ex=explode('/',$_SERVER['SCRIPT_NAME']);
    if($ex[count($ex)-2]=='super_admin')
    {
        $bottom_assets="../";
    }
?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo $bottom_assets ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/vendor/quill/quill.min.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/vendor/chart.js/chart.min.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo $bottom_assets ?>assets/js/main.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/js/add_graphic.js"></script>
    <script src="<?php echo $bottom_assets ?>assets/js/search.js"></script>