<?php
namespace Australia\Demo\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
class Demo extends Template{
    public function __construct(Context $context){
        parent::__construct($context);
    }
    public function checkDemo(){
        return __('Hi Demo');
    }
}
?>
