<?php
namespace Australia\Mygrid\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
class Index extends Action{
    protected $_pageFactory;

    public function __construct(Context $context,PageFactory $pageFactory){
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
        return;
    }
    public function execute(){
        echo "i m here, and trust on your self.";
        exit;
    }
}
?>
