<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeAlarmEventList
 *
 * @method string getAlarmEventName()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getAlarmEventType()
 * @method string getDealed()
 * @method string getFrom()
 * @method string getRemark()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getLevels()
 */
class DescribeAlarmEventListRequest extends \RpcAcsRequest
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
            'DescribeAlarmEventList',
            'vipaegis'
        );
    }

    /**
     * @param string $alarmEventName
     *
     * @return $this
     */
    public function setAlarmEventName($alarmEventName)
    {
        $this->requestParameters['AlarmEventName'] = $alarmEventName;
        $this->queryParameters['AlarmEventName'] = $alarmEventName;

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
     * @param string $alarmEventType
     *
     * @return $this
     */
    public function setAlarmEventType($alarmEventType)
    {
        $this->requestParameters['AlarmEventType'] = $alarmEventType;
        $this->queryParameters['AlarmEventType'] = $alarmEventType;

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
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $levels
     *
     * @return $this
     */
    public function setLevels($levels)
    {
        $this->requestParameters['Levels'] = $levels;
        $this->queryParameters['Levels'] = $levels;

        return $this;
    }
}
