<?php
namespace Poonam\Weeko\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;

class Pet extends AbstractModel implements IdentityInterface{
    protected $_eventPrefix = 'customer_pet';
    const CACHE_TAG = 'customer_pet';
    protected $_objectPrefix = 'customer_pet';
    protected function _construct(){
        $this->_init('Poonam\Weeko\Model\ResourceModel\Pet');
    }
    public function getIdentities(){
        return [self::CACHE_TAG."_". $this->getId()];
    }
    public function getDefaultValues(){
        $values = array();
        return $values;
    }
}
?>
