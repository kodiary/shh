<div class="main clearfix">
<div class="container">
<div class="row service-box margin-bottom-40"  style="margin:20px 0;">
<div class="col-md-12 col-sm-12 col-xs-12">
                        
                        <h2>Media<small> <?php echo $slug;if($year){?>  <?php echo $year; }?></small></h2>
                        <div class="description">
                                    <?php
                                    foreach($media as $p)
                                    {
                                        ?>
                                        <div class="medialist" style="margin-bottom: 10px;">
                                            <?php
                                            if($slug!='Audio-Visual' && $slug!='Broadcasting'){
                                            ?>
                                            <div style="padding:12px 10px;background:#eee;border-radius:10px;">
                                            <div class="mtitle left col-md-11 col-sm-10 col-xs-12">
                                            <strong><?php echo $p['Media']['title'];?></strong><br />
                                            <span style="font-size: 12px;color:#578ebe;">
                                            Uploaded on: <?php echo $p['Media']['added_on'];?></span></div>
                                            <div class="action right col-md-1 col-sm-2 col-xs-12"><a href="javascript:void(0)" class="open-popup-link btn media"  onclick="$('.popover').html('<iframe src='http://docs.google.com/gview?url=<?php echo $this->Html->url('/', true);?>/doc/'.<?php echo $p['Media']['file'];?>.'&embedded=true' style='width:600px; height:500px;' frameborder='0'></iframe>')" >View</a></div>
                                            <div class="clearfix"></div>
                                            </div>
                                            <?php }
                                            else
                                            {
                                                ?>
                                                <div style="padding:12px 10px;background:#e5e5e5;border-radius:10px;">
                                                <div class="mtitle left" style="padding:5px 10px;background:#eee;border-radius:10px;"><strong><?php echo $p['Media']['title'];?></strong><br /><span style="font-size: 12px;color:#578ebe;">Uploaded on: <?php echo $p['Media']['added_on'];?></span></div><div class="action right"><a class="btn" href="javascript:void(0)" class="open-popup-link" onclick="$('.popover').load('<?php echo $this->webroot;?>pages/player/<?php echo $p['Media']['id'];?>');$('.popover').attr('title','<?php echo $p['Media']['title'];?>');$('.popover').dialog({modal:true,width:<?php if($p['Media']['file']){?>355<?php }else{?>555<?php }?>});">View</a></div>
                                                <div class="clearfix"></div>
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
                               
                               </div>
                               </div></div>
                                <style>
       
	</style>