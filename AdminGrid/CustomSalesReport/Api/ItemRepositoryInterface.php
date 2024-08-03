<?php

namespace AdminGrid\CustomSalesReport\Api;

interface ItemRepositoryInterface
{
	/**
	 * @return \AdminGrid\CustomSalesReport\Api\Data\PostInterface[]
	 */
	public function getList();
}