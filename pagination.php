<?php
include 'db_connect.php';
include 'function.php';
$per_page_record = 4; 
 if (isset($_GET["page"])) {    
    $page  = get_safe_value($conn,$_GET["page"]);    
}    
else {    
   $page=1;    
 } 
 $start_from = ($page-1) * $per_page_record;       
 $graphic_show_query="SELECT * FROM graphics order by id desc LIMIT $start_from, $per_page_record";
$result_query=mysqli_query($conn,$graphic_show_query);
while($row=mysqli_fetch_assoc($result_query)){
    ?>
     <div class="col-md-3 mb-3">
                <div class="card p-2 align-items-center text-center">
                    <img src="assets/img/<?php echo $row['graphic'] ?>" class="img-fluid" alt="">
                    <?php
                          $arr=explode('.',$row['graphic']);
                          $product_name=$arr[0];
                        ?>
                    <p class="card-text mt-2"><?php echo $product_name ?></p>
                    <?php
                          $ex=explode('/',$_SERVER['SCRIPT_NAME']);
                          if($ex[count($ex)-1]=='schedulepost.php')
                          {
                        ?>
                    <a href="schedulepost.php?post=<?php echo $row['id'];?>" class="btn btn-primary mb-2">Add to
                        Post</a>
                    <?php
                          }
                          else{
                        ?>
                    <a href="createpost.php?post=<?php echo $row['id'];?>" class="btn btn-primary mb-2">Add to Post</a>
                    <?php
                          }
                        ?>
                </div>
            </div>
    <?php
}
?>