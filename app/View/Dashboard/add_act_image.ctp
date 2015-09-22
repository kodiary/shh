<?php
if($content)
{
    $i=0;
 ?>
<h1>Image Activities</h1>
<?php
foreach($content as $c)
{
    $i++;
 ?>
<div class="list"><div class="number"><?php echo $i;?>.</div><div class="title"><?php echo $c['Image']['title']?></div><div class="action"><a href="<?php echo $this->webroot; ?>dashboard/editActImage/<?php echo $c['Image']['id'];?>" class="btn btn-info">Edit</a> <a href="<?php echo $this->webroot; ?>dashboard/deleteActImage/<?php echo $c['Image']['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</a></div><div class="clear"></div></div>
<?php 
}
}
?>
<h1>Add Activities Image</h1>
<form action="<?php echo $this->webroot;?>dashboard/addsliderimg" enctype="multipart/form-data" method="post" id="myform">
<label>Title : </label><input type="text" name="title" class="required" />
<label>Upload Image : </label><a id="upload" class="btn btn-info" href="javascript:void(0);">Upload</a> Minimum size 368 X 264
<hr />

<input type="hidden" name="file" class="image" value="" />
<div class="thumb" style="margin: 10px 0;"></div>
<input type="hidden" name="added_on" value="<?php echo date('Y-m-d');?>" />
<input type="submit" value="Save"  class="btn btn-primary btn-large" />
</form>
<script>
$(function(){
   initiate_ajax_upload('upload'); 
   $('#myform').validate()
  
});
function initiate_ajax_upload(button_id){
                
                var button = $('#'+button_id), interval;
                new AjaxUpload(button,{
                    action: '<?php echo $this->webroot.'dashboard/upload'; ?>', 
                     
                    name: 'file',
                    onSubmit : function(file, ext){
                        // change button text, when user selects file
                       			
                        button.text('Uploading');
			
                        // If you want to allow uploading only 1 file at time,
                        // you can disable upload button
                        this.disable();
			
                        // Uploding -> Uploading. -> Uploading...
                        interval = window.setInterval(function(){
                            var text = button.text();
                            if (text.length < 13){
                                button.text(text + '.');					
                            } else {
                                button.text('Uploading');				
                            }
                        }, 200);
                    },
                    onComplete: function(file, response){
                        
                            button.text('Upload');
                            window.clearInterval(interval);
    						
                            // enable upload button
                            this.enable();
                            $('.crop').show();
                            $('.thumb').html('<img src="<?php echo $this->webroot.'doc';?>/'+response+'" style="width:350x;"/>');
                            
                            $('.image').val(response);
                            $('.nu').val('1');               
                        }
                        		
                    });
                
            }

</script>