<?php
namespace Australia\Demo\Setup;

use \Magento\Eav\Setup\EavSetup;
use \Magento\Eav\Setup\EavSetupFactory;
use \Magento\Framework\Setup\InstallDataInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\ModuleDataSetupInterface;
use \Magento\Eav\Model\Config;
use \Magento\Customer\Model\Customer;

class InstallData implements InstallDataInterface{
    private $_eavSetupFactory;
    private $_eavConfig;
    public function __construct(EavSetupFactory $eavSetupFactory, Config $eavConfig){
        $this->_eavSetupFactory = $eavSetupFactory;
        $this->_eavConfig = $eavConfig;
    }
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context){
        $eavSetup = $this->_eavSetupFactory->create(['setup'=>$setup]);
        $eavSetup->addAttribute(\Magento\Customer\Model\Customer::ENTITY,'pet',
        [
            'type' => 'varchar',
            'label' => 'Pet Name',
            'input' => 'text',
            'system' => 0,
            'user_defined' => true,
            'required' =>false,
            'position' => 999,
            'visible' => true
        ]);

        $pet = $this->_eavConfig->getAttribute(Customer::ENTITY,'pet');
        $pet->setData('used_in_forms',['adminhtml_customer']);
        $pet->save();
    }
}
?>
