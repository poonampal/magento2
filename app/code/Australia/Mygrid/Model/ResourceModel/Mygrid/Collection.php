<?php
namespace Australia\Mygrid\Model\ResourceModel\Mygrid;
class Collection extends Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection{
    $_eventPrefix = 'australia_mygrid_collection';
    $_eventObject ='australia_mygrid_collection';
    protected _construct(){
        $this->_init('Australia\Mygrid\Model\Mygrid','Australia\Mygrid\Model\ResourceModel\Mygrid');
    }
}
?>
