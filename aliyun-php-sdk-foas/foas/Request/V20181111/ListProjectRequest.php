<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListProject
 *
 * @method string getname()
 * @method string getpageSize()
 * @method string getpageIndex()
 * @method string getclusterId()
 * @method string getregion()
 * @method string getdeployType()
 */
class ListProjectRequest extends \RoaAcsRequest
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
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ListProject',
            'foas'
        );
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
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
    {
        $this->requestParameters['pageSize'] = $pageSize;
        $this->queryParameters['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pageIndex
     *
     * @return $this
     */
    public function setpageIndex($pageIndex)
    {
        $this->requestParameters['pageIndex'] = $pageIndex;
        $this->queryParameters['pageIndex'] = $pageIndex;

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
     * @param string $region
     *
     * @return $this
     */
    public function setregion($region)
    {
        $this->requestParameters['region'] = $region;
        $this->queryParameters['region'] = $region;

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
