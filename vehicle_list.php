<?php 
//require_once 'config/ini.php';
//require_once 'config/security.php';
//include_once 'head.php';

$type_cond = $cat_cond = $loc_cond = $key_cond = '';
$params[] = 1;
$sta_cond = ' status=? ';

if(!empty($_POST['keyword'])){//This is vehicle type    
    $key_cond = " and name like ? ";
    $params[] = "%".$_POST['keyword']."%";    
}

if(!empty($selected_type['id'])){//This is vehicle type    
    $type_cond = " and vehicle_type=? ";
    $params[] = $selected_type['id'];
}
if(!empty($selected_category['id'])){//This is category
    $cat_cond = " and category=? ";
    $params[] = $selected_category['id'];
}
if(!empty($slocation['id'])){//This is location
    $loc_cond = " and location=? ";
    $params[] = $slocation['id'];
}
//echo "select * from vehicle where $sta_cond $key_cond $type_cond $cat_cond $loc_cond order by position asc, id desc";

$vehicles = sql_read("select * from vehicle where $sta_cond $key_cond $type_cond $cat_cond $loc_cond order by position asc, id desc", str_repeat('s',count($params)), $params);


//debug($vehicles);

$bs = sql_read('select * from brand where status=1 order by position asc, brand asc');
foreach($bs as $b){
    $brands[$b['id']] = $b['brand'];
}
$category_ds = sql_read('select * from category where status=1');
foreach($category_ds as $category_d){
    $categories[$category_d['id']] = $category_d['category'];
}
$ls = sql_read('select * from region where status=1');
foreach($ls as $l){
    $regions[$l['id']] = $l['region'];
}


if(!isset($vehicles)){
    echo '<div class="row"><div class="col-12"><div class="row"><div class="col-12 p-2">No vehicle found</div></div></div></div>';
}else{
    echo '<div class="row"><div class="col-12"><div class="row"><div class="col-12 p-2">'.count($vehicles).' vehicles found</div></div></div></div>';    
}

$itemCount=1;
$maxPerPage=10;



foreach((array)$vehicles as $vehicle){
?>
<div class="row mb-5 p-0 page page<?php echo $itemCount?>" style=" <?php if($itemCount>$maxPerPage){?> display:none;<?php }?>; linear-gradient(180deg, rgba(222,111,111,1) 0%, rgba(222,222,11,1) 100%); border:1px solid #444; ">
    <div class="col-12">
        <div class="row">
            <div class="col-12 p-2 text-white" style="background: linear-gradient(160deg, rgba(52,52,52,1) 0%, rgba(24,24,24,1) 100%); font-size:20px;">
                <?php echo $vehicle['vehicle']?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 mt-0 p-0 p-md-3">
                <div class="zoom-outter">
                    <?php if(file_exists($vehicle['photo'])){?>
                        <img src="<?php echo ROOT.$vehicle['photo']?>" class="img-fluid zoom-inner">
                    <?php }else{?>
                        <img src="<?php echo ROOT.'images/SD-default-image.png'?>" class="img-fluid">
                    <?php }?>
                </div>
            </div>
            <div class="col-12 col-md-7 pt-1 pb-5 pl-4 pr-4 p-md-4" style="font-size:14px;">
                <div class="row">
                    <?php if(!empty($regions[$vehicle['region']])){?>
                    <div class="col-6 p-1">
                        <i class="fa fa-map-marker ico-cus"></i>
                        <b class="d-none d-md-inline">Region: </b>
                        <?php echo $regions[$vehicle['region']]?>
                    </div>
                    <?php }?>

                    <?php if(!empty($vehicle['passenger'])){?>
                    <div class="col-6 p-1">
                        <i class="fa fa-user-alt ico-cus"></i>
                        <b class="d-none d-md-inline">Passenger: </b>
                        <?php echo $vehicle['passenger']?>
                    </div>
                    <?php }?>

                    <?php if(!empty($vehicle['price'])){?>
                    <div class="col-6 p-1">
                        <i class="fa fa-tag ico-cus"></i>
                        <b class="d-none d-md-inline">Start From: </b>
                        <?php echo $vehicle['price']?>
                    </div>
                    <?php }?>

                    <?php if(!empty($brands[$vehicle['brand']])){?>
                    <div class="col-6 p-1">
                        <i class="fa fa-flag ico-cus"></i>
                        <b class="d-none d-md-inline">Brand & Year: </b>
                        <?php echo $brands[$vehicle['brand']]?>
                    </div>
                    <?php }?>

                    <div class="col-12 p-1" style="white-space: pre-line;">
                        <?php if(!empty($vehicle['brief_description'])){ echo $vehicle['brief_description'].'..';}?>
                    </div>
                    

                    <div class="col-12 pt-4" style="position: absolute; bottom:15px; left:-3px;">
                        <div class="row">
                            <div class="col-6 text-left">
                                <div class="btn btn-lg text-center btn-vehicle-enquiry" data-toggle="modal" data-target="#enquiryModal" href=# style="width:100%;" onclick="change_title('<?php echo $vehicle['vehicle']?>')">
                                    BOOK NOW
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="<?php echo ROOT?>vehicle_details/<?php echo $str_convert->to_url($vehicle['vehicle'])?>">
                                <div class="btn btn-lg text-center btn-vehicle-view" style="width:100%;">
                                    MORE INFO
                                </div></a>
                            </div>
                        </div>
                    </div>
                

                </div>
        
                
            </div>
        </div>
    </div>
</div>
<?php 
$itemCount++;
}?>

<div class="row">
    <div class="col-12 p-0">
        <?php include 'paging.php';?>
    </div>
</div>
