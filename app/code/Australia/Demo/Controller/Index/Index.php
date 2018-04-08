<?php
namespace Australia\Demo\Controller\Index;
class Index extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory = '';
    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory){
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
        return;
    }
    public function execute(){
        $resultPage = $this->_pageFactory->create();
        $demoData = new \Magento\Framework\DataObject(array('text'=>'poonam'));
        $this->_eventManager->dispatch('demo_event',['demo_text'=>$demoData]);
        echo $demoData->getText();
        return $resultPage;
    }
}

?>