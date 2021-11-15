<?php 

if(!empty($_GET['ty'])){//This is vehicle type
    $type_name = $str_convert->to_query($_GET['ty']);
    $selected_type = sql_read('select * from vehicle_type where vehicle_type like ? and status=1 limit 1', 's', '%'.$type_name.'%');
}

if(!empty($_GET['cat'])){//This is category
    $cat_name = $str_convert->to_query($_GET['cat']);
    $selected_category = sql_read('select * from category where category like ?  and status=1 limit 1', 's', '%'.$cat_name.'%');
}


$categories = sql_read("select * from category where status=1 order by position asc");

if($selected_category[0]['id']){
    $categories = array_merge($selected_category, $categories);
}    
?>

<div class="row">
    <div class="col-12 pl-4 pl-md-3 p-md-3" style="font-size:30px;">FOR RENT</div>
</div>

<?php foreach($categories as $category){?>
    <div class="row">
        <div class="col-12">                                            
            <a href="<?php echo ROOT?>vehicles/<?php echo $str_convert->to_url($category['category'])?>" style="text-decoration: none;"><div class="filter_menu <?php if($selected_category['id'] == $category['id']) echo 'active_filter_menu';?>">
                    <?php echo $category['category']?>
            </div></a>
        </div>
    </div>    
<?php }?>    
