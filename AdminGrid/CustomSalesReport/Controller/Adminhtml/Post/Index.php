<?php

namespace AdminGrid\CustomSalesReport\Controller\Adminhtml\Post;

class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory = false;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('AdminGrid_CustomSalesReport::customsalesreports');
        $resultPage->getConfig()->getTitle()->prepend(__('Custom Sales Reports'));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('AdminGrid_CustomSalesReport::customsalesreports');
    }
}