<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetClusterMetrics
 *
 * @method string getclusterId()
 * @method string getmetricJson()
 */
class GetClusterMetricsRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/clusters/[clusterId]/metrics';

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
            'GetClusterMetrics',
            'foas'
        );
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

    /**
     * @param string $metricJson
     *
     * @return $this
     */
    public function setmetricJson($metricJson)
    {
        $this->requestParameters['metricJson'] = $metricJson;
        $this->queryParameters['metricJson'] = $metricJson;

        return $this;
    }
}
