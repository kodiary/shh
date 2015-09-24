<div class="main clearfix">
<div class="container">
<div class="row service-box margin-bottom-40">
<h2 class="title"><span>Activities Gallery  <?php if($year){?> > <?php echo $year; }?></span></h2>
<div class="row mix-grid thumbnails">

<?php
foreach($image as $img)
{
    ?>
    <div style="display: block; opacity: 1; " class="col-md-3 col-sm-4 mix category_1 mix_all">
                <div class="mix-inner">
                    <img alt="" src="<?php echo $this->webroot;?>doc/<?php echo $img['Image']['file'];?>" />
                    <div class="mix-details">
                        <h4>Food distribution</h4>
                        <a class="mix-link">
                            <i class="fa fa-link"></i>
                        </a>
                        <a data-rel="fancybox-button" title="Project Name" href="<?php echo $this->webroot;?>doc/<?php echo $img['Image']['file'];?>" class="mix-preview fancybox-button">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
    
    
    
    <?php
    
}
?>
<style>
.gallery{width:230px;float:left;margin-left: 6px;}
.gallery img{max-width:100%;}
</style>
</div>
</div>
</div>
</div>