<div class="main clearfix">
<div class="container">
<div class="row service-box margin-bottom-40">

<h2>All Events</h2>
        <p>&nbsp;</p>
        <div class="content-page">
<div class="row">
<div class="description">
        <?php
        foreach($updates as $up)
        {
            ?>
            <div class="events">
               
                
                <div class="col-md-2 col-sm-4 col-xs-12" style="padding-top: 7px;">
                        <div class="item">
                            <img style="max-width: 100%;" src="<?php echo $this->webroot;?>doc/<?php echo $up['Update']['image'];?>" />
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
                    <p>
                                <?php echo substr(strip_tags($up['Update']['description']),0,150).'...' ?>
                    
                    </p>
                </div>
                <div class="clearfix"></div>
                
                
                
                
            </div>
            <?php
        }
        ?>
<div class="pagination pagination-large">
    <ul class="pagination">
            <?php
                echo $this->Paginator->first(__('<<'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->prev(__('<'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));         
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('>'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->last(__('>>'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            
                ?>
        </ul>
    </div>        
</div>
   </div>        
</div>   </div>  
</div>   </div>       

