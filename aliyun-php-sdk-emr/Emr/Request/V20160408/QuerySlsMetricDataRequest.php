<?php

namespace Emr\Request\V20160408;

/**
 * Request of QuerySlsMetricData
 *
 * @method string getResourceOwnerId()
 * @method string getPeriod()
 * @method string getClusterId()
 * @method string getStartTimeStamp()
 * @method string getMetricName()
 * @method string getHostRole()
 * @method string getEndTimeStamp()
 */
class QuerySlsMetricDataRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'QuerySlsMetricData',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $startTimeStamp
     *
     * @return $this
     */
    public function setStartTimeStamp($startTimeStamp)
    {
        $this->requestParameters['StartTimeStamp'] = $startTimeStamp;
        $this->queryParameters['StartTimeStamp'] = $startTimeStamp;

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
     * @param string $hostRole
     *
     * @return $this
     */
    public function setHostRole($hostRole)
    {
        $this->requestParameters['HostRole'] = $hostRole;
        $this->queryParameters['HostRole'] = $hostRole;

        return $this;
    }

    /**
     * @param string $endTimeStamp
     *
     * @return $this
     */
    public function setEndTimeStamp($endTimeStamp)
    {
        $this->requestParameters['EndTimeStamp'] = $endTimeStamp;
        $this->queryParameters['EndTimeStamp'] = $endTimeStamp;

        return $this;
    }
}
