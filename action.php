<?php
  require 'db_connect.php';
  require 'function.php';
  if(isset($_FILES['graphic_name'])){
    $graphic=$_FILES['graphic_name'];
    $graphic_name=$_FILES['graphic_name']['name'];
    $graphic_temp_name=$_FILES['graphic_name']['tmp_name'];
    $destination="assets/img/".$graphic_name;
    $extention = pathinfo($_FILES['graphic_name']['name'],PATHINFO_EXTENSION);
    $arr=array('png','jpg','jpeg','cdr','pdf');
    if(in_array($extention,$arr)){
        move_uploaded_file($graphic_temp_name, $destination);
        $sql="INSERT into graphics values('','$graphic_name',1,'','')";
        $res=mysqli_query($conn,$sql);
        $msg ="Graphic added successfully";
        echo json_encode(['code'=>200]);
    }
   else{
       $msg="Only png,jpg,jpeg,cdr,pdf are allowed";
       echo json_encode(['code'=>100, 'msg'=>$msg]);
   }
  }
  if(isset($_GET['delete']) && $_GET['delete']!=''){
      $delete=get_safe_value($conn,$_GET['delete']);
      $sql="DELETE FROM graphics where id='$delete'";
      $res=mysqli_query($conn,$sql);
      if($res){
         ?>
          <script>
            window.location="createpost.php";
            alert("Deleted Successfully");
          </script>
         <?php
      }
  }
?>