
<h1>Edit Project</h1>
<form action="" method="post" id="myform" enctype="multipart/form-data">
<label>Title</label>
<input type="text" name="title" class="required" value="<?php echo $model['Project']['title'];?>" />
<label>Description is</label>
<textarea name="description" class="ckeditor required"><?php echo $model['Project']['description'];?></textarea>
<label>Image</label>
<input type="file" name="file" class=""/> Minimum size 368 X 264<br />
Current Image<br />
<img src="<?php echo $this->webroot;?>doc/thumb/<?php echo $model['Project']['image'];?>" width="100px;"/>
<hr />
<input type="submit" value="Save" name="submit" class="btn btn-primary btn-large" />
</form>
<script>
$(function(){
   $('#myform').validate(); 
});
</script>