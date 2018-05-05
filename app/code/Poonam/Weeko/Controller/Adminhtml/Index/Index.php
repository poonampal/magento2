<?php
namespace Poonam\Weeko\Controller\Adminhtml\Index;

use \Magento\Backend\App\Action;
use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index extends Action{
    protected $_pageFactory = '';
    public function __construct(Context $context, PageFactory $pageFactory){
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
        return;
    }
    public function execute(){
        $result = $this->_pageFactory->create();
        $result->getConfig()->getTitle()->prepend('Admin: Week One');
        return $result;
    }
}
?>
