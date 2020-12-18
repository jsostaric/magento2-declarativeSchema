<?php

namespace Inchoo\DeclarativeSchema\Controller\Test;

use Magento\Framework\App\Action\Context;

class Crud  extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Inchoo\DeclarativeSchema\Model\ResourceModel\Post
     */
    protected $postResource;

    /**
     * @var \Inchoo\DeclarativeSchema\Model\PostFactory
     */
    protected $postModelFactory;

    /**
     * Controller constructor.
     * @param Context $context
     * @param \Inchoo\DeclarativeSchema\Model\ResourceModel\Post $postResource
     * @param \Inchoo\DeclarativeSchema\Model\PostFactory $postModelFactory
     */
    public function __construct(
        Context $context,
        \Inchoo\DeclarativeSchema\Model\ResourceModel\Post $postResource,
        \Inchoo\DeclarativeSchema\Model\PostFactory $postModelFactory
    ) {
        parent::__construct($context);

        $this->postResource = $postResource;
        $this->postModelFactory = $postModelFactory;
    }

    /**
     * Controller action.
     */
    public function execute()
    {
        /**
         * New entry example
         */
        $post = $this->postModelFactory->create();
        $post->setTitle('Some fake post title');
        $post->setCreatedAt(new \DateTime('now'));
        $post->setContent('One more and done');

        $this->postResource->save($post);

        //var_dump($post); //big dump, can crash browser without xdebug
        var_dump($post->debug());


        /**
         * Load example
         */
        $post = $this->postModelFactory->create();
        $this->postResource->load($post, 1);

        if($post->getId()) {
            //check if loaded
        }

        var_dump($post->debug());
    }

}
