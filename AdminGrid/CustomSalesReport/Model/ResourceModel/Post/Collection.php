<?php
namespace AdminGrid\CustomSalesReport\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';

    protected function _construct()
    {
        $this->_init(\AdminGrid\CustomSalesReport\Model\Post::class, \AdminGrid\CustomSalesReport\Model\ResourceModel\Post::class);
    }

    // public function abcd(){
    //     return '1234';
    // }

}
