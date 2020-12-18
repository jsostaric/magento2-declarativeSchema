<?php


namespace Inchoo\DeclarativeSchema\Block;


use Inchoo\DeclarativeSchema\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\View\Element\Template;

class View extends Template
{
    protected $postCollection;
    public function __construct(Template\Context $context, CollectionFactory $postCollectionFactory, array $data = [])
    {
        parent::__construct($context, $data);
        $this->postCollection = $postCollectionFactory;
    }

    /**
     * @param $id
     * @return \Inchoo\DeclarativeSchema\Model\ResourceModel\Post\Collection
     */
    public function showPost($id)
    {
        $id = $this->getRequest()->getParam('id', $id);
        $post = $this->postCollection->create()->addFieldToFilter('post_id', ['id' => $id]);

        return $post;
    }
}
