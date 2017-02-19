<?php

namespace Fayyaz\OrderHook\Model\Config;

class Source implements \Magento\Framework\Option\ArrayInterface {

    /**
     * @return array
     */
    public function toOptionArray() {

        return [
            ['value' => 0, 'label' => __('No')],
            ['value' => 1, 'label' => __('Yes')],
        ];
    }

}
