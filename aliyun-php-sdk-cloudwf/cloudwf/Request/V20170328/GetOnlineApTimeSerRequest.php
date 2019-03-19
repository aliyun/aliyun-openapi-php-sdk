<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetOnlineApTimeSer
 *
 * @method string getZoomStart()
 * @method string getCompanyId()
 * @method string getApgroupId()
 * @method string getStart()
 * @method string getZoomEnd()
 * @method string getEnd()
 */
class GetOnlineApTimeSerRequest extends \RpcAcsRequest
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
            'GetOnlineApTimeSer',
            'cloudwf'
        );
    }

    /**
     * @param string $zoomStart
     *
     * @return $this
     */
    public function setZoomStart($zoomStart)
    {
        $this->requestParameters['ZoomStart'] = $zoomStart;
        $this->queryParameters['ZoomStart'] = $zoomStart;

        return $this;
    }

    /**
     * @param string $companyId
     *
     * @return $this
     */
    public function setCompanyId($companyId)
    {
        $this->requestParameters['CompanyId'] = $companyId;
        $this->queryParameters['CompanyId'] = $companyId;

        return $this;
    }

    /**
     * @param string $apgroupId
     *
     * @return $this
     */
    public function setApgroupId($apgroupId)
    {
        $this->requestParameters['ApgroupId'] = $apgroupId;
        $this->queryParameters['ApgroupId'] = $apgroupId;

        return $this;
    }

    /**
     * @param string $start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->requestParameters['Start'] = $start;
        $this->queryParameters['Start'] = $start;

        return $this;
    }

    /**
     * @param string $zoomEnd
     *
     * @return $this
     */
    public function setZoomEnd($zoomEnd)
    {
        $this->requestParameters['ZoomEnd'] = $zoomEnd;
        $this->queryParameters['ZoomEnd'] = $zoomEnd;

        return $this;
    }

    /**
     * @param string $end
     *
     * @return $this
     */
    public function setEnd($end)
    {
        $this->requestParameters['End'] = $end;
        $this->queryParameters['End'] = $end;

        return $this;
    }
}
