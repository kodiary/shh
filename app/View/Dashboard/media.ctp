<h1>Media Manager</h1>

<a href="<?php echo $this->webroot;?>dashboard/addMedia" class="btn btn-success">Add Media</a>
<?php $mtype = $this->requestAction('/dashboard/getMediaType');?>
Filter By: <select onchange="window.location='<?php echo $this->webroot;?>dashboard/media/'+$(this).val();">
            <option value="">All</option>
            <option value="Print" <?php if($type == 'Print'){ ?> selected="selected" <?php } ?>>Print</option>
            <option value="Publication" <?php if($type == 'Publication'){ ?> selected="selected" <?php } ?>>Publication</option>
            <option value="Audio-Visual" <?php if($type == 'Audio-Visual'){ ?> selected="selected" <?php } ?>>Audio-Visual</option>
            <option value="Broadcasting" <?php if($type == 'Broadcasting'){ ?> selected="selected" <?php } ?>>Broadcasting</option>            
           </select>
<?php 
if($content)
{

    $i=0;
    foreach($content as $c)
    {
        $i++;
?>
<div class="list"><div class="number"><?php echo $i;?>.</div><div class="title"><?php echo $c['Media']['title']?></div><div class="action"><a href="<?php echo $this->webroot; ?>dashboard/editMedia/<?php echo $c['Media']['id'];?>" class="btn btn-info">Edit</a> <a href="<?php echo $this->webroot; ?>dashboard/deleteMedia/<?php echo $c['Media']['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a></div><div class="clear"></div></div>
<?php
    }
}
else
echo "No Media to Display";
?>
