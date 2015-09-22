<h1 class="title"><span>Updates > <?php echo $pages['Update']['title'];?></span></h1>
<div style="padding: 10px 0;border-bottom:1px dotted green">
<div><img src="<?php echo $this->webroot;?>doc/<?php echo $pages['Update']['image'];?>" width="350" style="border:5px solid #f5f5f5;border-radius: 10px;" /></div>
</div>

<div class="description">
<div class="small" style="font-size: 13px;">
<?php
if($act)
{
    echo $act['Page']['title'];
    echo "<br/>";
}
?>

<span style="color: green;"><?php echo $pages['Update']['added_on'];?></span><br /><br />
</div>
<?php echo $pages['Update']['description'];?></div>