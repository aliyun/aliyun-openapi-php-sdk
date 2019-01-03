<?php

namespace aegis\Request\V20161111;

/**
 * Request of ExportSuspEvents
 *
 * @method string getTimeEnd()
 * @method string getSourceIp()
 * @method string getName()
 * @method string getDealed()
 * @method string getRemark()
 * @method string getFrom()
 * @method string getTimeStart()
 * @method string getLang()
 * @method string getLevels()
 * @method string getParentEventTypes()
 * @method string getStatus()
 */
class ExportSuspEventsRequest extends \RpcAcsRequest
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
            'ExportSuspEvents',
            'vipaegis'
        );
    }

    /**
     * @param string $timeEnd
     *
     * @return $this
     */
    public function setTimeEnd($timeEnd)
    {
        $this->requestParameters['TimeEnd'] = $timeEnd;
        $this->queryParameters['TimeEnd'] = $timeEnd;

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
     * @param string $timeStart
     *
     * @return $this
     */
    public function setTimeStart($timeStart)
    {
        $this->requestParameters['TimeStart'] = $timeStart;
        $this->queryParameters['TimeStart'] = $timeStart;

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
