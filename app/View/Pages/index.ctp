<div class="container">
        <!-- BEGIN SERVICE BOX -->   
        <div class="row service-box service-none margin-bottom-40">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <h2>Portfolio</h2>
        <div class="row mix-grid thumbnails">
        <?php  foreach ($category as $cat)
                {
                      $randimg = $this->requestAction('/Pages/getImg/'.$cat['Gallerycat']['id']);
                    //$randimg = $this->requestAction('/pages/getImg/'.$cat['Gallerycat']['id']);
                    ?>
            <div class="col-md-3 col-sm-3 col-xs-12 mix category_1 mix_all" style="display: block; opacity: 1; ">
                <div class="mix-inner">
                
                    <a href="<?php echo $this->webroot; ?>pages/catDetail/<?php echo $cat['Gallerycat']['id']; ?>">
                    
                    
                    <img class="img-responsive" src="<?php echo $this->webroot;?>profile_resize/<?php echo $randimg; ?>" alt="">
                      
                      <h3><?php echo $cat['Gallerycat']['title']; ?></h3>
                      </a>
                </div>
            </div>
            <?php
                }
                
                ?>
            
        </div>
        </div>
        </div>        <!-- END SERVICE BOX -->
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="row quote-v1 margin-bottom-30">
    <div class="col-md-9 col-sm-9 col-xs-12">
    <span>Latest Events</span>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-12 text-right">
    <a class="btn-transparent" href="<?php echo $this->webroot; ?>event">View All</a>
    </div>
    </div>
        <p>&nbsp;</p>
        <div class="content-page">
        <div class="row">
        <?php
                foreach($updates as $up)
                {
                    ?>
                    
                    <div class="events col-md-12 col-sm-12 col-xs-12">
            
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-12" style="padding-top: 7px;">
                                <div class="item">
                                <img src="<?php echo $this->webroot;?>doc/thumb/<?php echo $up['Update']['image'];?>" alt="" style="max-width: 100%;">
                                </div>            
                        </div>
                    
                        <div class="col-md-10 col-sm-8 col-xs-12">
                            <h2 style="padding-top: 0;">
                            <a href="<?php echo $this->webroot;?>pages/updates/<?php echo $up['Update']['slug'];?>"><?php echo $up['Update']['title'];?></a>
                            </h2>
                            <ul class="blog-info" style="margin: 0 0 12px;">
                                <li>
                                    <i class="fa fa-calendar"></i>
                                    <?php echo $up['Update']['added_on'];?>
                                </li>
                                
                            </ul>
                            <?php echo substr(strip_tags($up['Update']['description']),0,150).'...' ?> 
                            <a class="more" href="<?php echo $this->webroot;?>pages/updates/<?php echo $up['Update']['slug'];?>">Read more </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    </div>
                    
                    <?php
                }
                ?>     
        </div>
        </div>
        
        <!-- BEGIN BLOCKQUOTE BLOCK -->   
        <div class="row quote-v1 margin-bottom-30">
          <div class="col-md-9 col-sm-9 col-xs-12">
            <span>Our Projects - Help us &amp; launch &amp; these projects</span>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 text-right">
            <a class="btn-transparent" href="<?php echo $this->webroot; ?>project">View All</a>
          </div>
        </div>
        <!-- END BLOCKQUOTE BLOCK -->

        <!-- BEGIN RECENT WORKS -->
        <div class="row recent-work margin-bottom-40">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <h2><a href="portfolio.html">Upcoming projects</a></h2>
            <p>Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde voluptatem. Sed unde omnis iste natus error sit voluptatem.</p>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="owl-carousel owl-carousel3">
                <?php foreach($projects as $pro){?>
              <div class="recent-work-item">
                <em>
                  <img src="<?php echo $this->webroot;?>doc/<?php echo $pro['Project']['image'];?>" alt="Amazing Project" class="img-responsive">
                  <a href="<?php echo $this->webroot;?>Pages/projects/<?php echo $pro['Project']['slug'] ; ?>"><i class="fa fa-link"></i></a>
                  <a href="<?php echo $this->webroot;?>doc/<?php echo $pro['Project']['image'];?>" class="fancybox-button" title="Project Name #1" data-rel="fancybox-button"><i class="fa fa-search"></i></a>
                </em>
                <a class="recent-work-description" href="#">
                  <strong><?php echo $pro['Project']['title'];?></strong>
                </a>
              </div>
                <?php } ?>
                
            </div>       
          </div>
        <!-- END RECENT WORKS -->

        <!-- BEGIN TABS AND TESTIMONIALS -->
        
        
      </div>
</div>
