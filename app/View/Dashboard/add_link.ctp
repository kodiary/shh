<h1>Add Link</h1>
<form action="" method="post" id="myform">
<label>Title : </label><input type="text" name="title" class="required" />
<label>Link URL: </label><input type="text" name="links" class="required" />
<hr />
<input type="submit" value="Save"  class="btn btn-primary btn-large" />
</form>
<script>
$(function(){
   $('#myform').validate(); 
});
</script>