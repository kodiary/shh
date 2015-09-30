<h1>Gallery</h1>
<a class="btn btn-success addcat" href="javascript:void(0)">Add Gallery Category</a>
    <div class="category-add" style="display:none;">
    <form id="myform" method="post" action="/shh/dashboard/addCategory" novalidate="novalidate">
<input class="required valid" type="text"  name="category-name" placeholder="Enter Category Name" required=""/>
<input type="submit" class="btn btn-primary" value="Add Category"/>
</form>
</div> 

<div class="category-list">

<?php 
if($val){
$i=0;
foreach($val as $v){
    $i++;
    $id=$v['Gallerycats']['id'];
    $parent=$v['Gallerycats']['parent_id'];
    $sub = $this->requestAction('/dashboard/getSub/'.$id);
 ?>
<div class="list">
    <div class="wrap">
        <div class="number"><?php echo $i;?>.</div>
        <div class="title"><?php echo $v['Gallerycats']['title']?></div>
        <div class="action" >
            <a href="javascript:void(0)"  class="btn btn-success add">Add Sub-Category</a><a href="<?php echo $this->webroot;?>dashboard/deletecat/<?php echo $id;?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a>
        </div>
        <div class="clear"></div>
        <div class="cat-sub" style="display:none;">
            <form id="myform" method="post" action="/shh/dashboard/addCategorySub/<?php echo $id;?>" novalidate="novalidate">
        <input class="required valid" type="text"  name="category-sub" placeholder="Enter Category-sub" required=""/>
        <input type="submit" class="btn btn-primary" value="Save"/>
        </form>
        </div>
    </div>
 
<ul style="list-style-type:none;">
<?php
$j=0;
foreach($sub as $s)
{ 
$j++;
 $sub_id=$s['Gallerycats']['id'];
 $image=$this->requestAction('/dashboard/getImg/'.$sub_id);

?><li>
<div class="list"><div class="number"><?php echo $j;?>.</div>
<div class="title"><?php echo $s['Gallerycats']['title']?></div>
<div class="action"><a href="javascript:void(0)" class="btn btn-success addimg">Add Category-Img</a><a href="<?php echo $this->webroot;?>dashboard/deletesubcategory/<?php echo  $sub_id;?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a></div><div class="clear"></div>
 <div class="cat-img" style="display:none;">
<form id="myform" method="post" action="/shh/dashboard/addCategoryImg/<?php echo $sub_id;?>" novalidate="novalidate" enctype="multipart/form-data">
<input class="required valid" type="text"  name="category-img-title" placeholder="Enter image title" required=""/><br/>
<input class="required valid" type="file"  name="image" required="" />
<input type="submit" class="btn btn-primary" value="save"/>
</form>
</div>
</div>

<ul style="list-style-type:none;">
<?php 

    $k=0;
    foreach($image as $img)
{ 
$k++;
$iid=$img['Galleryimgs']['id'];

?>
<li>
<div class="list1"><div class="number"><?php echo $k;?>.</div>
<div class="title"><?php echo $img['Galleryimgs']['title']?></div>
<div><img src="<?php echo $this->webroot.'profile_resize/'.$img['Galleryimgs']['img']?>" height="50px" width="50px" /></div>
<div class="action">
<a href="<?php echo $this->webroot;?>dashboard/deleteImage/<?php echo $iid;?>" onclick="return confirm('Are you sure you want to delete this item?');"class="btn btn-danger">Delete</a>
</div>
<div class="clear"></div>
</div>
</li>


<?php
}
?>
</ul>
</li>
  <?php  
}
?>
</ul>


</div>
 
<?php     
} 
}
?>
</div>



<script>

$(function(){
    $(".addcat").click(function(){
        $(".category-add").toggle("slow");
        
    });
    $(document.body).on('click','.add',function(){
        $(this).parent().parent().find('.cat-sub').toggle("slow");
     });
     $(document.body).on('click','.addimg',function(){
              $(this).parent().parent().find('.cat-img').toggle("slow");
     });
     
     
});
</script>