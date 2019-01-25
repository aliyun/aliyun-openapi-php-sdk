<?php

namespace Chatbot\Request\V20171011;

/**
 * Request of CreateCategory
 *
 * @method string getParentCategoryId()
 * @method string getName()
 */
class CreateCategoryRequest extends \RpcAcsRequest
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
            'CreateCategory',
            'beebot'
        );
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

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }
}
