<div class="main clearfix">
<div class="container">
<div class="row service-box margin-bottom-40">
<h2 ><span>Projects<small> <?php echo $pages['Project']['title'];?></small></h2>
<div class="col-md-6">
<div><img src="<?php echo $this->webroot;?>doc/<?php echo $pages['Project']['image'];?>" /></div>
</div>

<div class="col-md-6">
<div class="small" style="font-size: 13px;">
<?php
if($act)
{
    echo $act['Page']['title'];
    echo "<br/>";
}
?>


</div>
<?php echo $pages['Project']['description'];?></div>
<div><a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=target@email.com" target="_blank">email</a>

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="newera_cyber@hotmail.com">
<input type="hidden" name="lc" value="NP">
<input type="hidden" name="item_name" value="shh">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</div>
</div></div></div>