<?php $title = 'jonprentice'; $active = 'active'; include("template/header.php");?>

<div class="container">
	<div class="text-center">
		<h1>Help</h1>

		<h2>Have a <b><em>Question</em></b> or <b><em>Issue</em></b> that you need help with?</h2>
		<a href="mailto:jon77p_support@gmail.com?subject=[SUPPORT]"role="button" class="btn btn-default btn-large btn-disabled disabled"><span class=""></span><s>Email me</s></a>

		<br>

		<h1 class="text-center"><a href="#myModal" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Contact Us</a></h1>



		<br>

		<h2>Want to request <b><em>Remote Support</em></b>?</h2>
		<h3>Visit <a href="http://help.jonprentice.me" target="__blank">http://help.jonprentice.me</a> to add yourself to the remote service queue and I will remotely help you. </h3>
	</div>
</div>

<?php 
    //set validation error flag as false
    $error = false;
    //check if form is submitted
    if (isset($_POST['submit']))
    {
        $name = trim($_POST['txt_name']);
        $fromemail = trim($_POST['txt_email']);
        $subject = trim($_POST['txt_subject']);
        $message = trim($_POST['txt_msg']);

        //name can contain only alpha characters and space
        if (!preg_match("/^[a-zA-Z ]+$/",$name))
        {
            $error = true;
            $name_error = "Please Enter Valid Name";
        }
        if(!filter_var($fromemail,FILTER_VALIDATE_EMAIL))
        {
            $error = true;
            $fromemail_error = "Please Enter Valid Email ID";
        }
        if(empty($subject))
        {
            $error = true;
            $subject_error = "Please Enter Your Subject";
        }
        if(empty($message))
        {
            $error = true;
            $message_error = "Please Enter Your Message";
        }
        if (!$error)
        {
            //send mail
            $toemail = "me@mydomain.com";
            $subject = "Enquiry from Visitor " . $name;
            $body = "Here goes your Message Details: \n\n Name: $name \n From: $fromemail \n Message: \n $message";
            $headers = "From: $fromemail\n";
            $headers .= "Reply-To: $fromemail";

            if (mail ($toemail, $subject, $body, $headers))
                $alertmsg  = '<div class="alert alert-success text-center">Message sent successfully.  We will get back to you shortly!</div>';
            else
                $alertmsg = '<div class="alert alert-danger text-center">There is error in sending mail.  Please try again later.</div>';
        }
    }
?>

		<!-- modal contact form -->
		<div id="myModal" class="modal fade" aria-labelledby="myModalLabel" aria-hidden="true" tabindex="-1" role="dialog" style="overflow-x: auto;overflow-y: auto;">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		                <h4 class="modal-title">Contact Form</h4>
		            </div>
		            <div class="modal-body" id="myModalBody">
		                <form role="form" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="contactform">
            <fieldset>
                <legend>Bootstrap Contact Form</legend>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_name" class="control-label">Name</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_name" placeholder="Your Full Name" type="text" value="<?php if($error) echo $name; ?>" />
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_email" class="control-label">Email ID</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_email" placeholder="Your Email ID" type="text" value="<?php if($error) echo $fromemail; ?>" />
                        <span class="text-danger"><?php if (isset($fromemail_error)) echo $fromemail_error; ?></span> 
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_subject" class="control-label">Subject</label>
                    </div>
                    <div class="col-md-12">
                        <input class="form-control" name="txt_subject" placeholder="Your Subject" type="text" value="<?php if($error) echo $subject; ?>" />
                        <span class="text-danger"><?php if (isset($subject_error)) echo $subject_error; ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <label for="txt_msg" class="control-label">Message</label>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" name="txt_msg" rows="4" placeholder="Your Message"><?php if($error) echo $message; ?></textarea>
                        <span class="text-danger"><?php if (isset($message_error)) echo $message_error; ?></span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12">
                        <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                    </div>
                </div>
            </fieldset>
            </form>
            <?php if (isset($alertmsg)) { echo $alertmsg; } ?>
		            </div>
		            <div class="modal-footer">
		                <button type="submit" class="btn btn-success">Send Mail</button>
		            </div>
		        </div>
		    </div>
		</div>

<?php include("template/footer.php");?>
