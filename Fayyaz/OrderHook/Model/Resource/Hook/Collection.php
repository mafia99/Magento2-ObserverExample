<?php

namespace Fayyaz\OrderHook\Model\Resource\Hook;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    /**
     * @var string
     */
    protected $_idFieldName = 'orderhook_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('Fayyaz\OrderHook\Model\Hook', 'Fayyaz\OrderHook\Model\Resource\Hook');
    }

}
