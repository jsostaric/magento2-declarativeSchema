<?php


namespace Inchoo\DeclarativeSchema\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Comment extends AbstractDb
{
    /**
     * @return void
     */
    public function _construct()
    {
        $this->_init('inchoo_post_comments', 'comment_id');
    }
}
