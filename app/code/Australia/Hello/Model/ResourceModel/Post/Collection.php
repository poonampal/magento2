<?php
namespace Australia\Hello\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'hello_post_collection';
    protected $_eventObject = 'post_collection';
    protected function _construct(){
        $this->_init('Australia\Hello\Model\Post','Australia\Hello\Model\ResourceModel\Post');
    }
}
?>