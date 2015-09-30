<div class="main clearfix">
    <div class="container">
        <div class="wrapper" style="margin:20px 0;">
            <?php echo $this->Session->flash();?>
            <div class="row margin-bottom-20">
        						<div class="col-md-6 col-sm-6 col-xs-12">
        							<div class="space20">
        							</div>
        							<h3 class="form-section">Contacts</h3>
        							<div class="well">
        								<h4>Address</h4>
        								<address>
        								<strong>Social Helping Hands Nepal</strong><br>
        								 Baluwatar,Kathmandu, Nepal<br>
        								<abbr title="Phone">P:</abbr>  +977-9807388399 </address>
        								<address>
        								<strong>Email</strong><br>
        								<a href="mailto:info@shhnepal.org">info@shhnepal.org</a>
        								</address>
        								<ul class="social-icons margin-bottom-10">
        									<li>
        										<a href="#" data-original-title="facebook" class="facebook">
        										</a>
        									</li>
        									<li>
        										<a href="#" data-original-title="github" class="github">
        										</a>
        									</li>
        									<li>
        										<a href="#" data-original-title="Goole Plus" class="googleplus">
        										</a>
        									</li>
        									<li>
        										<a href="#" data-original-title="linkedin" class="linkedin">
        										</a>
        									</li>
        									<li>
        										<a href="#" data-original-title="rss" class="rss">
        										</a>
        									</li>
        									<li>
        										<a href="#" data-original-title="skype" class="skype">
        										</a>
        									</li>
        									<li>
        										<a href="#" data-original-title="twitter" class="twitter">
        										</a>
        									</li>
        									<li>
        										<a href="#" data-original-title="youtube" class="youtube">
        										</a>
        									</li>
        								</ul>
        							</div>
        						</div>
        						<div class="col-md-6 col-sm-6 col-xs-12">
        							<div class="space20">
        							</div>
        							<!-- BEGIN FORM-->
        							<form action="<?php echo $this->webroot; ?>Pages/contact" method="post">
        								<h3 class="form-section">Feedback</h3>
        								<div class="form-group">
        									<div class="input-icon">
        										<i class="fa fa-check"></i>
        										<input type="text" class="form-control" placeholder="Subject" name="subject" />
        									</div>
        								</div>
        								<div class="form-group">
        									<div class="input-icon">
        										<i class="fa fa-user"></i>
        										<input type="text" class="form-control" placeholder="Name" name="name" />
        									</div>
        								</div>
        								<div class="form-group">
        									<div class="input-icon">
        										<i class="fa fa-envelope"></i>
        										<input type="text" class="form-control" placeholder="Email" name="email" />
        									</div>
        								</div>
        								<div class="form-group">
        									<textarea class="form-control" rows="3=6" placeholder="Feedback" name="message"></textarea>
        								</div>
        								<button type="submit" class="btn blue">Submit</button>
        							</form>
        							<!-- END FORM-->
        						</div>
        					</div>
            </div>
        </div>
</div>