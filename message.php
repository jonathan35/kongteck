<?php 

if(!empty($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
    if(empty($_POST['g-recaptcha-response'])){
        $_SESSION['session_msg'] = '<div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close" 
        style="position:relative; top:-2px;">×</a>
        Please fill in captcha.</div>';
    }else{

        $to      = 'kongteckcarrental@gmail.com';
        $subject = 'Car Booking';
        $headers[] = 'From: kongteck.com.my';
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $message = '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$subject.'</title>
        </head>
        <body>
            Dear Staff,
            '.$_POST['driver_name'].' sent a message to you from kongteck.com.my. You can login CMS to view or view below:<br><br>   
            Pick-up Location: '.$_POST['pickup'].'<br><br>
            Drop-off Location: '.$_POST['dropoff'].'<br><br>         
            Driver Name: '.$_POST['driver_name'].'<br><br>
            Vehicle: '.$_POST['vehicle'].'<br><br>
            Licence: '.$_POST['licence'].'<br><br>
            Message: '.$_POST['message'].'<br><br>
        </body>
        </html>';
        


        
        unset($_POST['submit'], $_POST['g-recaptcha-response']);
        $_POST['status'] = 'New';
        $_POST['date'] = date('Y-m-d H:i:s');
        if(sql_save('message', $_POST)){

            $_SESSION['session_msg'] = '<div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close" 
            style="position:relative; top:-2px;">×</a>
            Thank you for sent us the message, we will reply you through email soon.</div>';

            mail($to, $subject, $message, implode("\r\n", $headers));
        }
        
    }
}


?>

<div class="row">
    <div class="col-12 pl-4">
        <h2>Book Now</h2>
    </div>

    <div class="col-12" style="border-top:none;">
        <form action="" class="form-group" method="post">
            <div class="row">
                <div class="col-12 p-2 pl-4 pr-4">
                    <input type="text" name="vehicle" value="<?php echo $vehicle['vehicle'];?>" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-2 pl-4 pr-4">
                    <b>Pick-up Location</b>
                    <?php $rgs = sql_read("select id, region from region where status=?", 'i', 1);?>
                    <select name="pickup" placeholder="Pickup Location" class="form-control" required>
                        <?php foreach($rgs as $rg){
                        $ls = sql_read("select location from location where status=? and region =?", 'ii', array(1, $rg['id']));?>
                        <optgroup label="<?php echo $rg['region']?>" style="font-family:arial; font-size:90%;">
                            <?php foreach($ls as $l){?>
                            <option value="<?php echo $l['location']?>">
                                <?php echo $l['location']?>
                            </option>
                            <?php }?>
                        </optgroup>
                        <?php }?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-2 pl-4 pr-4">
                    <b>Drop-off Location</b>
                    <?php $rgs = sql_read("select id, region from region where status=?", 'i', 1);?>
                    <select name="dropoff" placeholder="Pickup Location" class="form-control" required>
                        <?php foreach($rgs as $rg){
                        $ls = sql_read("select location from location where status=? and region =?", 'ii', array(1, $rg['id']));?>
                        <optgroup label="<?php echo $rg['region']?>" style="font-family:arial; font-size:90%;">
                            
                            <?php foreach($ls as $l){?>
                            <option value="<?php echo $l['location']?>">
                                <?php echo $l['location']?>
                            </option>
                            <?php }?>
                        </optgroup>
                        <?php }?>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-12 p-2 pl-4 pr-4">
                    <b>Full Name</b>
                    <input type="text" name="driver_name" placeholder="Driver’s name" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-2 pl-4 pr-4">
                    <b>Driving License No.</b>
                    <input type="text" name="licence" placeholder="Driving license no." class="form-control" required>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 p-2 pl-4 pr-4">
                    <b>Additional Information</b>
                    <textarea type="text" name="message" placeholder="EXTRAS & FREE -  Extras Required (Baby seat, Incar USB chargeable, Phone holder, Driver)" class="form-control" required style="height:220px;"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-2 pl-4 pr-4">
                    <div id="recaptcha" title="no"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 p-2 pl-4 pr-4">
                    <input type="submit" name="submit" value="SEND MESSAGE" class="btn btn-lg btn-primary pl-4 pr-4 btn-tour-enquiry" style="border:none;">
                </div>
            </div>
        </form>


    </div>                                         
</div>