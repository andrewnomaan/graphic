<?php
  require 'db_connect.php';
  require 'function.php';
  $search_value=get_safe_value($conn,$_POST['search']);    
  $sql="SELECT * FROM graphics where graphic LIKE '%{$search_value}%'";
  $res=mysqli_query($conn,$sql);
  $output="";
  if(mysqli_num_rows($res)>0){
    $output='<div class="card">
    <h5 class="card-title text-center">Your Library</h5>
    <div class="row mt-3">';
    while($row=mysqli_fetch_assoc($res)){
      $output.='
      <div class="col-md-3 mb-3">
      <div class="card p-2 align-items-center text-center">
          <img src="assets/img/'. $row["graphic"].'" class="img-fluid" alt="">
          ';
          $arr=explode('.',$row["graphic"]);
                $product_name=$arr[0];
                $output.='<p class="card-text mt-2">'.$product_name.'</p>';
                $ex=explode('/',$_SERVER["SCRIPT_NAME"]);
                if($ex[count($ex)-1]=="schedulepost.php")
                {
                    $output.='<a href="schedulepost.php?post= '.$row["id"].'" class="btn btn-primary mb-2">Add to
              Post</a>';
                }
                else{
                    $output.='<a href="createpost.php?post='.$row["id"].'" class="btn btn-primary mb-2">Add to Post</a>';
                }
                $output.='</div>
  </div>';
            }
            $output.='</div>
           
                </div>
            
            ';
            echo $output;
  }
?>