<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeTotalStatistics
 *
 * @method string getStatusList()
 * @method string getSaleId()
 * @method string getRuleType()
 * @method string getGroupId()
 * @method string getEndTime()
 * @method string getRemark()
 * @method string getDealed()
 * @method string getCurrentPage()
 * @method string getStartTime()
 * @method string getType()
 * @method string getUuid()
 * @method string getSecureToken()
 * @method string getSourceIp()
 * @method string getWebGroupId()
 * @method string getPageSize()
 * @method string getFrom()
 * @method string getAction1()
 * @method string getTag()
 * @method string getFlow()
 * @method string getStatus()
 */
class DescribeTotalStatisticsRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'DescribeTotalStatistics',
            'vipaegis'
        );
    }

    /**
     * @param string $statusList
     *
     * @return $this
     */
    public function setStatusList($statusList)
    {
        $this->requestParameters['StatusList'] = $statusList;
        $this->queryParameters['StatusList'] = $statusList;

        return $this;
    }

    /**
     * @param string $saleId
     *
     * @return $this
     */
    public function setSaleId($saleId)
    {
        $this->requestParameters['SaleId'] = $saleId;
        $this->queryParameters['SaleId'] = $saleId;

        return $this;
    }

    /**
     * @param string $ruleType
     *
     * @return $this
     */
    public function setRuleType($ruleType)
    {
        $this->requestParameters['RuleType'] = $ruleType;
        $this->queryParameters['RuleType'] = $ruleType;

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
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

        return $this;
    }

    /**
     * @param string $dealed
     *
     * @return $this
     */
    public function setDealed($dealed)
    {
        $this->requestParameters['Dealed'] = $dealed;
        $this->queryParameters['Dealed'] = $dealed;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        $this->requestParameters['CurrentPage'] = $currentPage;
        $this->queryParameters['CurrentPage'] = $currentPage;

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
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->requestParameters['Uuid'] = $uuid;
        $this->queryParameters['Uuid'] = $uuid;

        return $this;
    }

    /**
     * @param string $secureToken
     *
     * @return $this
     */
    public function setSecureToken($secureToken)
    {
        $this->requestParameters['SecureToken'] = $secureToken;
        $this->queryParameters['SecureToken'] = $secureToken;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $webGroupId
     *
     * @return $this
     */
    public function setWebGroupId($webGroupId)
    {
        $this->requestParameters['WebGroupId'] = $webGroupId;
        $this->queryParameters['WebGroupId'] = $webGroupId;

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
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->requestParameters['From'] = $from;
        $this->queryParameters['From'] = $from;

        return $this;
    }

    /**
     * @param string $action1
     *
     * @return $this
     */
    public function setAction1($action1)
    {
        $this->requestParameters['Action1'] = $action1;
        $this->queryParameters['Action1'] = $action1;

        return $this;
    }

    /**
     * @param string $tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->requestParameters['Tag'] = $tag;
        $this->queryParameters['Tag'] = $tag;

        return $this;
    }

    /**
     * @param string $flow
     *
     * @return $this
     */
    public function setFlow($flow)
    {
        $this->requestParameters['Flow'] = $flow;
        $this->queryParameters['Flow'] = $flow;

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
