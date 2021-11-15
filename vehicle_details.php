<?php 
require_once 'config/ini.php';
require_once 'config/security.php';
include_once 'head.php';



?>





<html lang="en">

<body class="container-fluid p-0">
    <div class="my-container">

        <?php include 'header.php';?>
        <div style="height:66px;">
            <div class="page_title">
                For Rent
            </div>
        </div>


        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=169459756468358&autoLogAppEvents=1" nonce="i4bMr8gD"></script>


    

        <div class="row p-0">
            <div class="col-12 p-3 pb-5 pt-5 mt-4">
                <div class="row">
                    <div class="col-12">
                        <a href="<?php echo ROOT?>vehicles" style="text-decoration:none;">
                            <i class="fa fa-angle-left" style="position:relative; top:1px;"></i>    
                            Back to list
                        </a>
                    </div>
                </div>
                <div class="row">
            
                    <div class="col-12">

                        <div class="row" style="border-bottom:1px solid #CCC;">
                            <div class="col-12 p-1 pl-4 pr-4 p-md-3">
                                
                                <div class="row mb-3">

                                    <?php 
                                    $photos = sql_read("select photo from photos where parent_table=? and parent_id=? and status=? order by id asc", 'ssi', array('vehicle', $vehicle['id'], 1));
                                    $c = count((array)$photos) + 1;
                                    ?>

                                    <div class="col-12 <?php if($c>1){?>col-md-7<?php }else{?>col-md-8<?php }?> pr-md-1">
                                        <div class="zoom-outter">
                                            <?php if(file_exists($vehicle['photo'])){?>
                                                <img class="large-photo zoom-inner" src="<?php echo ROOT.$vehicle['photo']?>" width="100%" style="box-shadow: 1px 1px 4px rgba(0,0,0,.3)">
                                            <?php }else{?>
                                                <img src="<?php echo ROOT.'images/SD-default-image.png'?>" class="large-photo img-fluid" style="box-shadow: 1px 1px 4px rgba(0,0,0,.3)">
                                            <?php }?>
                                        </div>
                                    </div>
                                    <?php if($c>1){?>
                                    <div class="col-12 col-md-1">
                                        <div class="row pt-1 pl-3 pr-3 p-md-0">
                                            <?php                                  
                                            if($c>1) $h = 250/$c;?>
                                            <div class="col-4 col-md-12 p-md-0">
                                                <div class="zoom-outter">
                                                    <div class="bg-cover photo-thum zoom-inner" style="height:<?php echo $h?>px; overflow:hidden; background-position: center; background-image:url('<?php echo ROOT.$vehicle['photo']?>')" data-photo="<?php echo ROOT.$vehicle['photo']?>"></div>
                                                </div>
                                            </div>
                                            <?php
                                            foreach((array)$photos as $photo){?>
                                                <div class="col-4 col-md-12 p-md-0">
                                                    <div class="zoom-outter">
                                                        <div class="bg-cover photo-thum zoom-inner" style="height:<?php echo $h?>px; overflow:hidden; background-position: center; background-image:url('<?php echo ROOT.$photo['photo']?>')" data-photo="<?php echo ROOT.$photo['photo']?>"></div>
                                                    </div>
                                                </div>
                                            <?php }?>

                                            

                                            <script>
                                            $('.photo-thum').click(function(){
                                                var a = $(this).attr('data-photo');
                                                change_photo(a);
                                            });
                                            $('.photo-thum').hover(function(){
                                                var a = $(this).attr('data-photo');
                                                change_photo(a);
                                            });
                                            function change_photo(a){
                                                $('.large-photo').attr('src', a);
                                            }
                                            
                                            </script>
                                        </div>
                                    </div>
                                    <?php }?>
                                

                                    <div class="col-12 col-md-4">
                                        
                                        <div class="row">
                                            <div class="col-12 text-black pb-4 pb-md-5" style="font-size:30px; line-height:1.2;">
                                                <?php echo $vehicle['vehicle']?>
                                            </div>

                                            <?php if(!empty($brand['brand'])){?>
                                            <div class="col-12 pt-2">
                                                <i class="fa fa-flag ico-cus2"></i>
                                                <b>Brand & Year: </b>
                                                <?php echo $brand['brand']?>
                                            </div>
                                            <?php }?>

                                            <?php if(!empty($region['region'])){?>
                                            <div class="col-12 pt-2">
                                                <i class="fa fa-map-marker ico-cus2"></i>
                                                <b>Region: </b>
                                                <?php echo $region['region']?>
                                            </div>
                                            <?php }?>

                                            <?php if(!empty($vehicle['passenger'])){?>
                                            <div class="col-12 pt-2">
                                                <i class="fa fa-user-alt ico-cus2"></i>
                                                <b>Passenger: </b>
                                                <?php echo $vehicle['passenger']?>
                                            </div>
                                            <?php }?>

                                            <?php if(!empty($vehicle['price'])){?>
                                            <div class="col-12 pt-2">
                                                <i class="fa fa-tag ico-cus2"></i>
                                                <b>Start From: </b>
                                                <?php echo $vehicle['price']?>
                                            </div>
                                            <?php }?>

                                            


                                            <div class="d-inline pt-4 pl-3">
                                                <div class="fb-share">
                                                <? /*!-- Your share button code -->
                                                <div class="fb-share-button" 
                                                data-href="https://kiffahborneo.com.my/vehicle_details/<?php echo $str_convert->to_url($vehicle['vehicle'])?>">
                                                </div>*/?>
                                                <div class="fb-share-button" data-href="https://kiffahborneo.com.my/vehicle_details/<?php echo $str_convert->to_url($vehicle['vehicle'])?>" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                                                </div>
                                                
                                            </div>


                                            <?php /*if(!empty($vehicle['price'])){?>
                                            <div class="col-12 pt-4 mt-0 pt-md-5 mt-md-5" style="font-size:30px;">
                                                <b><?php echo $vehicle['price']?></b>
                                            </div>
                                            <?php }*/?>


                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pt-5">
                        
                            <div class="col-12 col-md-7 p-4">
                                <?php 
                                $vehicle['full_description'] = str_replace(array('../../', '<img'), array(ROOT, '<img class="img-fluid"'), $vehicle['full_description']);                
                                echo $vehicle['full_description'];                            
                                ?>
                                <?php //echo $vehicle['popular']?>

                                <div class="row">
                                    <div class="col d-none d-md-block">
                                        <?php include 'related.php';?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 offset-md-1">
                                <?php include 'message.php';?>                            
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col d-md-none p-5">
                            <?php include 'related.php';?>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">            
            <?php include 'footer.php';?>
        </div>
    </div>
</body>
</html>
