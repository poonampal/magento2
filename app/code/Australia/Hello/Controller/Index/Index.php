<?php
namespace Australia\Hello\Controller\Index;

use Magento\Framework\App\Action\Context;
class Index extends \Magento\Framework\App\Action\Action{
    protected $_resultFactory;
    protected $_postFactory;
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $resultFactory, \Australia\Hello\Model\PostFactory $postFactory){
        $this->_resultFactory = $resultFactory;
        $this->_postFactory = $postFactory;
        return parent::__construct($context);
    }
    
    public function execute(){
        $resultPage = $this->_resultFactory->create();
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        foreach($collection as $item){
            echo "<pre>";
			print_r($item->getData());
			echo "</pre>";
        }
        return $resultPage;
    }
}
?>
