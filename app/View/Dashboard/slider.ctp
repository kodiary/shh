<h1>Slider Manager</h1>
<a href="<?php echo $this->webroot; ?>dashboard/addSlider" class="btn btn-success">Add Slider</a>
<br />
<?php 
if($content)
{

    $i=0;
    foreach($content as $c)
    {
        $i++;
?>
<div class="list" style="width: 690px;">
<div class="image"><img src="<?php echo $this->webroot.'banners/'.$c['Slider']['image']?>" /></div>
<div class="caption"><?php echo $c['Slider']['caption'];?></div>
<div class="action"><a href="<?php echo $this->webroot; ?>dashboard/editSlider/<?php echo $c['Slider']['id'];?>" class="btn btn-info">Edit</a> <a href="<?php echo $this->webroot; ?>dashboard/deleteSlider/<?php echo $c['Slider']['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a></div>
<div class="clear"></div>
</div>
<?php
    }
}
else
echo "No Slider to Display";
?>