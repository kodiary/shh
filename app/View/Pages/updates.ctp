<div class="main clearfix">
<div class="container">
<div class="row service-box margin-bottom-40">
<h1 class="title col-md-12 col-sm-12 col-xs-12">Event <small><?php echo $pages['Update']['title'];?></small></h1> 

<div class="col-md-4 col-sm-4 col-xs-12"><img src="<?php echo $this->webroot;?>doc/<?php echo $pages['Update']['image'];?>" /></div>

<div class="col-md-8 col-sm-8 col-xs-12">

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
<?php echo $pages['Update']['added_on'];?>
</li>
</ul>

<?php echo $pages['Update']['description'];?></div>
</div></div></div>