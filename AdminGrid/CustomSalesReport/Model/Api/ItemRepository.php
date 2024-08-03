<?php

namespace AdminGrid\CustomSalesReport\Model\Api;

use AdminGrid\CustomSalesReport\Api\ItemRepositoryInterface;
use AdminGrid\CustomSalesReport\Model\ResourceModel\Post\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
    private $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
