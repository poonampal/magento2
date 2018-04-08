<?php
namespace Australia\Hello\Setup;
class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface{
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup,\Magento\Framework\Setup\ModuleContextInterface $context){
        $installer = $setup;
        $installer->startSetup();
        if(!$installer->tableExists('hello_post')){
            $table = $installer->getConnection()->newTable($installer->getTable('hello_post'))
                    ->addColumn('post_id',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,null,['identity'=>true,'nullable'=>false,'primary'=>true,'unsigned'=>true],'Post ID')
                    ->addColumn('name',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,255,['nullable'=>false],'Name')
                    ->addColumn('url_key',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,255,[],'Url Key')
                    ->addColumn('post_content',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,'64k',[],'Content')
                    ->addColumn('tags',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,255,[],'Tags')
                    ->addColumn('status',\Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,1,[],'Status')
                    ->addColumn('featured_image',\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,255,[],'Featured Image')
                    ->addColumn('created_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,null,['nullable'=>false,'default'=> \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],'Created At')
                    ->addColumn('updated_at',\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,null,['nullable'=>false,'default'=> \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],'Updated At')
                    ->setComment('Hello Post Table');
            $installer->getConnection()->createTable($table);
            $installer->getConnection()->addIndex(
                $installer->getTable('hello_post'),
                $setup->getIdxName($installer->getTable('hello_post'),['name','url_key','post_content','tags','featured_image'],\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT),['name','url_key','post_content','tags','featured_image'],\Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            );

        }
        $installer->endSetup();
    }
}
?>
