<?php
namespace Australia\Hello\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface{
    const CACHE_TAG = 'hello_post';
    protected $_cacheTag = 'hello_post';
    protected $_eventPrefix = 'hello_post';
    protected function _construct(){
        $this->_init('Australia\Hello\Model\ResourceModel\Post');
    }
    public function getIdentities(){
        return [self::CACHE_TAG.'_'.$this->getId()];
    }
    public function getDefaultValues(){
        $values = [];
        return $values;
    }
}
?>
