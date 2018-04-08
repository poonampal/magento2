<?php
namespace Australia\Mygrid\Setup;

use \Magento\Framework\Setup\InstallDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface{
    public function install(ModuleDataSetupInterface $setup,ModuleContextInterface $context){
        $installer = $setup;
        $installer->startSetup();
        $data = [
            [
                'name' => 'Tiger',
            ],
            [
                'name' => 'Lion',
            ],
        ];
        $table = $installer->getTable('mgrid_custom_table');
        $installer->getConnection()->insertMultiple($table,$data);
        $installer->endSetup();
    }
}  
?>
