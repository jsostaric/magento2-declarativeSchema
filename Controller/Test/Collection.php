<?php

namespace Inchoo\DeclarativeSchema\Controller\Test;

use Magento\Framework\App\Action\Context;

class Collection  extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Inchoo\DeclarativeSchema\Model\ResourceModel\Post\Collection
     */
    protected $postCollectionFactory;

    /**
     * Controller constructor.
     * @param Context $context
     * @param \Inchoo\DeclarativeSchema\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory
     */
    public function __construct(
        Context $context,
        \Inchoo\DeclarativeSchema\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory
    ) {
        parent::__construct($context);

        $this->postCollectionFactory = $postCollectionFactory;
    }

    /**
     * Controller action.
     */
    public function execute()
    {

        $postCollection = $this->postCollectionFactory->create();

        //$postCollection->addFieldToFilter('id', ['gt' => 5]]);

        foreach($postCollection as $post) {
            var_dump(get_class($post));
            var_dump($post->debug());
        }

    }

}
