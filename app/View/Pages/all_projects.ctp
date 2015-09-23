<h1 class="title"><span>All Projects></span></h1>
<div class="description">
        <?php
        foreach($projects as $pro)
        {
            ?>
            <div class="updates" style="border-bottom: 1px dotted green;padding:15px 0;">
                <h2 style="font-size: 16px;font-weight: bold;color:#999;padding-bottom:5px;"><?php echo $pro['Project']['title'];?></h2>
                <div class="img left" style="border: 2px solid #e5e5e5;border-radius:5px;"><img src="<?php echo $this->webroot;?>doc/<?php echo $pro['Project']['image'];?>" width="100px" /></div>
                <div class="texts left margin_left10" style="width: 550px;"><?php echo substr($pro['Project']['description'],0,150).'...' ?></div>
                <div class="clear"></div>
                <a href="<?php echo $this->webroot;?>pages/projects/<?php echo $pro['Project']['slug'];?>" class="viewmore" style="display: block;float:right;padding:5px 10px;text-decoration: none;color:#FFF;background:green;border-radius:4px;">View More</a>
                <div class="clear"></div>
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
