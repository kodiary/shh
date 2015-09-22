<h1>Projects Manager</h1>

<a href="<?php echo $this->webroot;?>dashboard/addProject" class="btn btn-success">Add Project</a>

<?php 
if($projects)
{

    $i=0;
    foreach($projects as $c)
    {
        $i++;
?>
<div class="list"><div class="number"><?php echo $i;?>.</div><div class="title"><?php echo $c['Project']['title']?></div><div class="action"><a href="<?php echo $this->webroot; ?>dashboard/editProject/<?php echo $c['Project']['id'];?>" class="btn btn-info">Edit</a> <a href="<?php echo $this->webroot; ?>dashboard/deleteProject/<?php echo $c['Project']['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a></div><div class="clear"></div></div>
<?php
    }
}
else
echo "No Projects to Display";
?>