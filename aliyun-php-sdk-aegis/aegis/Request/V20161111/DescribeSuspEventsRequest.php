<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeSuspEvents
 *
 * @method string getAlarmUniqueInfo()
 * @method string getSourceIp()
 * @method string getName()
 * @method string getPageSize()
 * @method string getDealed()
 * @method string getRemark()
 * @method string getCurrentPage()
 * @method string getFrom()
 * @method string getLang()
 * @method string getLevels()
 * @method string getParentEventTypes()
 */
class DescribeSuspEventsRequest extends \RpcAcsRequest
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
            'DescribeSuspEvents',
            'vipaegis'
        );
    }

    /**
     * @param string $alarmUniqueInfo
     *
     * @return $this
     */
    public function setAlarmUniqueInfo($alarmUniqueInfo)
    {
        $this->requestParameters['AlarmUniqueInfo'] = $alarmUniqueInfo;
        $this->queryParameters['AlarmUniqueInfo'] = $alarmUniqueInfo;

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
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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

    /**
     * @param string $parentEventTypes
     *
     * @return $this
     */
    public function setParentEventTypes($parentEventTypes)
    {
        $this->requestParameters['ParentEventTypes'] = $parentEventTypes;
        $this->queryParameters['ParentEventTypes'] = $parentEventTypes;

        return $this;
    }
}
