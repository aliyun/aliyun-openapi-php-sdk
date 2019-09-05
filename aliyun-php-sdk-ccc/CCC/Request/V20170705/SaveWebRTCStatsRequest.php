<?php

namespace CCC\Request\V20170705;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveWebRTCStats
 *
 * @method string getCallId()
 * @method string getRecordTime()
 * @method string getCallStartTime()
 * @method string getUid()
 * @method string getInstanceId()
 * @method string getStats()
 * @method string getTenantId()
 * @method string getCalleeNumber()
 * @method string getCallerNumber()
 */
class SaveWebRTCStatsRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'SaveWebRTCStats'
        );
    }

    /**
     * @param string $callId
     *
     * @return $this
     */
    public function setCallId($callId)
    {
        $this->requestParameters['CallId'] = $callId;
        $this->queryParameters['CallId'] = $callId;

        return $this;
    }

    /**
     * @param string $recordTime
     *
     * @return $this
     */
    public function setRecordTime($recordTime)
    {
        $this->requestParameters['RecordTime'] = $recordTime;
        $this->queryParameters['RecordTime'] = $recordTime;

        return $this;
    }

    /**
     * @param string $callStartTime
     *
     * @return $this
     */
    public function setCallStartTime($callStartTime)
    {
        $this->requestParameters['CallStartTime'] = $callStartTime;
        $this->queryParameters['CallStartTime'] = $callStartTime;

        return $this;
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->requestParameters['Uid'] = $uid;
        $this->queryParameters['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @param string $stats
     *
     * @return $this
     */
    public function setStats($stats)
    {
        $this->requestParameters['Stats'] = $stats;
        $this->queryParameters['Stats'] = $stats;

        return $this;
    }

    /**
     * @param string $tenantId
     *
     * @return $this
     */
    public function setTenantId($tenantId)
    {
        $this->requestParameters['TenantId'] = $tenantId;
        $this->queryParameters['TenantId'] = $tenantId;

        return $this;
    }

    /**
     * @param string $calleeNumber
     *
     * @return $this
     */
    public function setCalleeNumber($calleeNumber)
    {
        $this->requestParameters['CalleeNumber'] = $calleeNumber;
        $this->queryParameters['CalleeNumber'] = $calleeNumber;

        return $this;
    }

    /**
     * @param string $callerNumber
     *
     * @return $this
     */
    public function setCallerNumber($callerNumber)
    {
        $this->requestParameters['CallerNumber'] = $callerNumber;
        $this->queryParameters['CallerNumber'] = $callerNumber;

        return $this;
    }
}
