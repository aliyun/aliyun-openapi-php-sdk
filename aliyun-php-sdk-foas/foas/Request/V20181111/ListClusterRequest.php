<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListCluster
 *
 * @method string getdisplayName()
 * @method string getpageSize()
 * @method string getpageIndex()
 * @method string getclusterId()
 * @method string getstate()
 * @method string getregion()
 */
class ListClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/clusters';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ListCluster',
            'foas'
        );
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function setdisplayName($displayName)
    {
        $this->requestParameters['displayName'] = $displayName;
        $this->queryParameters['displayName'] = $displayName;

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
     * @param string $state
     *
     * @return $this
     */
    public function setstate($state)
    {
        $this->requestParameters['state'] = $state;
        $this->queryParameters['state'] = $state;

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
}
