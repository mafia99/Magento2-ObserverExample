<?php

namespace Fayyaz\OrderHook\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {

    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()
                ->newTable($installer->getTable('fayyaz_orderhook'))
                ->addColumn(
                        'orderhook_id', Table::TYPE_INTEGER, null, ['identity' => true, 'nullable' => false, 'primary' => true], 'Order Factor ID'
                )
                ->addColumn('order_id', Table::TYPE_INTEGER, null, [], 'Order Id')
                ->addColumn('factor_used', Table::TYPE_DECIMAL, '12,4', [], 'Factor Used')
                ->addColumn('old_total', Table::TYPE_DECIMAL, '12,4', [], 'Old Total')
                ->addColumn('new_total', Table::TYPE_DECIMAL, '12,4', [], 'New Total')
                ->addColumn('creation_time', Table::TYPE_DATETIME, null, ['nullable' => false], 'Creation Time')
                ->setComment('Fayyaz socks Order hook');

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }

}
