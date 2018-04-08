<?php
namespace Australia\Mygrid\Model;

class Mygrid extends Magento\Framework\Model\AbstractModel implements Magento\Framework\DataObject\IdentityInterface{
    const CACHE_TAG = 'austrila_mygrid_model';
    protected $_eventPrefix = 'australia_mygrid_model';
    protected $_eventObject = 'australia_mygrid_model';
    protected function _construct(){
        $this->_init('Australia\Mygrid\Model\ResourceModel\Mygrid');
    }
    
    public function getIdentities(){
        return [self::CACHE_TAG.'_'.$this->getId()];
    } 
}
?>
