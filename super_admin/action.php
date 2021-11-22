<?php
 require '../db_connect.php';
 require '../function.php';
 if(isset($_POST['approve'])){
     $content=get_safe_value($conn,$_POST['content']);
     $post_id=get_safe_value($conn,$_POST['post_id']);
     $sql="UPDATE post set content='$content',approve_admin=1 where id='$post_id'";
     $res=mysqli_query($conn,$sql);
     if($res){
         ?>
         <script>
             window.location="approvepost.php";
             alert("Approved Successfully");
         </script>
         <?php
        
     }
 }
 if(isset($_POST['disapprove'])){
     $post_id=get_safe_value($conn,$_POST['post_id']);
    $sql="UPDATE post set disapprove=1 where id='$post_id'";
     $res=mysqli_query($conn,$sql);
     if($res){
         ?>
         <script>
             window.location="approvepost.php";
             alert("Post disapproved");
         </script>
         <?php
        
     }
 }
 if(isset($_GET['delete']) && $_GET['delete']!=''){
     $id=get_safe_value($conn,$_GET['delete']);
     $sql="UPDATE post set admin_delete=1 where id='$id'";
     $res=mysqli_query($conn,$sql);
     if($res){
         ?>
         <script>
             window.location="approvedpost.php";
             alert("Deleted succesfully");
         </script>
         <?php
        
     }
 }
 if(isset($_GET['bulk']) && $_GET['bulk']!=''){
     $sql="UPDATE post set admin_delete=1 where approve_admin=1 and admin_delete=0";
     $res=mysqli_query($conn,$sql);
     if($res){
         ?>
         <script>
             window.location="approvedpost.php";
             alert("Deleted succesfully");
         </script>
         <?php
        
     }
 }
?>