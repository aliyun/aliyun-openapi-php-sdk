<?php

namespace Ccs\Request\V20171001;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryHotlineRecord
 *
 * @method string getAgentId()
 * @method string getMaxTalkDuration()
 * @method string getGroupId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNum()
 * @method string getSatisfaction()
 * @method string getMinTalkDuratoin()
 * @method string getCategoryIds()
 * @method string getVisitorProvince()
 * @method string getPageSize()
 * @method string getCallType()
 * @method string getCcsInstanceId()
 * @method string getVisitorPhone()
 * @method string getVisitorId()
 * @method string getStatus()
 */
class QueryHotlineRecordRequest extends \RpcAcsRequest
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
            'Ccs',
            '2017-10-01',
            'QueryHotlineRecord',
            'ccs'
        );
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function setAgentId($agentId)
    {
        $this->requestParameters['AgentId'] = $agentId;
        $this->queryParameters['AgentId'] = $agentId;

        return $this;
    }

    /**
     * @param string $maxTalkDuration
     *
     * @return $this
     */
    public function setMaxTalkDuration($maxTalkDuration)
    {
        $this->requestParameters['MaxTalkDuration'] = $maxTalkDuration;
        $this->queryParameters['MaxTalkDuration'] = $maxTalkDuration;

        return $this;
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
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

        return $this;
    }

    /**
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

        return $this;
    }

    /**
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $satisfaction
     *
     * @return $this
     */
    public function setSatisfaction($satisfaction)
    {
        $this->requestParameters['Satisfaction'] = $satisfaction;
        $this->queryParameters['Satisfaction'] = $satisfaction;

        return $this;
    }

    /**
     * @param string $minTalkDuratoin
     *
     * @return $this
     */
    public function setMinTalkDuratoin($minTalkDuratoin)
    {
        $this->requestParameters['MinTalkDuratoin'] = $minTalkDuratoin;
        $this->queryParameters['MinTalkDuratoin'] = $minTalkDuratoin;

        return $this;
    }

    /**
     * @param string $categoryIds
     *
     * @return $this
     */
    public function setCategoryIds($categoryIds)
    {
        $this->requestParameters['CategoryIds'] = $categoryIds;
        $this->queryParameters['CategoryIds'] = $categoryIds;

        return $this;
    }

    /**
     * @param string $visitorProvince
     *
     * @return $this
     */
    public function setVisitorProvince($visitorProvince)
    {
        $this->requestParameters['VisitorProvince'] = $visitorProvince;
        $this->queryParameters['VisitorProvince'] = $visitorProvince;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $callType
     *
     * @return $this
     */
    public function setCallType($callType)
    {
        $this->requestParameters['CallType'] = $callType;
        $this->queryParameters['CallType'] = $callType;

        return $this;
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        $this->requestParameters['CcsInstanceId'] = $ccsInstanceId;
        $this->queryParameters['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * @param string $visitorPhone
     *
     * @return $this
     */
    public function setVisitorPhone($visitorPhone)
    {
        $this->requestParameters['VisitorPhone'] = $visitorPhone;
        $this->queryParameters['VisitorPhone'] = $visitorPhone;

        return $this;
    }

    /**
     * @param string $visitorId
     *
     * @return $this
     */
    public function setVisitorId($visitorId)
    {
        $this->requestParameters['VisitorId'] = $visitorId;
        $this->queryParameters['VisitorId'] = $visitorId;

        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
