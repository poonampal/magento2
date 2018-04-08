<?php
namespace Australia\Hello\Model\ResourceModel;
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    public function _construct(){
        $this->_init('hello_post','post_id');
    }
    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context){
        parent::__construct($context);
    }
}
?>
