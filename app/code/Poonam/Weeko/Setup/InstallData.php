<?php 
namespace Poonam\Weeko\Setup;

use \Magento\Framework\Setup\InstallDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;
class InstallData implements InstallDataInterface{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context){
        $setup->startSetup();
        $data = [
            ['name' => 'Dog'],
            ['name' => 'Cat'],
            ['name' => 'Parrot'],
            ['name' => 'Rabbit'],
        ];
        $table = $setup->getTable('customer_pet');
        $setup->getConnection()->insertMultiple($table,$data);
        $setup->endSetup();
    }
}
?>
