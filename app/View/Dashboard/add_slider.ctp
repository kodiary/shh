<h1>Add Slider</h1>
<form action="<?php echo $this->webroot;?>dashboard/addsliderimg" enctype="multipart/form-data" method="post" id="myform">
<label>Caption : </label><textarea class="required" name="caption" ></textarea>
<label>Upload Image : </label><a id="upload" class="btn btn-info" href="javascript:void(0);">Upload</a> Minimum size 690 X 250
<hr />

<input type="hidden" name="image" class="image" value="" />
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
                    action: '<?php echo $this->webroot.'dashboard/uploadslider'; ?>', 
                     
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
                            $('.thumb').html('<img src="<?php echo $this->webroot.'banners';?>/'+response+'" style="width:690x;"/>');
                            
                            $('.image').val(response);
                            $('.nu').val('1');               
                        }
                        		
                    });
                
            }

</script>