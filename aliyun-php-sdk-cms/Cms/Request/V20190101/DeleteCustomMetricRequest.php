<?php

namespace Cms\Request\V20190101;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteCustomMetric
 *
 * @method string getGroupId()
 * @method string getMetricName()
 * @method string getUUID()
 * @method string getMd5()
 */
class DeleteCustomMetricRequest extends \RpcAcsRequest
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
            'Cms',
            '2019-01-01',
            'DeleteCustomMetric',
            'cms'
        );
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $metricName
     *
     * @return $this
     */
    public function setMetricName($metricName)
    {
        $this->requestParameters['MetricName'] = $metricName;
        $this->queryParameters['MetricName'] = $metricName;

        return $this;
    }

    /**
     * @param string $uUID
     *
     * @return $this
     */
    public function setUUID($uUID)
    {
        $this->requestParameters['UUID'] = $uUID;
        $this->queryParameters['UUID'] = $uUID;

        return $this;
    }

    /**
     * @param string $md5
     *
     * @return $this
     */
    public function setMd5($md5)
    {
        $this->requestParameters['Md5'] = $md5;
        $this->queryParameters['Md5'] = $md5;

        return $this;
    }
}
