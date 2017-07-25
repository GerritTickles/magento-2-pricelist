<?php

namespace Dealer4dealer\Pricelist\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PriceListItem extends AbstractDb
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('dealer4dealer_price_list_item', 'price_list_item_id');
    }
}
