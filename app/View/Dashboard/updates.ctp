<h1>Updates Manager</h1>

<a href="<?php echo $this->webroot;?>dashboard/addUpdate" class="btn btn-success">Add Update</a>

<?php 
if($updates)
{

    $i=0;
    foreach($updates as $c)
    {
        $i++;
?>
<div class="list"><div class="number"><?php echo $i;?>.</div><div class="title"><?php echo $c['Update']['title']?></div><div class="action"><a href="<?php echo $this->webroot; ?>dashboard/editUpdate/<?php echo $c['Update']['id'];?>" class="btn btn-info">Edit</a> <a href="<?php echo $this->webroot; ?>dashboard/deleteUpdate/<?php echo $c['Update']['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a></div><div class="clear"></div></div>
<?php
    }
}
else
echo "No Updates to Display";
?>