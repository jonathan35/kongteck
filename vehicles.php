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

        <div class="row">
            <div class="col-12 p-5 pb-5 pt-5 mt-4">
                <div class="row">
                    <div class="cat-trigger d-sm-none" onclick="$('.category-panel-outter').fadeToggle();"><i class="fa fa-search" aria-hidden="true"></i></div>

                    <!--$('.category-panel-outter').toggleClass('category-active');-->

                    <div class="col-12 col-md-3 category-panel-outter">
                        <div class="row">
                            <div class="col-12 p-0 pr-md-5 category-panel">
                                <?php include 'vehicle_filter.php';?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="vehicle_list">
                            <?php include 'vehicle_list.php';?>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <div class="row">
        <div class="col-12">
            <div class="row"><div class="col-12"><br><br><br></div></div>
            <div class="row"><div class="col-12 d-none d-md-inline"><br><br></div></div>

            <? include 'footer.php';?>        
        </div>
    </div>
</body>
</html>
