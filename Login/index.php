<?php

define("ROOTDIR", "../");
define("REAL_ROOTDIR", "../");

require_once REAL_ROOTDIR."includes/Controller.php";
use \Catalyst\Database\User\Login;
use \Catalyst\Form\FormHTML;
use \Catalyst\Page\UniversalFunctions;
use \Catalyst\Page\Values;
use \Catalyst\User\User;

define("PAGE_KEYWORD", Values::LOGIN[0]);
define("PAGE_TITLE", Values::createTitle(Values::LOGIN[1], []));

if (User::isLoggedIn()) {
	define("PAGE_COLOR", User::getCurrentUser()->getColorHex());
} else {
	define("PAGE_COLOR", Values::DEFAULT_COLOR);
}

require_once Values::HEAD_INC;

echo UniversalFunctions::createHeading("Login");

if (FormHTML::testAjaxSubmissionFailed()) {
	echo FormHTML::getAjaxSubmissionHtml();
} elseif (call_user_func(...Login::getFormStructure()[0]["auth"][0])) {
	echo call_user_func(Login::getFormStructure()[0]["auth"][1]);
} else {
	if (Login::pending2FA()) {
		unset($_SESSION["pending_user"]);
	}
	echo FormHTML::generateForm(Login::getFormStructure());
}

require_once Values::FOOTER_INC;
