<?php
namespace Australia\Hello\Model\Indexer;

class Test implements \Magento\Framework\Indexer\ActionInterface, \Magento\Framework\Mview\ActionInterface{
    public function execute($ids){
        print_r($ids);
    }
    public function executeFull(){
        echo "execute full";
    }

}
?>
