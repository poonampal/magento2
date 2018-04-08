<?php
namespace Australia\Hello\Setup;

use \Magento\Framework\Setup\UpgradeDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

class UpgradeData implements UpgradeDataInterface{
    public function upgrade(ModuleDataSetupInterface $setup,ModuleContextInterface $context){
        $setup->startSetup();
        if($context->getVersion() && version_compare($context->getVersion(),'1.1.0') < 0){
            $tableName = $setup->getTable('hello_post');
            $data = [['name'=>'Name1','url_key'=>'post1','post_content'=>'testing post content','tags'=>'magento','status'=>1,'featured_image'=>'image1'],
['name'=>'Name2','url_key'=>'post2','post_content'=>'testing post content','tags'=>'magento','status'=>1,'featured_image'=>'image2']];
            $setup->getConnection()->insertMultiple($tableName,$data);
        }
        $setup->endSetup();
    }
}
?>
