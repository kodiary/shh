<div class="container">
    <div class="wrapper margin-bottom-40" style="margin:20px 0;">
        <h1 class="title"><span><?php echo $this->requestAction('/pages/getParent/'.$pages['Page']['slug']);?><?php echo $pages['Page']['title'];?></span></h1>
        <div class="description">
        <?php echo $pages['Page']['description'];?>
        
        </div>
    </div>
</div>

<!--
<h1 class="title"><span>Related Updates</span></h1>
<div class="description">
<?php
        if($acts)
        foreach($acts as $up)
        {
            ?>
            <div class="updates" style="border-bottom: 1px dotted green;padding:15px 0;">
                <h2 style="font-size: 16px;font-weight: bold;color:#999;padding-bottom:5px;"><?php echo $up['Update']['title'];?></h2>
                <div class="img left" style="border: 2px solid #e5e5e5;border-radius:5px;"><img src="<?php echo $this->webroot;?>doc/<?php echo $up['Update']['image'];?>" width="100px" /></div>
                <div class="texts left margin_left10" style="width: 550px;"><?php echo substr($up['Update']['description'],0,150).'...' ?></div>
                <div class="clear"></div>
                <a href="<?php echo $this->webroot;?>pages/updates/<?php echo $up['Update']['slug'];?>" class="viewmore" style="display: block;float:right;padding:5px 10px;text-decoration: none;color:#FFF;background:green;border-radius:4px;">View More</a>
                <div class="clear"></div>
            </div>
            <?php
        }
        ?>
        <div style="padding: 10px;"><a style="display: block;padding:7px 15px;text-decoration: none;color:#FFF;background:green;border-radius:4px;text-align:center;" href="<?php echo $this->webroot;?>pages/allUpdates">VIEW ALL</a></div>
</div>   -->     