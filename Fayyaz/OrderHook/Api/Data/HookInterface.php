<?php
namespace Fayyaz\OrderHook\Api\Data;


interface HookInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ORDERHOOK_ID = 'orderhook_id';
    const ORDER_ID = 'order_id';
    const Factor_USED    = 'factor_used';
    const OLD_TOTAL      = 'old_total';
    const NEW_TOTAL      = 'new_total';
    const CREATION_TIME = 'creation_time';
 
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    
    /**
     * Get order id
     *
     * @return int
     */
    public function getOrderId();

    /**
     * Get factor used
     *
     * @return string
     */
    public function getFactor();

    /**
     * Get old total
     *
     * @return string|null
     */
    public function getOldTotal();

    /**
     * Get new total
     *
     * @return string|null
     */
    public function getNewTotal();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();


    /**
     * Set ID
     *
     * @param int $id
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setId($id);
    
    /**
     * Set order id
     *
     * @param int $id
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setOrderId($id);

    /**
     * Set Factor
     *
     * @param string $factor_used
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setFactor($factor_used);

    /**
     * Set old total
     *
     * @param string $old_total
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setOldTotal($old_total);

    /**
     * Set new total
     *
     * @param string $new_total
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setNewTotal($new_total);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Fayyaz\OrderHook\Api\Data\HookInterface
     */
    public function setCreationTime($creationTime);

    
}