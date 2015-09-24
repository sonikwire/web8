<?php session_start();
$pagefilename = basename($_SERVER['PHP_SELF']);
//if template is 'contact.php' include header
if( $pagefilename == 'contact.php' ) {
	include 'inc_header.php';
}
?>
<div id="contact-container">
  <div class="gridContainer clearfix">
    <div id="swcontact" class="fluid">
      <h1 class="pagetitlemain">contact</h1>
      <div id="formdescription">
        tell us about your project.  
      </div>
      <?php
	  //init variables
	  $cf = array();
	  $sr = false;
	  if(isset($_SESSION['cf_returndata'])){
		  $cf = $_SESSION['cf_returndata'];
		  $sr = true;
	  }
	  ?>
	  <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
		  <li id="info">There were some problems with your form submission:</li>
		  <?php 
		  if(isset($cf['errors']) && count($cf['errors']) > 0) :
			  foreach($cf['errors'] as $error) :
		  ?>
		  <li><?php echo $error ?></li>
		  <?php
			  endforeach;
		  endif;
		  ?>
      </ul>
      <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! We will get back to you ASAP!</p>
      <div id="contact-form" class="clearfix">
        <form method="post" action="process.php" >
            <input type="hidden" name="enquiry" value="General">
            <div class="formfieldgroup-2col">
<label for="name">Name: <span class="required">*</span></label>
<input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Doe" required /><!-- autofocus --> 
            </div> 
            <div class="formfieldgroup-2col">  
<label for="email">Email Address: <span class="required">*</span></label>
<input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="johnd@icloud.com" required />
            </div>  
            <div class="formfieldgroup">
<label for="message">Message: <span class="required">*</span></label>
<textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                <p id="req-field-desc"><span class="required">*</span><em>required field</em></p>
                <input type="submit" value="Send!" id="submit-button" />
                <input type="hidden" id="telephone" name="telephone" value="">
              <div class="clearfix">&nbsp;</div>
            </div>
            <div class="formshim">&nbsp;</div>
        </form>
        <?php unset($_SESSION['cf_returndata']); ?>
      </div>
    </div>
  </div>
</div>
<?php 
//if template is 'contact.php' include footer
if( $pagefilename == 'contact.php' ) {
	include 'inc_footer.php';
}
?>