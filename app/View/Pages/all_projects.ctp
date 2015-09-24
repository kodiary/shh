<div class="main clearfix">
<div class="container">
<div class="row service-box margin-bottom-40">

<h2>All Projects</h2>
        <p>&nbsp;</p>
        <div class="content-page">
<div class="row">
<div class="description">
        <?php
        foreach($projects as $up)
        {
            ?>
            <div class="events">
               
                
                <div class="col-md-2 col-sm-4" style="padding-top: 7px;">
                    <div class="">
                        <div class="item">
                            <img style="max-width: 100%;" src="<?php echo $this->webroot;?>doc/<?php echo $up['Project']['image'];?>" />
                        </div>
                    </div>
                </div>


                <div class="col-md-10 col-sm-8">
                    <h2 style="padding-top: 0;">
                        <a href="<?php echo $this->webroot;?>pages/updates/<?php echo $up['Project']['slug'];?>"><?php echo $up['Project']['title'];?></a>
                    </h2>
                    <ul class="blog-info" style="margin: 0 0 12px;">
                        <li>
                            <i class="fa fa-calendar"></i>
                            <?php echo $up['Project']['added_on'];?>
                        </li>
                    </ul>
                    <p>
                        <em>
                            <strong>
                                <?php echo substr(strip_tags($up['Project']['description']),0,150).'...' ?>
                            
                            </strong>
                        </em>
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
