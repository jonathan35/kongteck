<div class="pt-5"><br><br><br></div>
<div class="col-12 pl-5 pl-md-0">
    <h2>Related Vehicle</h2>
</div>
<div class="row">
    <?php 
    $relateds = sql_read("select id, vehicle, photo from vehicle where id !=? and region=? and category=? order by created desc limit 6", 'iii', array($vehicle['id'], $vehicle['region'], $vehicle['category']));
    
    foreach($relateds as $related){?>
        
        <div class="col-12 col-md-4 p-2">
        <a href="<?php echo ROOT?>vehicle_details/<?php echo $str_convert->to_url($related['vehicle']);?>" style="text-decoration:none;">
            <div style="border:1px solid #CCC;">
                <div class="list-zoom dy-height" style="border-bottom:1px solid #CCC; " >
                    <div class="bg-cover list-thum dy-height" style="background-image:url('<?php echo ROOT.$related['photo'];?>'); "></div>
                </div>
                <div style="padding:5px 10px; text-align:center; height:60px; overflow:hidden;"><?php echo $related['vehicle']?></div>
            </div></a>
        </div>
        
    <?php }?>
</div>

<style>
.dy-height {
    height: 130px;
}
@media (max-width: 575px) {
    .dy-height {
    height: 240px;
}
}
</style>