<?
class Evobilis_IE6Redirect_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
     
	 $this->loadLayout(array('default'));
     $this->getLayout()->getBlock('head')->setTitle($this->__('You are using IE6. Please upgrade your browser.'));
	 $this->renderLayout();
	}
	
	
}
?>