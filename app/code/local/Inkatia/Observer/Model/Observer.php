<?php
class Inkatia_Observer_Model_Observer
{
	public function callObserver($observer)
	{
		/*
		 * Get Invoice, Get Order, Do Whatever you wanna do!
		 */
		$invoice = $observer->getEvent()->getInvoice();
		$order   = $observer->getEvent()->getOrder();
		
		Mage::log("Observer: working perfectly!");
		
		
	}
}