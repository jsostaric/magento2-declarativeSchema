<?php

namespace Inchoo\DeclarativeSchema\Controller\Post;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class ListAction
 * @package Inchoo\DeclarativeSchema\Controller\Index
 *
 * List is reserved keyword in PHP, so we're using Action suffix in controller name !!
 */
class ListAction extends Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();

        return $resultPage;
    }
}
