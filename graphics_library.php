<div class="row">
    <div class="card">
        <h5 class="card-title text-center">Your Library</h5>
        <div class="row mt-3">
            <?php 
                        $graphic_show_query="SELECT * FROM graphics";
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
                        <a href="schedulepost.php?post=<?php echo $row['id'];?>" class="btn btn-primary mb-2">Add to Post</a>
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
                        } ?>
        </div>
    </div>
</div>