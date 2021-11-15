<style>
.sp-block {width:24.6%;}
.ap_rounded { border-radius:50%; background-color:#444; color:white; font-size:20px; padding:3px; width:76px; height:76px; margin:0 auto;}
.ap_rounded > i { margin:11px auto; color:white; background-position:center; background-size:contain; background-repeat:no-repeat;}
.ap_rdhr {width:100%; text-align:center; text-decoration:none !important; padding-top:40px;}
.ap_rdhr:hover .ap_rounded, .ap_roundActive { background-color:#961f1d;}

.ap_rdhr:hover { color:#961f1d;}
.ap_text {width:100%; padding:14px 0 14px 0; font-size:18px; color:#444;}
.ap_text { border-bottom:3px solid #EFEFEF; }
.ap_rdhr:hover .ap_text, .ap_textActive {color:#961f1d; border-bottom:3px solid #961f1d;}
.ap_desc {padding-top:20px;}
.ap_brief { padding:24px 20px 50px 20px; text-align:center;}
/*#ap_brief1, #ap_brief2, #ap_brief3, #ap_brief4 { padding:24px; text-align:center;}*/
</style>


<div class="row">
    <div class="col-12" style="padding-top:60px; padding-bottom:120px; ">
    
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center pt-4" style="font-size:18px; padding-bottom:30px;">
                <div class="h1"><span>OUR SERVICES FOR YOU</span></div>
                <span style="font-weight:normal;">Regional support with local expertise</span>
            </div>
        </div>
        <div class="row nopadding">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nopadding sp-block" id="sp_r1">
                <div class="ap_rdhr">
                    <div class="ap_rounded ap_roundActive" id="ap_roundActive1" style="padding-top:1px; ">
                        <i style="background-image: url(<?php echo ROOT?>photo/real-estate.svg); display: block; width:66%; height:66%;"></i>
                    </div>
                    <div class="ap_text ap_textActive" id="apTitle1">
                        Car rental
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nopadding sp-block" id="sp_r2">
                <div class="ap_rdhr">
                    <div class="ap_rounded" id="ap_roundActive2">
                        <i style="background-image: url(<?php echo ROOT?>photo/tour.svg); display: block; width:66%; height:66%;"></i>
                    </div>
                    <div class="ap_text" id="apTitle2">
                    Tours      
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nopadding sp-block" id="sp_r3">
                <div class="ap_rdhr">
                    <div class="ap_rounded" id="ap_roundActive3" style="padding-top:1px;">
                        <i style="background-image: url(<?php echo ROOT?>photo/car.svg); display: block;width:84%; height:84%;"></i>
                    </div>
                    <div class="ap_text" id="apTitle3">
                        Used car          
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 nopadding sp-block" id="sp_r4">
                <div class="ap_rdhr">
                    <div class="ap_rounded" id="ap_roundActive4" style="padding-top:2px;">
                        <i style="background-image: url(<?php echo ROOT?>photo/chauffeur.svg); display: block; width:66%; height:66%;"></i>
                    </div>
                    <div class="ap_text" id="apTitle4">
                    Chauffeur driven      
                    </div>
                </div>
            </div>
        </div>
        <div class="row ap_desc" id="ap_desc1" style="display: flex; font-size:95%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center p-4">
                <h3 style="font-weight:100; color:#961F1D;">At your fingertips booking</h3>
                    Start your reservation by entering your desired date and time or the "pick-up location" and choose from range of our RG cars range and brands, available cars in different locations, and rates!
            </div>
        </div>
        <div class="row ap_desc" id="ap_desc2" style="display: none; font-size:95%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center p-4">
                <h3 style="font-weight:100; color:#961F1D;">Welcome to Sarawak</h3>
                    Situated in Malaysian Borneo, Sarawak is the largest state in the country. Its colourful history under the rule of the White Rajahs, rich tapestry of cultures and superb natural attractions make it a mesmerising holiday destination. Many heritage buildings in Kuching, the capital city, reflect its rich past. An eco-adventure land, Sarawak is great for trekking, caving, mountain climbing, kayaking, biking, rafting and diving.<br><br>
                    The state has a wide range of accommodations to suit all budgets and preferences. There are international-standard beach resorts, jungle resorts, star-rated hotels as well as longhouse-style resorts. Budget accommodation is widely available. Take your pick from the variety of cuisine, from local delicacies to Continental fare.

            </div>
        </div>
        <div class="row ap_desc" id="ap_desc3" style="display: none; font-size:95%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center p-4">
                <h3 style="font-weight:100; color:#961F1D;">Anytime flexi</h3>
                    We offer long term lease where we can package free replacement, maintenance and our ' Rent it, Love it, Buy it' offer.

            </div>
        </div>
        <div class="row ap_desc" id="ap_desc4" style="display: none; font-size:95%;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center p-4">
                <h3 style="font-weight:100; color:#961F1D;">You are special to us</h3>
                Using the latest luxury cars like Mercedes, Lexus and Vellfire<br><br>
                (local town or long distance drive).

            </div>
        </div>

    </div>
</div>


<script>

$('#ap_desc2').hide();
$('#ap_desc3').hide();
$('#ap_desc4').hide();
$('#ap_brief1').hide();
$('#ap_brief2').hide();
$('#ap_brief3').hide();
$('#ap_brief4').hide();

function shwAp1(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#apTitle1').addClass('ap_textActive');
    $('#ap_roundActive1').addClass('ap_roundActive');
    $('#ap_desc1').show();    
}
function shwAp2(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#apTitle2').addClass('ap_textActive');
    $('#ap_roundActive2').addClass('ap_roundActive'); 
    $('#ap_desc2').show();
}
function shwAp3(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#apTitle3').addClass('ap_textActive');
    $('#ap_roundActive3').addClass('ap_roundActive');
    $('#ap_desc3').show();  
}
function shwAp4(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#apTitle4').addClass('ap_textActive');
    $('#ap_roundActive4').addClass('ap_roundActive'); 
    $('#ap_desc4').show();
}

$('#sp_r1').hover(function(){shwAp1();});
$('#sp_r2').hover(function(){shwAp2();});
$('#sp_r3').hover(function(){shwAp3();});
$('#sp_r4').hover(function(){shwAp4();});

$('#sp_r1').click(function(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('#apTitle1').addClass('ap_textActive');
    $('#ap_roundActive1').addClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#ap_desc1').slideDown();
});
$('#sp_r2').click(function(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('#apTitle2').addClass('ap_textActive');
    $('#ap_roundActive2').addClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#ap_desc2').slideDown();
});
$('#sp_r3').click(function(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('#apTitle3').addClass('ap_textActive');
    $('#ap_roundActive3').addClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#ap_desc3').slideDown();
});
$('#sp_r4').click(function(){
    $('.ap_textActive').removeClass('ap_textActive');
    $('.ap_roundActive').removeClass('ap_roundActive');
    $('#apTitle4').addClass('ap_textActive');
    $('#ap_roundActive4').addClass('ap_roundActive');
    $('.ap_desc').hide();
    $('#ap_desc4').slideDown();
});

</script>