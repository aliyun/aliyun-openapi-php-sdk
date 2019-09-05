<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateProject
 *
 * @method string getmanagerIds()
 * @method string getorderId()
 * @method string getname()
 * @method string getdescription()
 * @method string getclusterId()
 * @method string getdeployType()
 */
class CreateProjectRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/projects';

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
            'foas',
            '2018-11-11',
            'CreateProject',
            'foas'
        );
    }

    /**
     * @param string $managerIds
     *
     * @return $this
     */
    public function setmanagerIds($managerIds)
    {
        $this->requestParameters['managerIds'] = $managerIds;
        $this->queryParameters['managerIds'] = $managerIds;

        return $this;
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setorderId($orderId)
    {
        $this->requestParameters['orderId'] = $orderId;
        $this->queryParameters['orderId'] = $orderId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setname($name)
    {
        $this->requestParameters['name'] = $name;
        $this->queryParameters['name'] = $name;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setdescription($description)
    {
        $this->requestParameters['description'] = $description;
        $this->queryParameters['description'] = $description;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setclusterId($clusterId)
    {
        $this->requestParameters['clusterId'] = $clusterId;
        $this->queryParameters['clusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $deployType
     *
     * @return $this
     */
    public function setdeployType($deployType)
    {
        $this->requestParameters['deployType'] = $deployType;
        $this->queryParameters['deployType'] = $deployType;

        return $this;
    }
}
