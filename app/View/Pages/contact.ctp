<h1 class="title"><span>Contact Us</span></h1>
<?php echo $this->Session->flash();?>
<div class="description">
    <form action="" method="post" id="myform">
        <div class="one-half"><input type="text" name="name" placeholder="Full Name" class="required" /></div>
        <div class="one-half last"><input type="text" name="email" placeholder="Email" class="required" /></div>
        <div class="one"><textarea name="message" placeholder="Your Message" class="required"></textarea></div>
        <div class="clear"></div>
        <p>&nbsp;</p>
        <div class="submit"><input type="submit" name="submit" value="Submit" /></div>        
    </form>
    
    <p>&nbsp;</p>
    
</div>
<h1 class="title"><span>Contact Us At:</span></h1>
<div class="description" style="font-size: 13px;">
    <strong style="font-size: 15px;">Islami Sangh Nepal</strong><br />
    <p>&nbsp;</p>
    <strong>Millat-e-Islamia Building , Ghantaghar,Kathmandu, Nepal</strong><br />
    <strong>P.O. Box: </strong> 2896<br />
    <strong>Phone Number:</strong> +977-1-4226259, 4243722<br />
    <strong>Fax: </strong> +977-1-4256912<br />
    <strong>Email Address: </strong>isanghnp@gmail.com<br />

</div>

<script>
$(function(){
   $('#myform').validate(); 
});
</script>