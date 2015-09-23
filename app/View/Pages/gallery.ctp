<h1 class="title"><span>Activities Gallery  <?php if($year){?> > <?php echo $year; }?></span></h1>
<?php
foreach($image as $img)
{
    ?>
    <div class="left gallery"><img src="<?php echo $this->webroot;?>doc/<?php echo $img['Image']['file'];?>" /></div>
    <?php
    
}
?>
<style>
.gallery{width:230px;float:left;margin-left: 6px;}
.gallery img{max-width:100%;}
</style>