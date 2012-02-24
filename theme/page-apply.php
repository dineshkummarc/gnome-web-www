<?php


if (array_key_exists('submit', $_POST)) {

    $application_submitted = true;
    $errors = false;
    $application_sent = false;
    
    $full_name = trim(stripslashes($_POST['full_name']));
    $email = trim(stripslashes($_POST['email']));
    $obfuscated_email = str_replace("@", " AT ", $email);
    $not_spam = $_POST['not_spam'];
    
    if ($not_spam != 'not spam') {
        $errors = true;
    }
    
    $summary = trim(stripslashes($_POST['summary']));
    $previous_participation = trim(stripslashes($_POST['previous_participation']));
    
    if (empty($full_name) || empty($email) || empty($summary)) {
        $errors = true;
    }
    
    if ($errors == false) {
    
        $formmail = "Contact Information\n" .
                    "-------------------\n\n" .
                    
                    "Full Name: " . $full_name . "\n".
                    "Email:     " . $obfuscated_email . "\n\n" .
                    
                    "Contributions Summary:\n" .
                    $summary . "\n\n" .
                    
                    "Foundation Previous Participation:\n" .
                    $previous_participation . "\n\n" .
                    
                    "[Application received at " . date("D M j G:i:s Y") . " (Eastern time)]" . "\n\n".
                    
                    "If you have any questions, you can contact the Membership Committee by\n" .
                    "replying to this mail. Please note that it usually takes up to a week for an application to be fully processed.";

        $headers = "From: GNOME Foundation Membership Committee Script <membership-committee@gnome.org>\n" .
                   "Cc: $email\n";
       
        $subject = "Application received from " . $full_name . " (" . $obfuscated_email . ")";
        
        $application_sent = mail("membership-applications@gnome.org", $subject, $formmail, $headers);

    }
} else {

    $application_submitted = false;

}


?>
<?php require_once("header.php"); ?>
<!-- container -->
    <div id="container" class="two_columns">
        <div class="container_12">
        
            <?php require_once('inc/page-title.php'); ?>
            
            <div class="content without_sidebar">
            
                <?php if ($application_submitted == true && $application_sent == true): ?>
                    
                    <h1 style="text-align: center">Thank you.</h1>
                    <p class="main_feature" style="text-align: center;">Your application has been submitted and it'll be reviewed by the <br /> GNOME Foundation Membership Committee within two weeks.</p>
                    <p style="text-align: center"> You can check the status of your application at the following <a href="http://www.gnome.org/rt3-stats/membership.html">page</a>.</p>
                
                <?php else: ?>
                
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; // End the loop. Whew. ?>
                    
                    <hr class="top_shadow" />

                    <h2 style="text-align: center;">Application Form</h2>


                    <form action="" method="post" id="application_form">

                        <style type="text/css">
                        
                            #application_form {
                                margin-top: 30px;
                                padding: 30px;
                                border: 1px solid #ccc;
                                background: #eeeeec;
                                -moz-border-radius: 5px;
                                -webkit-border-radius: 5px;
                                border-radius: 5px;
                            }
                            #application_form h3:first-of-type {
                                margin-top: 0;
                            }
                            #application_form h3 {
                                border-bottom: 1px solid #ccc;
                            }
                            #application_form .item {
                                margin: 20px 0;
                                overflow: hidden;
                                font-size: 15px;
                            }
                            #application_form .item label {
                                display: block;
                                float: left;
                                width: 140px;
                                text-align: right;
                                margin-right: 10px;
                                padding: 5px;
                                font-weight: bold;
                            }
                            #application_form .item input[type="text"],
                            #application_form .item .field {
                                font: inherit;
                                padding: 5px;
                                width: 265px;
                            }
                            #application_form .item input[name="not_spam"] {
                                width: 100px;
                            }
                            #application_form .item textarea {
                                width: 100%;
                                min-height: 130px;
                                font: inherit;
                                padding: 10px;
                                -moz-box-sizing: border-box;
                                -webkit-box-sizing: border-box;
                                box-sizing: border-box;
                                resize: vertical;
                            }
                            #application_form .submit_area {
                                text-align: center;
                            }
                            #application_form .submit_area button {
                                font-size: 18px;
                                outline: 0;
                            }
                            #application_form .submit_area button:hover {
                                cursor: pointer;
                            }
                        
                        </style>
                        
                        <h3>Personal Information</h3>

                        <div class="item">
                            <label for="full_name">Full Name</label>
                            <input name="full_name" id="full_name" type="text">
                        </div>
                        
                        <div class="item">
                            <label for="email">E-mail Address</label>
                            <input name="email" id="email" type="text">
                        </div>
                        
                        <h3>Contributions</h3>
                        
                        <div class="item">
                            <p>
                                Please list references to your contributions,
                                i.e. Bugzilla, Mailing Lists, commits or people to vouch for you. If
                                you are a new applicant, it's definitely a great plus putting
                                the name of a few contacts within the community that could vouch for
                                you and your work for the GNOME Foundation. (existing Foundation
                                members preferred)
                            </p>
                            <textarea name="summary"></textarea>
                        </div>
                        
                        <h3>Previous Foundation participation</h3>
                        
                        <div class="item">
                            <p>
                                Please tell us whether you were an existing 
                                Foundation member or have done someting relevant for the GNOME 
                                Foundation in the past. (for example, past Board Member)
                            </p>
                            <textarea name="previous_participation"></textarea>
                        </div>
                        
                        <hr />
                        
                        <div class="item" style="text-align: center;">
                            <span>Please type “not spam” here:</span> <input type="text" name="not_spam">
                        </div>
                        
                        <div class="submit_area">
                            <button name="submit" type="submit" class="action_button">Submit Application</button>
                        </div>
                        
                    </form>
                    
                <?php endif; ?>
                
                <br />
                <div class="clear"></div>
            </div>
            
            <?php require_once("footer_art.php"); ?>
        </div>
    </div>
    
    <div class="clearfix"></div>
    
    <?php require_once("footer.php"); ?>
</body>
</html>
