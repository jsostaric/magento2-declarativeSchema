<?php


namespace Inchoo\DeclarativeSchema\Block;


use Inchoo\DeclarativeSchema\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\View\Element\Template;

class ListBlock extends \Magento\Framework\View\Element\Template
{
    protected $postCollectionFactory;

    public function __construct(Template\Context $context, CollectionFactory $postCollectionFactory, array $data = [])
    {
        parent::__construct($context, $data);
        $this->postCollectionFactory = $postCollectionFactory;
    }

    public function getList()
    {
        $postCollection = $this->postCollectionFactory->create();
        $postCollection->setOrder('post_id', 'desc')
            ->setPageSize(10);
        return $postCollection;
    }
}
