<?php
namespace Poonam\Weeko\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\Exception\LocalizedException;
use \Magento\Framework\Registry;
class Index extends Action{
    protected $_pageFactory = '';
    protected $_petFactory = '';
    public function __construct(Context $context , PageFactory $pageFactory, \Poonam\Weeko\Model\PetFactory $petFactory){
        $this->_pageFactory = $pageFactory;
        $this->_petFactory = $petFactory;
        parent::__construct($context);
        return;
    }
    public function execute(){
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend('Week One');
        $petObject = $this->_petFactory->create();
        $petCollection = $petObject->getCollection();
        //var_dump($petCollection->getFirstItem());
        return $resultPage;
    }
}
?>
