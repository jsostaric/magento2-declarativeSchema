<?php

namespace Inchoo\DeclarativeSchema\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize news Resource
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('inchoo_post', 'post_id');
    }
}
