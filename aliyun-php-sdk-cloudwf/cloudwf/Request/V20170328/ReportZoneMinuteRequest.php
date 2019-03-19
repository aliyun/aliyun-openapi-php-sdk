<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ReportZoneMinute
 *
 * @method string getBeginDate()
 * @method string getEndDate()
 * @method string getAgsid()
 */
class ReportZoneMinuteRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'ReportZoneMinute',
            'cloudwf'
        );
    }

    /**
     * @param string $beginDate
     *
     * @return $this
     */
    public function setBeginDate($beginDate)
    {
        $this->requestParameters['BeginDate'] = $beginDate;
        $this->queryParameters['BeginDate'] = $beginDate;

        return $this;
    }

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->requestParameters['EndDate'] = $endDate;
        $this->queryParameters['EndDate'] = $endDate;

        return $this;
    }

    /**
     * @param string $agsid
     *
     * @return $this
     */
    public function setAgsid($agsid)
    {
        $this->requestParameters['Agsid'] = $agsid;
        $this->queryParameters['Agsid'] = $agsid;

        return $this;
    }
}
