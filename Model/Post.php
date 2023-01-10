<?php

declare(strict_types=1);

namespace Mageplaza\Blog\Model;

use Magento\Framework\Model\AbstractModel;
use Mageplaza\Blog\Model\ResourceModel\Post as PostResource; 

class Post extends AbstractModel
{
    protected function _contruct()
    {
        $this->_init(resourceModel: PostResource::class);
        parent::_contruct(); 
    }
}