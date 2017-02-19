<?php

namespace Fayyaz\OrderHook\Observer;

use Fayyaz\OrderHook\Api\Data\HookInterface;
use Fayyaz\OrderHook\Model\Resource\Factor\Collection as HookCollection;
use Magento\Framework\Event\ObserverInterface;

class OrderObserver implements ObserverInterface {

    protected $_hookFactory;
    protected $_scopeConfig;

    public function __construct(\Fayyaz\OrderHook\Model\Resource\Hook\CollectionFactory $hook, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig) {
        //Observer initialization code...
        //You can use dependency injection to get any class this observer may need.
        $this->_hookFactory = $hook;
        $this->_scopeConfig = $scopeConfig;
    }

    public function execute(\Magento\Framework\Event\Observer $observer) {
        $order = $observer->getEvent()->getOrder();
        $grandTotal = $order->getGrandTotal();

        $decimalFactor = $this->_scopeConfig->getValue('orderhook/options/decimal_factor', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        $hookStatus = $this->_scopeConfig->getValue('orderhook/options/hook_status', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);


        if ($hookStatus) {

            if (!$decimalFactor) {
                $decimalFactor = 1;
            }
            $newTotal = $grandTotal * $decimalFactor;
            
            $model = $this->_hookFactory->create()->getNewEmptyItem()->setData(array(
                'order_id' => $order->getIncrementId(),
                'factor_used' => $decimalFactor,
                'old_total' => $grandTotal,
                'new_total' => $newTotal,
            ));

            $model->save();
        }
    }

}
