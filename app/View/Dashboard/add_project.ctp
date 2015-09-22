
<h1>Add new project</h1>
<form action="" method="post" id="myform" enctype="multipart/form-data">
<label>Title</label>
<input type="text" value="" name="title" class="required" />
<label>Choose Activity</label>
<select name="act_id">
    <option value="">Choose Activity</option>
    <?php
    if($acts)
    {
        foreach($acts as $a)
        {
            ?>
            <option value="<?php echo $a['Page']['id'];?>"><?php echo $a['Page']['title'];?></option>
            
            <?php
        }
    }
    ?>
    
</select>
<label>Description</label>
<textarea name="description" class="ckeditor required"></textarea>
<label>Image</label>
<input type="file" name="file" class="required"/> Minimum size 368 X 264
<hr />
<input type="submit" value="Add" name="submit" class="btn btn-primary btn-large" />
</form>
<script>
$(function(){
   $('#myform').validate(); 
});
</script>