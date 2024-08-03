<?php 

namespace AdminGrid\CustomSalesReport\Api\Data;

interface PostInterface
{
	/**
	 * @return int
	 */
	public function getOrderId();

	/**
	* @return string
	*/
	public function getName();

	/**
	 * @return int
	 */
	public function getQuantitySold();

	/**
	 * @return int
	 */
	public function getTotalRevenue();

	/**
	 * @return date
	 */
	public function getSaleDate();
	
}
