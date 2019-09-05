<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ExpandCluster
 *
 * @method string getcount()
 * @method string getmodel()
 * @method string getuserVSwitch()
 * @method string getclusterId()
 */
class ExpandClusterRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/clusters/[clusterId]/expand';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'foas',
            '2018-11-11',
            'ExpandCluster',
            'foas'
        );
    }

    /**
     * @param string $count
     *
     * @return $this
     */
    public function setcount($count)
    {
        $this->requestParameters['count'] = $count;
        $this->queryParameters['count'] = $count;

        return $this;
    }

    /**
     * @param string $model
     *
     * @return $this
     */
    public function setmodel($model)
    {
        $this->requestParameters['model'] = $model;
        $this->queryParameters['model'] = $model;

        return $this;
    }

    /**
     * @param string $userVSwitch
     *
     * @return $this
     */
    public function setuserVSwitch($userVSwitch)
    {
        $this->requestParameters['userVSwitch'] = $userVSwitch;
        $this->queryParameters['userVSwitch'] = $userVSwitch;

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
        $this->pathParameters['clusterId'] = $clusterId;

        return $this;
    }
}
