<?php
namespace Poonam\Weeko\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use \Magento\Framework\Model\ResourceModel\Db\Context;

class Pet extends AbstractDb{
    protected function _construct(){
        $this->_init('customer_pet', 'entity_id');
    }
    public function __construct(Context $context){
        parent::__construct($context);
        return;
    }
}
?>
