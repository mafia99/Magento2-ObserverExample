<?php

namespace Fayyaz\OrderHook\Model;

use Fayyaz\OrderHook\Api\Data\HookInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Hook extends \Magento\Framework\Model\AbstractModel implements HookInterface, IdentityInterface {

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'order_hook';

    /**
     * @var string
     */
    protected $_cacheTag = 'order_hook';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'order_hook';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct() {
        $this->_init('Fayyaz\OrderHook\Model\Resource\Hook');
    }

    /**
     * Return unique ID(s) for each object in system
     *
     * @return array
     */
    public function getIdentities() {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId() {
        return $this->getData(self::ORDERHOOK_ID);
    }

    /**
     * Get order id
     *
     * @return int
     */
    public function getOrderId() {
        return $this->getData(self::ORDER_ID);
    }

    /**
     * Get factor used
     *
     * @return string
     */
    public function getFactor() {
        return $this->getData(self::Factor_USED);
    }

    /**
     * Get old total
     *
     * @return string|null
     */
    public function getOldTotal() {
        return $this->getData(self::OLD_TOTAL);
    }

    /**
     * Get new total
     *
     * @return string|null
     */
    public function getNewTotal() {
        return $this->getData(self::NEW_TOTAL);
    }

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime() {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Set ID
     *
     * @param int $id
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setId($id) {
        return $this->setData(self::ORDERHOOK_ID, $id);
    }

    /**
     * Set order id
     *
     * @param int $id
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setOrderId($id){
        return $this->setData(self::ORDER_ID, $id);
    }
    /**
     * Set Factor
     *
     * @param string $factor_used
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setFactor($factor_used) {
        return $this->setData(self::Factor_USED, $factor_used);
    }

    /**
     * Set old total
     *
     * @param string $old_total
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setOldTotal($old_total) {
        return $this->setData(self::OLD_TOTAL, $old_total);
    }

    /**
     * Set new total
     *
     * @param string $new_total
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setNewTotal($new_total) {
        return $this->setData(self::NEW_TOTAL, $new_total);
    }

    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setCreationTime($creation_time) {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

}
