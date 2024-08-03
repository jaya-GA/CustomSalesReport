<?php
namespace AdminGrid\CustomSalesReport\Model;
class Post extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init(\AdminGrid\CustomSalesReport\Model\ResourceModel\Post::class);
    }

    // public function getAcbd(){
    //     return 123;
    // }
}