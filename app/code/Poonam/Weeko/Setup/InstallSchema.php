<?php
namespace Poonam\Weeko\Setup;
use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;
use \Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context){
        $setup->startSetup();
        if($setup->getConnection()->isTableExists($setup->getTable('customet_pet')) != true){
            $table = $setup->getConnection()->newTable($setup->getTable('customer_pet'))
            ->addColumn('entity_id',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,null,['identity'=>true,'primary'=> true,'unsigned'=>true,'nullable'=>false],'Entity Id')
            ->addColumn('name',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,255,['nullable'=>false],'Name')
            ->addColumn('sort',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,null,['nullable'=>false],'Sort Order')
            ->addColumn('created_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,null,['default'=>\Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],'Created At')
            ->addColumn('updated_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,null,['default'=>\Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],'Updated At')
            ->addIndex($setup->getIdxName($setup->getTable('customer_pet'),['sort']),['sort']);
            $setup->getConnection()->createTable($table);
        }
        $setup->endSetup();
    }
}
?>
