<h1 class="title"><span>Projects> <?php echo $pages['Project']['title'];?></span></h1>
<div style="padding: 10px 0;border-bottom:1px dotted green">
<div><img src="<?php echo $this->webroot;?>doc/<?php echo $pages['Project']['image'];?>" width="350" style="border:5px solid #f5f5f5;border-radius: 10px;" /></div>
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

<span style="color: green;"><?php echo $pages['Project']['added_on'];?></span><br /><br />
</div>
<?php echo $pages['Project']['description'];?></div>