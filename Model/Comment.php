<?php


namespace Inchoo\DeclarativeSchema\Model;


use Magento\Framework\Model\AbstractModel;

class Comment extends AbstractModel
{
    public function __construct()
    {
        $this->_init(\Inchoo\DeclarativeSchema\Model\ResourceModel\Comment::class);
    }
}
