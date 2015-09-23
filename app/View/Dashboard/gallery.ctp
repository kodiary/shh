

<h1>Gallery</h1>
<a class="btn btn-success addcat" href="javascript:void(0)">Add Gallery Category</a>
    <div class="category-add" style="display:none;">
    <form id="myform" method="post" action="/shh/dashboard/addCategory" novalidate="novalidate">
<input class="required valid" type="text"  name="category-name" placeholder="Enter Category Name" />
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
    $sub = $this->requestAction('/dashboard/getSub/'.$id);
 ?>
<div class="list"><div class="number"><?php echo $i;?>.</div><div class="title"><?php echo $v['Gallerycats']['title']?></div><div class="action"><a href="javascript:void(0)" class="btn btn-success add<?php echo $i;?>">Add</a><a href="javascript:void(0)" class="btn btn-danger">Delete</a></div><div class="clear"></div>
<div class="category-sub" style="display:none;">
    <form id="myform" method="post" action="/shh/dashboard/addCategorySub" novalidate="novalidate">
<input class="required valid" type="text"  name="category-sub" placeholder="Enter Category-sub" />
<input type="submit" class="btn btn-primary" value="Add Sub-Category"/>
</form>
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
<div class="list"><div class="number"><?php echo $j;?>.</div><div class="title"><?php echo $s['Gallerycats']['title']?></div><div class="action"><a href="javascript:void(0)" class="btn btn-success add<?php echo $j;?>">Add</a><a href="javascript:void(0)" class="btn btn-danger">Delete</a></div><div class="clear"></div></div>
 <div class="category-sub" style="display:none;">
    <form id="myform" method="post" action="/shh/dashboard/addCategorySub" novalidate="novalidate">
<input class="required valid" type="text"  name="category-sub" placeholder="Enter Category-sub" />
<input type="submit" class="btn btn-primary" value="Add Sub-Category"/>
</form>
</div>

<ul style="list-style-type:none;">
<?php 

    $k=0;
    foreach($image as $img)
{ 
$k++;

?>
<li>
<div class="list"><div class="number"><?php echo $k;?>.</div><div class="title"><?php echo $img['Galleryimgs']['title']?></div><div class="action"><a href="javascript:void(0)" class="btn btn-danger">Delete</a></div><div class="clear"></div></div>
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
    $(".click").click(function(){
        $(this)
    })
});
</script>