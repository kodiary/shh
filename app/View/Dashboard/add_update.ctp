
<h1>Add new update</h1>
<form action="" method="post" id="myform" enctype="multipart/form-data">
<label>Title</label>
<input type="text" value="" name="title" class="required" />
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