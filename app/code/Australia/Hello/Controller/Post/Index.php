<?php
namespace Australia\Hello\Controller\Post;

use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Framework\App\Action\Action{
    protected $_pageFactory ;
    public function __construct(Context $context,PageFactory $pageFactory){
        $this->_pageFactory = $pageFactory;

        return parent::__construct($context);
    }
    public function execute(){
        $object = $this->_pageFactory->create();
        return $object;
    }
}
?>
