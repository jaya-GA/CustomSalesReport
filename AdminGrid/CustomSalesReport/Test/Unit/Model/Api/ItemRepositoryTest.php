<?php

namespace AdminGrid\CustomSalesReport\Test\Unit\Model\Api;

use AdminGrid\CustomSalesReport\Model\Api\ItemRepository;
use AdminGrid\CustomSalesReport\Model\ResourceModel\Post\CollectionFactory;

class ItemRepositoryTest extends \PHPUnit\Framework\TestCase
{
    protected $itemRepository;

    protected $collectionMock;

    public function setUp(): void
    {
        $this->collectionMock = $this->createMock(CollectionFactory::class);
       
        // $this->collectionMock = $this->getMockBuilder(CollectionFactory::class)
        //     ->disableOriginalConstructor()
        //     ->setMethods(['getList'])
        //     ->getMockForAbstractClass();
        $this->itemRepository = new ItemRepository(
            $this->collectionMock,
        );
    }
    public function tearDown(): void
    {
        unset(
            $this->collectionMock,
        );
    }

    public function testgetList()
    {
        // $list=
        $this->collectionMock->expects($this->any())
            ->method('create')
            ->willReturnSelf();
        $this->collectionMock->expects($this->any())
            ->method('getItems')
            ->willReturnSelf();
        // self::assertEquals($list, $this->itemRepository->getList());
    }
}
