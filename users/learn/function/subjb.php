<div class="row">

    <div class="col-md-12 mt-3" id="divsub" >
        <?php
            $query="select * from  vi_d where level='".$stage."' ";
            $runquery=mysqli_query($con, $query) or die(mysqli_error($con));
            while($counttot=mysqli_fetch_object($runquery)){
        ?>	
            <div class="fa">
            
            <a href="../../adm/s/<?php echo $counttot->vid_path; ?>" target="_blank" class="hovid">
            <span class="fa fa-file" style="font-size:40px;"></span>
            </a>
            <span style="font-size:12px;">
            <?php echo $counttot->title; ?>
            </span>
            </div>&nbsp;&nbsp;&nbsp;&nbsp;
        <?php } ?>	        
    </div>



</div>

