<div class="main clearfix">
    <div class="container">
        <div class="row service-box margin-bottom-40">
            <h2 class="title"><span>Activities Gallery  <?php if($year){?> > <?php echo $year; }?></span></h2>
            <div class="row mix-grid thumbnails">
                    <?php  foreach ($category as $cat)
                            {
                                  $randimg = $this->requestAction('/Pages/getImg/'.$cat['Gallerycat']['id']);
                                //$randimg = $this->requestAction('/pages/getImg/'.$cat['Gallerycat']['id']);
                                ?>
                        <div class="col-md-3 col-sm-4 col-xs-12 mix category_1 mix_all" style="display: block; opacity: 1; ">
                            <div class="mix-inner">
                            
                                <img class="img-responsive" src="<?php echo $this->webroot;?>galleryimgs/<?php echo $randimg; ?>" alt="">
                                 
                                <div class="mix-details">
                                    <h4><?php echo $cat['Gallerycat']['title']; ?></h4>
                                    <a class="mix-link" href="<?php $this->webroot; ?>Pages/catDetail/<?php echo $cat['Gallerycat']['id']  ?>">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="mix-preview fancybox-button" href="<?php echo $this->webroot;?>galleryimgs/<?php echo $randimg; ?>" title="Project Name" data-rel="fancybox-button">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                            
                            ?>
                        
             
             </div>
        </div>
    </div>
</div>