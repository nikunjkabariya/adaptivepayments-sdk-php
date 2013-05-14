<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * The result of a payment execution. 
 */
class ExecutePaymentResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ResponseEnvelope	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $paymentExecStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\PayErrorList	 
	 */ 
	public $payErrorList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\PostPaymentDisclosureList	 
	 */ 
	public $postPaymentDisclosureList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ErrorData	 
	 */ 
	public $error;


}
