<?php
namespace Australia\Mygrid\Model\ResourceModel;

class Mygrid extends Magento\Framework\Model\ResourceModel\Db\AbstractDb{
    protected $_eventPrefix = 'austrila_mygrid_resource';
    protected $_eventObject = 'austrila_mygrid_resource';
    protected _construct(){
        $this->_init('mgrid_custom_table','entity_id');
    }
    public function __construct(Magento\Framework\Model\ResourceModel\Context $context){
        parent::__construct($context);
    }
}
?>
