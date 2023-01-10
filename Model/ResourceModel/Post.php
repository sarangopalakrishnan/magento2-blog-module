<?php

declare(strict_types=1);

namespace Mageplaza\Blog\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    //provide two arguments to create contruct
    private const TABLE_NAME = 'mageplaza_blog_post';
    private const PRIMARY_KEY = 'post_id';
    protected function _contruct()
    {
        $this->_init(mainTable: self::TABLE_NAME, idFieldName: self::PRIMARY_KEY);
    
    }
}