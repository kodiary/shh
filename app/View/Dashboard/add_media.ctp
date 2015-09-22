<?php
    
    $c['Media']['media_type'] = '';
    $c['Media']['title'] = '';
    $c['Media']['description'] = '';
    $c['Media']['file'] = '';
    $c['Media']['youtube'] = '';
    $arr_ext = array();
    $ext = '';
    $print = '';
    $publication = '';
    $av = '';
    $br = '';
?>
<h1>Add Media Content</h1>
<form action="<?php echo $this->webroot; ?>dashboard/addMedia" method="post" enctype="multipart/form-data" id="myform">
<label>Media Title</label>
<input type="text" value="<?php echo $c['Media']['title'];?>" name="title" class="required" />
<label>Media Description</label>
<textarea name="description" class="ckeditor required"><?php echo $c['Media']['description'];?></textarea>
<label>Media Type</label>
<select name="media_type" id="media_type" class="required">
    <option value="">Choose Type</option>
    <option value="Print" <?php echo $print;?>>Print</option>
    <option value="Publication" <?php echo $publication;?>>Publication</option>
    <option value="Audio-Visual" <?php echo $av;?>>Audio-Visual</option>
    <option value="Broadcasting" <?php echo $br;?>>Broadcasting</option>
</select>
<div class="av" <?php if($ext != 'mp3' && $ext !='wav' && $c['Media']['youtube']==''){?>style="display: none;"<?php }?>>
<label>Audio or Video</label>
<select id="av" name="av">
    <option value="a" <?php if($ext == 'mp3' || $ext =='wav'){?>selected="selected"<?php }?>>Audio</option>
    <option value="v" <?php if($c['Media']['youtube']!=''){?>selected="selected"<?php }?>>Video</option>
</select>
</div>
<div class="file"  <?php if(!in_array($ext,$arr_ext)){?>style="display: none;"<?php }?>>
    <label>Upload File</label>
    <input type="file" name="file" />
</div>
<div class="youtube" <?php if($c['Media']['youtube']==''){?>style="display: none;"<?php }?>>
    <label>Youtube Url</label>
    <textarea name="youtube"><?php echo $c['Media']['youtube'];?></textarea>
    <input type="hidden" name="added_on" value="<?php echo date('Y-m-d');?>" />
</div>
<hr />
<input type="submit" value="Save" name="submit" class="btn btn-primary btn-large" />
</form>
<script>
$(function(){
    $('#myform').validate();
    $('#media_type').change(function(){
        $('#av').val('');
        var val = $(this).val();
        if(val == 'Print' || val == 'Publication')
        {
            $('.file').show();
            $('.av').hide();
            $('.youtube').hide();
            
        }
        else
        if(val == 'Audio-Visual' || val == 'Broadcasting')
        {
            $('.file').hide();
            $('.av').show();
            $('.youtube').hide();
        
        }
        
        else
        {
            $('.file').hide();
            $('.av').hide();
            $('.youtube').hide();
            
        }
        
    });
    $('#av').change(function(){
        var val = $(this).val();
        if(val == 'a')
        {
            $('.file').show();
            $('.youtube').hide();
                        
        }
        else
        if(val == 'v')
        {
            $('.file').hide();
            $('.youtube').show();
        }
        
    }); 
       
    
});

</script>
