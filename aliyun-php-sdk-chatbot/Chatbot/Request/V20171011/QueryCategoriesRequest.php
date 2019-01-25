<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of QueryCategories
 *
 * @method string getShowChildrens()
 * @method string getParentCategoryId()
 */
class QueryCategoriesRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Chatbot',
            '2017-10-11',
            'QueryCategories',
            'beebot'
        );
    }

    /**
     * @param string $showChildrens
     *
     * @return $this
     */
    public function setShowChildrens($showChildrens)
    {
        $this->requestParameters['ShowChildrens'] = $showChildrens;
        $this->queryParameters['ShowChildrens'] = $showChildrens;

        return $this;
    }

    /**
     * @param string $parentCategoryId
     *
     * @return $this
     */
    public function setParentCategoryId($parentCategoryId)
    {
        $this->requestParameters['ParentCategoryId'] = $parentCategoryId;
        $this->queryParameters['ParentCategoryId'] = $parentCategoryId;

        return $this;
    }
}
