<?php

namespace Emr\Request\V20160408;

/**
 * Request of QueryAlarmHistory
 *
 * @method string getCursor()
 * @method string getResourceOwnerId()
 * @method string getSize()
 * @method string getClusterId()
 * @method string getStartTimeStamp()
 * @method string getEndTimeStamp()
 */
class QueryAlarmHistoryRequest extends \RpcAcsRequest
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
            'QueryAlarmHistory',
            'emr'
        );
    }

    /**
     * @param string $cursor
     *
     * @return $this
     */
    public function setCursor($cursor)
    {
        $this->requestParameters['Cursor'] = $cursor;
        $this->queryParameters['Cursor'] = $cursor;

        return $this;
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
     * @param string $size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->requestParameters['Size'] = $size;
        $this->queryParameters['Size'] = $size;

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
