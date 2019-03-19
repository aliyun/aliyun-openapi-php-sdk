<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AddApgroupConfig
 *
 * @method string getParentApgroupId()
 * @method string getName()
 * @method string getDescription()
 */
class AddApgroupConfigRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'AddApgroupConfig',
            'cloudwf'
        );
    }

    /**
     * @param string $parentApgroupId
     *
     * @return $this
     */
    public function setParentApgroupId($parentApgroupId)
    {
        $this->requestParameters['ParentApgroupId'] = $parentApgroupId;
        $this->queryParameters['ParentApgroupId'] = $parentApgroupId;

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

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }
}
