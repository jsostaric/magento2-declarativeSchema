<?php


namespace Inchoo\DeclarativeSchema\Model\ResourceModel\Comment;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Inchoo\DeclarativeSchema\Model\Comment::class,
            \Inchoo\DeclarativeSchema\Model\ResourceModel\Comment::class
        );
    }
}
