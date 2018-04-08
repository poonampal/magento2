<?php
namespace Australia\Mygrid\Setup;

use \Magento\Framework\Setup\InstallSchemaInterface;
use \Magento\Framework\Setup\ModuleContextInterface;
use \Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface{
    public function install(SchemaSetupInterface $setup,ModuleContextInterface $context){
        $installer = $setup;
        $installer->startSetup();
        if($installer->getConnection()->isTableExists($installer->getTable('mgrid_custom_table') != true)){
            $table = $installer->getConnection()->newTable($installer->getTable('mgrid_custom_table'))
            ->addColumn('entity_id',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,null,
            ['identity'=>true,'primary'=>true,'unsigned'=>true,'nullable'=>false],'Entity Id')
            ->addColumn('name',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,null,['nullable'=>false],'Pet Name')
            ->addColumn('order',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,null,['nullable'=>false],'Sort')
            ->addColumn('created_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,null,['default'=>\Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],'Creation Time')
            ->addColumn('updated_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,null,['default'=>\Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],'Updation Time')
            ->addIndex($installer->getIdxName('mgrid_custom_table',['order']),['order']);
            $installer->getConnection()->createTable($table);
        }
        $installer->endSetup();
    }
}
?>