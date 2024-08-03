<?php
namespace AdminGrid\CustomSalesReport\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('sales_order_item', 'item_id');
    }

}