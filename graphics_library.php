<div class="row" id="search_data">
    <div class="card">
        <h5 class="card-title text-center">Your Library</h5>
        <?php 
             $per_page_record = 4; 
            $query = "SELECT COUNT(*) FROM graphics";     
            $rs_result = mysqli_query($conn, $query);     
            $row = mysqli_fetch_row($rs_result);     
            $total_records = $row[0];
            $total_pages = ceil($total_records / $per_page_record);     
                $pagLink = "";   
             ?>
        <div class="row mt-3" id="paginate_content"> 
        </div>
        <div class="d-flex justify-content-center">
              <?php
              
        ?>
  <nav aria-label="...">
  <ul class="pagination">
    
    <!-- <li class="page-item">
      <a class="page-link previous" href="javaScript:void(0);" tabindex="-1">Previous</a>
    </li>
     -->
    <?php
      //  }
       for ($i=1; $i<=$total_pages; $i++) {   
        if ($i == 1) {   
    ?>
    <li class="page-item active" id="<?php echo $i;?>">
      <a class="page-link" href="javaScript:void(0);" data-id="<?php echo $i;?>"><?php echo $i?><span class="sr-only"></span></a>
    </li>
    <?php
      }else{
    ?>
    <li class="page-item" id="<?php echo $i;?>"><a class="page-link" href="javaScript:void(0);" data-id="<?php echo $i;?>"><?php echo $i; ?></a></li>
    <?php
      }
    }
    ?>
    <?php
       $ex=explode('/',$_SERVER['SCRIPT_NAME']);
       if($ex[count($ex)-1]=='schedulepost.php')
       {
         ?>
         <input type="hidden" id="script" value="schedulepost.php">
         <?php
       }
       else{
         ?>
       <input type="hidden" id="script" value="createpost.php">
       <?php
       }
    ?>
    <!-- <li class="page-item">
      <a class="page-link" href="javascript:void(0)">Next</a>
    </li> -->
    
  </ul>
</nav>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function() {
    var forward = $('#script').val();
		$("#paginate_content").load(`pagination.php?page=1&forward=${forward}`);
		$(".page-link").click(function(){
			var id = $(this).attr("data-id");
			var select_id = $(this).parent().attr("id");
			var forward = $('#script').val();
			$.ajax({
				url: "pagination.php",
				type: "GET",
				data: {
					page : id,
          forward:forward
				},
				cache: false,
				success: function(dataResult){
					$("#paginate_content").html(dataResult);
					$(".page-item").removeClass("active");
					$("#"+select_id).addClass("active");
					
				}
			});
		});
		// $(".previous").click(function(){
		// 	var id = $(this).attr("data-id");
		// 	var select_id = $(this).parent().attr("id");
		// 	$.ajax({
		// 		url: "pagination.php",
		// 		type: "GET",
		// 		data: {
		// 			page : id
		// 		},
		// 		cache: false,
		// 		success: function(dataResult){
		// 			$("#paginate_content").html(dataResult);
		// 			$(".page-item").removeClass("active");
		// 			$("#"+select_id).addClass("active");
					
		// 		}
		// 	});
		// });
    });
</script>