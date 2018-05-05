<?php
namespace Poonam\Weeko\Model\ResourceModel\Pet;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection{
    public function _construct(){
        $this->_init('Poonam\Weeko\Model\Pet','Poonam\Weeko\Model\ResourceModel\Pet');
    }
}
?>
