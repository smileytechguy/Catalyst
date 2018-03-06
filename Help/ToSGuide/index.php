<?php

define("ROOTDIR", "../../");
define("REAL_ROOTDIR", "../../");

require_once REAL_ROOTDIR."includes/Controller.php";
use \Catalyst\Page\{UniversalFunctions, Values};
use \Catalyst\User\User;

define("PAGE_KEYWORD", Values::TOS_GUIDE[0]);
define("PAGE_TITLE", Values::createTitle(Values::TOS_GUIDE[1], []));

if (User::isLoggedIn()) {
	define("PAGE_COLOR", $_SESSION["user"]->getColor());
} else {
	define("PAGE_COLOR", Values::DEFAULT_COLOR);
}

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Terms of Service Guide");
?>
		<div class="row">
			<div class="col s12 m9 l10">
				<div class="section hide-on-med-and-up">
					<?= Values::createInlineTOC([
						["intro", "Introduction"],
						["general-terms", "General Terms"],
						["limits", "Limits"],
						["contact-preferences", "Contact Preferences"],
						["payment", "Payment"],
						["cancellation", "Cancellation"],
						["shipping", "Shipping"],
						["changes", "Changes"],
						["sharing-of-finished-art", "Sharing Of Finished Art"],
						["copyright", "Copyright"],
						["hall-of-fame", "Hall of Fame"],
					]) ?>
				</div>
				<div class="divider hide-on-med-and-up"></div>
				<div class="section" id="intro">
					<h4>Introduction</h4>
					<p class="flow-text">Welcome to our guide on creating personal terms of service!  We recommend all creators, of any kind, have a personal terms of service.  This is important as it ensures that the client have agreed upon a set of conditions, and it makes the client liable if they are not followed.</p>
					<p class="flow-text">There are a few things that we think every creator should have.  We've made sections for each of these: <a href="#general-terms">general terms</a>, <a href="#limits">limits</a>, <a href="#contact-preferences">contact preferences</a>, <a href="#payment">payment</a>, <a href="#cancellation">cancellation</a>, <a href="#shipping">shipping</a>, <a href="#sharing-of-finished-art">sharing of finished art</a>, <a href="#copyright">copyright</a>, and <a href="#changes">changes</a>.</p>
					<p class="flow-text">Have any suggestions?  This is a living document, feel free to contact us with any suggestions or feedback you might have!  If your your terms of service is stellar, we might even include it in our <a href="#hall-of-fame">hall of fame</a>!</p>
					<p class="flow-text">The information below is only provided as examples.  You are in no way required to use these, or only use items from this page when constructing your terms of service.  Under each section, you will see several examples, as well as an explaination.</p>
					<p class="flow-text">When a client commissions a creator, they agree to the creator's current terms of service.  This date is recorded in our system, and the client is not held to any future changes a creator makes unless otherwise agreed upon.  You may view a creator's revision history under their main terms of service page.</p>
					<p class="flow-text">If a client breaks the creator's terms of service, they should be reported to our staff accordingly.  We will look at the case and take reasonable actions, up to suspension of the account, depending on the severity.</p>
				</div>
				<div class="divider"></div>
				<div class="section" id="general-terms">
					<h4>General Terms</h4>
					<p class="flow-text">This section contains overall things which do not fit into any category, and usually the main points for working with an artist.</p>
					<p class="flow-text">Typically, we see notes about denying commissions, however we have seen creators describe many other things, such as deadline policies, etc.</p>
					
					<p class="flow-text no-bottom-margin">Examples we like:</p>
					<ul class="browser-default">
						<li class="flow-text no-margin">
							<p class="no-margin">Be prepared to provide clean references of your character(s), or be able to provide a detailed description of them.  Follow all rules in the commission information, as well as these terms of service.  I have a right to decline a commission for any reason, including you not following the rules provided by me.</p>
							<p class="right-align no-margin"><em>Adapted from <a href="https://noelanieternal.deviantart.com/">NoelaniEternal</a>'s ToS</em></p>
						</li>

						<li class="flow-text no-margin">
							<p class="no-margin">I hold the right to reject any commission, at any time for any reason (of which I may or may not provide.)</p>
							<p class="right-align no-margin"><em>Adapted from <a href="http://stealthnachos.weebly.com/terms-of-service.html">Stealthnachos</a>' ToS</em></p>
						</li>

						<li class="flow-text no-margin">
							<p class="no-margin">I reserve the rights to deny/cancel any services at my discretion.  Some common reasons include: I’m not comfortable drawing your idea or it’s too much of a grey zone, empty/suspicious accounts, unclear reference pics, disregarding my boundaries, rude/difficult clients, I myself get busy/sick etc, and stressing/pushing deadlines (this is a general killer for many artists and can affect the quality of the artwork!)</p>
							<p class="right-align no-margin"><em>Adapted from <a href="https://docs.google.com/document/d/1lk_aEoxVO1KroiscbitTNh8u1EAMXr_o63SHlErLPTA/edit">Hettie</a>'s ToS</em></p>
						</li>
					</ul>
				</div>
				<div class="divider"></div>
				<div class="section" id="limits">
					<h4>Limits</h4>
					<p class="flow-text">Creators should be clear and definitive in what they will and will not create.  Our attribute system does this to some extent, but artists should always clearly state things they are not willing to draw.  This helps prevent both unwanted quotes and rejection.</p>
					<p class="flow-text">Some common examples creators may wish to include are canon characters (those from TV shows/movies), as well as various scenarious like macro/micro, etc.  What is listed in a creator's ToS may not fully encompass all they will/will not do.</p>

					<p class="flow-text no-bottom-margin">Examples we like:</p>
					<ul class="browser-default">
						<li class="flow-text no-margin">
							<p class="no-margin">I only do SFW content. Risque, pinup, and very simple nudity is allowed, but I reserve the right to refuse any commission I don’t feel comfortable taking.</p>
							<p class="right-align no-margin"><em>Adapted from <a href="http://stealthnachos.weebly.com/terms-of-service.html">Stealthnachos</a>' ToS</em></p>
						</li>

						<li class="flow-text no-margin">
							<p class="no-margin">No copyrighted characters or OC's without their given permission.</p>
							<p class="right-align no-margin"><em>Adapted from <a href="https://docs.google.com/document/d/1lk_aEoxVO1KroiscbitTNh8u1EAMXr_o63SHlErLPTA/edit">Hettie</a>'s ToS</em></p>
						</li>
					</ul>
				</div>
				<div class="divider"></div>
				<div class="section" id="contact-preferences">
					<h4>Contact Preferences</h4>
				</div>
				<div class="divider"></div>
				<div class="section" id="payment">
					<h4>Payment</h4>
					<p class="flow-text">Creators should detail exactly how they expect payment to work.  This includes every aspect, including methods, amounts, stages (if applicable), etc.</p>
					<p class="flow-text">Through Catalyst, the possibilities for payment are nearly endless!  We've seen creators go nearly every direction, and we encourage it!</p>
					<p class="flow-text">Here's a few spins we've seen people take:</p>
				</div>
				<div class="divider"></div>
				<div class="section" id="cancellation">
					<h4>Cancellation</h4>
				</div>
				<div class="divider"></div>
				<div class="section" id="shipping">
					<h4>Shipping</h4>
				</div>
				<div class="divider"></div>
				<div class="section" id="changes">
					<h4>Changes</h4>
				</div>
				<div class="divider"></div>
				<div class="section" id="sharing-of-finished-art">
					<h4>Sharing Of Finished Art</h4>
				</div>
				<div class="divider"></div>
				<div class="section" id="copyright">
					<h4>Copyright</h4>
				</div>
				<div class="divider"></div>
				<div class="section" id="hall-of-fame">
					<h4>Hall of Fame</h4>
				</div>
			</div>
			<div class="col s12 m3 l2 hide-on-small-only">
				<?= Values::createTOC([
					["intro", "Introduction"],
					["general-terms", "General Terms"],
					["limits", "Limits"],
					["contact-preferences", "Contact Preferences"],
					["payment", "Payment"],
					["cancellation", "Cancellation"],
					["shipping", "Shipping"],
					["changes", "Changes"],
					["sharing-of-finished-art", "Sharing Of Finished Art"],
					["copyright", "Copyright"],
					["hall-of-fame", "Hall of Fame"],
				]) ?>
			</div>
		</div>
<?php
require_once Values::FOOTER_INC;


