<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
<title>Become a Friend of GNOME!</title>
<meta name="description" content="Become a Friend of GNOME!" />

<link media="all" type="text/css" rel="stylesheet" href="css/friends.css"/>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/fog-website.js"></script>

</head>

<body>
<h1>Become a Friend of GNOME!</h1>

<div id="friend-sidebar">
<div id="sidebar-info">
<h5>Thanks for your donation!</h5>
<ul>
<li>$600 USD Sends one hacker to GUADEC.</li>

<li>$3000 USD Pays for lodging and food for a 3 day hackfest for 5 developers.</li>

<li>$5000 USD pays for a hackfest for 5 developers to add new features and
improve GNOME products.</li>

</ul>
</div>
</div>


<div id="friend-bread">

<h2>Please fill out your donation details</h2>

<form method="post" action="https://www.paypal.com/cgi-bin/webscr">	
<?php
	ob_start();

	if(!empty($_POST['aidtype'])) {
		switch($_POST['aidtype']) {
			case 'adopt':
				echo 'You have chosen to <strong>adopt a hacker</strong> <a href="index.html">(change)</a><br />'; 
                echo '<label><input type="radio" value="Monthly" name="payment_option" checked="checked" />Monthly</label>';
                echo '<label><input type="radio" value="Annual" name="payment_option" />Annually</label>';
				echo ' $<input type="text" id="amount" name="a3" value="10" size=5><br />';
				echo 'Please increase the amount above if you want to make a larger difference.';

	                        echo '<h3>Pick a hacker from whom you will receive a post card:</h3>
				<input type="hidden" value="Favorite Hacker" name="on0"/>
				<input type="radio" value="You will receive a postcard from Emmanuele Bassi" name="os0"/><a href="http://live.gnome.org/EmmanueleBassi" target="_blank">Emmanuele Bassi</a><br/>
				<input type="radio" value="You will receive a postcard from Brian Cameron" name="os0"/><a href="http://live.gnome.org/BrianCameron" target="_blank">Brian Cameron</a><br/>
				<input type="radio" value="You will receive a postcard from Diego Escalante Urrelo" name="os0"/><a href="http://live.gnome.org/DiegoEscalanteUrrelo" target="_blank">Diego Escalante Urrelo</a><br/>
				<input type="radio" value="You will receive a postcard from Behdad Esfahbod" name="os0"/><a href="http://live.gnome.org/BehdadEsfahbod" target="_blank">Behdad Esfahbod</a><br/>
				<input type="radio" value="You will receive a postcard from Andre Klapper" name="os0"/><a href="http://live.gnome.org/AndreKlapper" target="_blank">Andre Klapper</a><br/>
				<input type="radio" value="You will receive a postcard from Alexander Larsson" name="os0"/><a href="http://blogs.gnome.org/alexl" target="_blank">Alexander Larsson</a><br/>
				<input type="radio" value="You will receive a postcard from Federico Mena Quintero" name="os0"/><a href="http://live.gnome.org/FedericoMenaQuintero" target="_blank">Federico Mena Quintero</a><br/>
				<input type="radio" value="You will receive a postcard from Andreas Nilsson" name="os0"/><a href="http://live.gnome.org/AndreasNilsson" target="_blank">Andreas Nilsson</a><br/>
				<input type="radio" value="You will receive a postcard from John Palmieri" name="os0"/><a href="http://live.gnome.org/JohnPalmieri" target="_blank">John Palmieri</a><br/>
				<input type="radio" value="You will receive a postcard from Frederic Peters" name="os0"/><a href="http://live.gnome.org/FredericPeters" target="_blank">Frederic Peters</a><br/>
				<input type="radio" value="You will receive a postcard from Stormy Peters" name="os0"/><a href="http://live.gnome.org/StormyPeters" target="_blank">Stormy Peters</a><br/>
				<input type="radio" value="You will receive a postcard from Lucas Rocha" name="os0"/><a href="http://live.gnome.org/LucasRocha" target="_blank">Lucas Rocha</a><br/>
				<input type="radio" value="You will receive a postcard from Vincent Untz" name="os0"/><a href="http://live.gnome.org/VincentUntz" target="_blank">Vincent Untz</a><br/>
				<input type="radio" value="You will receive a postcard from Luis Villa" name="os0"/><a href="http://live.gnome.org/LuisVilla4" target="_blank">Luis Villa</a><br/>';
				break;

			case 'annual':
				echo 'You have chosen our annual <strong>subscription</strong> <a href="index.html">(change)</a> <br />'; 
				echo '<strong>One time amount:</strong> $<input type="text" id="amount" name="amount" value="100" size=5><br />';
				echo 'Please increase the amount above if you want to make a larger difference.';
				break;

                echo '<h3>Pick a hacker from whom you will receive a post card:</h3>
				<input type="hidden" value="Favorite Hacker" name="on0"/>
				<input type="radio" value="You will receive a postcard from Emmanuele Bassi" name="os0"/><a href="http://live.gnome.org/EmmanueleBassi" target="_blank">Emmanuele Bassi</a><br/>
				<input type="radio" value="You will receive a postcard from Brian Cameron" name="os0"/><a href="http://live.gnome.org/BrianCameron" target="_blank">Brian Cameron</a><br/>
				<input type="radio" value="You will receive a postcard from Diego Escalante Urrelo" name="os0"/><a href="http://live.gnome.org/DiegoEscalanteUrrelo" target="_blank">Diego Escalante Urrelo</a><br/>
				<input type="radio" value="You will receive a postcard from Behdad Esfahbod" name="os0"/><a href="http://live.gnome.org/BehdadEsfahbod" target="_blank">Behdad Esfahbod</a><br/>
				<input type="radio" value="You will receive a postcard from Andre Klapper" name="os0"/><a href="http://live.gnome.org/AndreKlapper" target="_blank">Andre Klapper</a><br/>
				<input type="radio" value="You will receive a postcard from Alexander Larsson" name="os0"/><a href="http://blogs.gnome.org/alexl" target="_blank">Alexander Larsson</a><br/>
				<input type="radio" value="You will receive a postcard from Federico Mena Quintero" name="os0"/><a href="http://live.gnome.org/FedericoMenaQuintero" target="_blank">Federico Mena Quintero</a><br/>
				<input type="radio" value="You will receive a postcard from Andreas Nilsson" name="os0"/><a href="http://live.gnome.org/AndreasNilsson" target="_blank">Andreas Nilsson</a><br/>
				<input type="radio" value="You will receive a postcard from John Palmieri" name="os0"/><a href="http://live.gnome.org/JohnPalmieri" target="_blank">John Palmieri</a><br/>
				<input type="radio" value="You will receive a postcard from Frederic Peters" name="os0"/><a href="http://live.gnome.org/FredericPeters" target="_blank">Frederic Peters</a><br/>
				<input type="radio" value="You will receive a postcard from Stormy Peters" name="os0"/><a href="http://live.gnome.org/StormyPeters" target="_blank">Stormy Peters</a><br/>
				<input type="radio" value="You will receive a postcard from Lucas Rocha" name="os0"/><a href="http://live.gnome.org/LucasRocha" target="_blank">Lucas Rocha</a><br/>
				<input type="radio" value="You will receive a postcard from Vincent Untz" name="os0"/><a href="http://live.gnome.org/VincentUntz" target="_blank">Vincent Untz</a><br/>
				<input type="radio" value="You will receive a postcard from Luis Villa" name="os0"/><a href="http://live.gnome.org/LuisVilla4" target="_blank">Luis Villa</a><br/>';
				break;

			case 'associate':
				echo 'You have chosen to become a <strong>associate</strong> <a href="index.html">(change)</a> <br />'; 
				echo '<strong>One time amount:</strong> $<input type="text" id="amount" name="amount" value="25" size=5><br />';
				echo 'Please increase the amount above if you want to make a larger difference.';
				break;

			case 'sponsor':
				echo 'You have chosen to become a <strong>sponsor</strong> <a href="index.html">(change)</a> <br />';
				echo '<strong>One time amount:</strong> $<input type="text" id="amount" name="amount" value="500" size=5><br />';
				echo 'Please increase the amount above if you want to make a larger difference.';
				break;

			case 'philanthropist':
				echo 'You have chosen to become a <strong>philanthropist</strong> <a href="index.html">(change)</a><br />';
				echo '<strong>One time amount:</strong> $<input type="text" id="amount" name="amount" value="1200" size=5> <br />';
				echo 'Please increase the amount above if you want to make a larger difference.';
				break;

			default:
				header('location: ./index.html');
				die('No type selected.');
				break;
		}

		
		if ($_POST['aidtype'] == 'adopt' || $_POST['aidtype'] == 'annual' || $_POST['aidtype'] == 'sponsor') {
			echo '<h3>Select a t-shirt size:</h3>
                        <input type="hidden" value="T-shirt Size" name="on3"/>
                        <input type="radio" value="M" name="os3"/>M
                        <input type="radio" value="L" name="os3" checked/>L
                        <input type="radio" value="XL" name="os3" checked/>XL
                        <input type="radio" value="XXL" name="os3"/>XXL<br/>';
		}
	}
	else header('location: ./index.html');
?>

<h3>Select whether you want to receive a gift:</h3>
<input type="hidden" value="Donation Gift" name="on1"/>
<input type="radio" value="Yes" name="os1" checked>Yes, I want to receive a gift as a thank you for my donation.<br/>
<input type="radio" value="No" name="os1"/>Don't send me a gift, please.<br/>
<small>If you do not want to receive a gift, we will save the money for the gift and shipping and use it to further the mission of the GNOME Project, bringing a free desktop to the public.</small><br/>


<h3>Select whether you want to have your name listed in the donors page:</h3>
<input type="hidden" value="List name in the donors page" name="on2"/>
<input type="radio" value="Yes" name="os2" checked>Yes<br/>
<input type="radio" value="No" name="os2"/>No<br/><br/>

<p>Additional comments or ideas on how we can improve the GNOME Foundation:
<textarea rows="7" cols="88" name="custom"></textarea>
</p>

<?php 

	switch($_POST['aidtype']) {
			case 'adopt':
				echo '
				<!-- Identify your business so that you can collect the payments. --> 
				<input type="hidden" name="business" value="friends@gnome.org"/> 
				<!-- Specify a Subscribe button. --> 
                <!-- <input type="hidden" name="cmd" value="_s-xclick"> -->
                <input type="hidden" name="cmd" value="_xclick-subscriptions">
                <input id="hosted_button_id" type="hidden" name="hosted_button_id" value="2854082">
				<!-- Identify the subscription. -->
				<input id="item_name" type="hidden" name="item_name" value="Friends of GNOME - Adopt a hacker monthly subscription"/> 
				<input type="hidden" value="http://www.gnome.org/friends/thank-you.php" name="return"/>
				<!-- Define the intervals between payments. "1" means every period. -->
				<input type="hidden" name="p3" value="1">
				<!-- "t3" defines the period duration (D=days; W=weeks; M=months and Y=Years). --> 
				<input id="t3" type="hidden" name="t3" value="M">
				<!-- "src" with a value of "1" causes it to repeat for every interval. -->
				<input type="hidden" name="src" value="1">
				<!-- Not sure what "sra" does. Does not seem to harm the form (part of sample). -->
				<input type="hidden" name="sra" value="1">
				<input type="hidden" name="currency_code" value="USD">
				<!-- Display the payment button. --> 
				<input type ="image" name= "submit" src="images/donate-button.png" alt="PayPal - The safer, easier way to pay online"/> 
				<img alt="" border="0" width="1" height="1" src="https://www.paypal.com/en_US/i/scr/pixel.gif" />';
			break;

			case 'associate':
				echo '<input type="hidden" value="friends@gnome.org" name="business"/>
				<input type="hidden" value="http://www.gnome.org/friends/thank-you.php" name="return"/>
				<input type="hidden" value="_xclick" name="cmd"/>
				<input type="hidden" name="item_name" value="Friends of GNOME - Associate level donation ($25-500)"/> 
				<input type="image" alt="Donate" name="submit" src="images/donate-button.png"/>';
			break;

			case 'sponsor':
				echo '<input type="hidden" value="friends@gnome.org" name="business"/>
				<input type="hidden" value="http://www.gnome.org/friends/thank-you.php" name="return"/>
				<input type="hidden" value="_xclick" name="cmd"/>
				<input type="hidden" name="item_name" value="Friends of GNOME - Sponsor level donation ($500-1200)"/> 
				<input type="image" alt="Donate" name="submit" src="images/donate-button.png"/>';
			break;

			case 'philanthropist':
				echo '<input type="hidden" value="friends@gnome.org" name="business"/>
				<input type="hidden" value="http://www.gnome.org/friends/thank-you.php" name="return"/>
				<input type="hidden" value="_xclick" name="cmd"/>
				<input type="hidden" name="item_name" value="Friends of GNOME - Philanthropist level donation ($1200 or more)"/> 
				<input type="image" alt="Donate" name="submit" src="images/donate-button.png"/>';
			break;

			default:
				header('location: ./index.html');
				die('No type selected.');
			break;
		}
?>
<br/><small>You will be redirected to the Paypal website.</small>
</form>

<br/>
<p>Thank you for your support!</p>

<p id="foundation-info">GNOME Foundation is a 501(c)3 non-profit organization, and your donation is considered charitable to the extent of applicable law. Consult your tax preparer to determine tax-deductibility.</p>

</div>
<?php
	switch($_POST['aidtype']) {
		case 'adopt':
            $conversion_label = "FupuCMPSxwEQ1_L_5wM";
			break;
		case 'associate':
            $conversion_label = "pqrMCJ3TxwEQ1_L_5wM";
			break;
		case 'sponsor':
            $conversion_label = "LKLyCPfTxwEQ1_L_5wM";
			break;
		case 'philanthropist':
            $conversion_label = "I4h4CNHUxwEQ1_L_5wM";
			break;
		default:
			header('location: ./index.html');
			die('No type selected.');
			break;
	}
?>
<!-- Track user selection for Google Adwords -->
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript">
  $.cookie("aidtype", "<?php echo $_POST['aidtype'] ?>");
  $(function () {
        $("input[name='payment_option']").click(function () {
        var value = $(this).attr('value');
        var $amount = $('#amount');

        if (value == 'Monthly') {
            $amount.val('10');
            $('#item_name').val("Friends of GNOME - Adopt a hacker monthly subscription");
            $('#hosted_button_id').val('2854082');
            $('#t3').val('M');
        }
        else {
            $amount.val('100');
            $('#item_name').val("Friends of GNOME - Adopt a hacker annually subscription");
            $('#hosted_button_id').val('EKNAYM7XBGGQE');
            $('#t3').val('Y');
        }
    });
  });
</script>

<!-- Google Code for Step 2 Conversion Page -->
<script type="text/javascript">
<!--
var google_conversion_id = 1023408471;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "<?php echo $conversion_label;?>";
var google_conversion_value = 0;
//-->
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1023408471/?label=<?php echo $conversion_label;?>&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>
