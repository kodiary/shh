
<h1>Edit update</h1>
<form action="" method="post" id="myform" enctype="multipart/form-data">
<label>Title</label>
<input type="text" name="title" class="required" value="<?php echo $model['Update']['title'];?>" />

<label>Description</label>
<textarea name="description" class="ckeditor required"><?php echo $model['Update']['description'];?></textarea>
<label>Image</label>
<input type="file" name="file" class=""/> Minimum size 368 X 264<br />
Current Image<br />
<img src="<?php echo $this->webroot;?>doc/thumb/<?php echo $model['Update']['image'];?>" width="100px;"/>
<hr />
<input type="submit" value="Save" name="submit" class="btn btn-primary btn-large" />
</form>
<script>
$(function(){
   $('#myform').validate(); 
});
</script>