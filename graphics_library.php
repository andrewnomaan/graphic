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
                    <form action="">
                        <img src="assets/img/<?php echo $row['graphic'] ?>" class="img-fluid" alt="">
                        <p class="card-text mt-2">Image Name</p>
                        <button type="submit" class="btn btn-primary mb-2">Add to Post</button>
                    </form>
                </div>
            </div>
            <?php
                        } ?>
        </div>
    </div>
</div>