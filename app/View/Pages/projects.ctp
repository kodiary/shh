<div class="main clearfix">
<div class="container">
<div class="row service-box margin-bottom-40">
<h2 ><span>Projects<small> <?php echo $pages['Project']['title'];?></small></h2>
<div class="col-md-6">
<div><img src="<?php echo $this->webroot;?>doc/<?php echo $pages['Project']['image'];?>" /></div>
</div>

<div class="col-md-6">
<div class="small" style="font-size: 13px;">
<?php
if($act)
{
    echo $act['Page']['title'];
    echo "<br/>";
}
?>
<ul class="blog-info" style="margin: 0 0 12px;">
<li>
<i class="fa fa-calendar"></i>
<?php echo $pages['Project']['added_on'];?>
</li>
</ul>

</div>
<?php echo $pages['Project']['description'];?></div>
</div></div></div>