<?php

    $c = $content;
    
?>
<h1>Edit Page - <?php echo $c['Page']['title'];?></h1>
<form action="<?php echo $this->webroot; ?>dashboard/editPage/<?php echo $c['Page']['id']; ?>" method="post" id="myform">
<label>Page Title</label>
<input type="text" value="<?php echo $c['Page']['title'];?>" name="title" class="required" />
<label>Page Description</label>
<textarea name="description" class="ckeditor required"><?php echo $c['Page']['description'];?></textarea>
<hr />
<input type="submit" value="Edit" name="submit" class="btn btn-primary btn-large" />
</form>
<script>
$(function(){
   $('#myform').validate(); 
});
</script>
