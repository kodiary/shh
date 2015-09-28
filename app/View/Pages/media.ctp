<div class="main clearfix">
<div class="container">
<div class="row service-box margin-bottom-40">
                        
                        <h2>Media ><small> <?php echo $slug;if($year){?>  <?php echo $year; }?></small></h2>
                        <div class="description">
                                    <?php
                                    foreach($media as $p)
                                    {
                                        ?>
                                        <div class="medialist" style="margin-bottom: 10px;">
                                            <?php
                                            if($slug!='Audio-Visual' && $slug!='Broadcasting'){
                                            ?>
                                            <div style="padding:5px 10px;background:#e5e5e5;border-radius:10px;">
                                            <div class="mtitle left" style="width: 480px;margin-right:15px;">
                                            <strong><?php echo $p['Media']['title'];?></strong><br />
                                            <span style="font-size: 12px;color:green;">
                                            Uploaded on: <?php echo $p['Media']['added_on'];?></span></div>
                                            <div class="action right"><a href="javascript:void(0)" class="open-popup-link btn media"  onclick="$('.popover').html('<iframe src='http://docs.google.com/gview?url=<?php echo $this->webroot;?>/doc/'.<?php echo $p['Media']['file'];?>.'&embedded=true' style='width:600px; height:500px;' frameborder='0'></iframe>')" >View</a></div>
                                            <div class="clear"></div>
                                            </div>
                                            <?php }
                                            else
                                            {
                                                ?>
                                                <div style="padding:5px 10px;background:#e5e5e5;border-radius:10px;">
                                                <div class="mtitle left" style="width: 480px;margin-right:15px;padding:5px 10px;background:#e5e5e5;border-radius:10px;"><strong><?php echo $p['Media']['title'];?></strong><br /><span style="font-size: 12px;color:green;">Uploaded on: <?php echo $p['Media']['added_on'];?></span></div><div class="action right"><a class="btn" href="javascript:void(0)" class="open-popup-link" onclick="$('.popover').load('<?php echo $this->webroot;?>pages/player/<?php echo $p['Media']['id'];?>');$('.popover').attr('title','<?php echo $p['Media']['title'];?>');$('.popover').dialog({modal:true,width:<?php if($p['Media']['file']){?>355<?php }else{?>555<?php }?>});">View</a></div>
                                                <div class="clear"></div>
                                                </div>
                                                <?php
                                            }
                                            ?> 
                                        </div>
                                        <?php
                                        
                                    }
                                    ?>
                                </div>
                               </div>
                               <div  class="popover"  title="test"> 
                                
                                </div>
                               
                               
                               </div></div>
                                <style>
       
	</style>