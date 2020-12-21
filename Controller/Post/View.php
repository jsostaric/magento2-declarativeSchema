<?php

namespace Inchoo\DeclarativeSchema\Controller\Post;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;

class View extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    protected $postRegistry;

    public function __construct(Context $context, PageFactory $resultPageFactory, Registry $postRegistry)
    {
        parent::__construct($context);
        $this->postRegistry = $postRegistry;
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $this->postRegistry->register('inchoo_post_id', $id);

        return $this->resultPageFactory->create();
    }
}
