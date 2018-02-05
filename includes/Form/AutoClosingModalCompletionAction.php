<?php

namespace Catalyst\Form;

/**
 * Represents an action which can be performed based
 */
class AutoClosingModalCompletionAction extends CompletionAction {
	/**
	 * Prepended to any generated modal's IDs
	 */
	const PREFIX_ID = "form-completion-modal-";

	/**
	 * String to display in modal
	 * 
	 * @var string
	 */
	protected $contents = 'Thank you for submitting this form.';
	/**
	 * Number of seconds to show modal
	 * 
	 * @var int
	 */
	protected $delay = 10;

	/**
	 * Create a new AutoClosingModalCompletionAction
	 * 
	 * @param string $contents What should be displayed to the user on completion
	 * @param int $delay Number of seconds to wait until the modal is closed
	 */
	public function __construct(string $contents='Thank you for submitting this form.', int $delay=10) {
		$this->setContents($contents);
		$this->setDelay($delay);
	}

	/**
	 * Get the modal's contents
	 * 
	 * @return string Modal's contents
	 */
	public function getContents() : string {
		return $this->contents;
	}

	/**
	 * Set the modal's contents
	 * 
	 * @param string $contents New contents to show in modal
	 */
	public function setContents($contents) : void {
		$this->contents = $contents;
	}

	/**
	 * Get the delay until the modal closes
	 * 
	 * @return int The delay until the modal closes
	 */
	public function getDelay() : int {
		return $this->delay;
	}

	/**
	 * Set the delay until the modal closes to a new value
	 * 
	 * @param int $delay Number of seconds until the modal closes
	 */
	public function setDelay($delay) : void {
		$this->delay = $delay;
	}

	/**
	 * Get JavaScript to run on success
	 * 
	 * @return string JS code for success
	 */
	public function getJs() : string {
		$str = '';
		$str .= 'var modalId = '.json_encode(self::PREFIX_ID).'+Date.now().toString();';
		$str .= '$("body").append(';
			$str .= '$("<div></div>").attr("id", modalId).addClass("modal").append(';
				$str .= '$("<h4></h4>").text('.json_encode($this->getContents()).').after(';
					$str .= '$("<p></p>").text("This box will close in "+'.json_encode($this->getDelay()).'+" seconds.")';
				$str .= ')';
			$str .= ')';
		$str .= ');';
		$str .= '$("#"+modalId).modal("open");';
		$str .= 'setTimeout(';
			$str .= 'function() {';
				$str .= '$("#"+modalId).modal("close");';
			$str .= '},';
			$str .= $this->getDelay()*1000;
		$str .= ');';
		return $str;
	}
}

