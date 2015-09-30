<div class="main clearfix">
    <div class="container">
        <div class="row service-box margin-bottom-40">
            <div class="row mix-grid thumbnails">
                    <?php 
                foreach ($category as $cat)
                    {
                        ?><div><?php
                        echo "<h1>".$cat['Gallerycat']['title']."</h1>" ;
                            $q= $this->requestAction('/Pages/getImage/'.$cat['Gallerycat']['id']);
                            ?>
                
                            
                            <?php
                                foreach($q as $a)
                                    {
                                        
                                 ?>
                                 
                                            <div class="col-md-3 col-sm-4 col-xs-12 mix category_1 mix_all" style="display: block; opacity: 1; ">
                            <div class="mix-inner">
                                    <img  src="<?php echo $this->webroot; ?>profile_resize/<?php echo $a['Galleryimg']['img']; ?>" width="250px" height="auto"/>
                                      <div class="mix-details">
                                    <h4><?php echo $cat['Gallerycat']['title']; ?></h4>
                                    <a class="mix-link" >
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <a class="mix-preview fancybox-button" href="<?php echo $this->webroot;?>profile_resize1/<?php echo $a['Galleryimg']['img']; ?>" title="<?php echo $a['Galleryimg']['title']; ?>" data-rel="fancybox-button">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                                
                                <?php 
                                    }
                                    ?>
                                    <div class="clearfix"></div>
                                    
                              </div>   
                          
                        <?php
                            }
                            
                            ?>
                        
             
             </div>
        </div>
    </div>
</div>            
             