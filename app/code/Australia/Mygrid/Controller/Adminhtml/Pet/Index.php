<?php
namespace Australia\Mygrid\Controller\Adminhtml\Pet;

class Index extends \Magento\Backend\App\Action{
    protected $_resultPageFactory =  false;
    protected __construct(\Magento\Backend\App\Action\Context $context , \Magento\Framework\View\Result\PageFactory $pageFactory){
        $this->_resultPageFactory = $pageFactory;
        parent::__construct($context);
    }
    
    public function execute(){
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Posts'));
        return $resultPage;
    }
}
?>