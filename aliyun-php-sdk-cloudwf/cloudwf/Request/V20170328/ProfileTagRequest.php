<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ProfileTag
 *
 * @method string getIdtype()
 * @method string getBeginDate()
 * @method string getEndDate()
 * @method string getAppType()
 * @method string getTag()
 * @method string getAgsid()
 * @method string getAreaNumber()
 */
class ProfileTagRequest extends \RpcAcsRequest
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
            'ProfileTag',
            'cloudwf'
        );
    }

    /**
     * @param string $idtype
     *
     * @return $this
     */
    public function setIdtype($idtype)
    {
        $this->requestParameters['Idtype'] = $idtype;
        $this->queryParameters['Idtype'] = $idtype;

        return $this;
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
     * @param string $appType
     *
     * @return $this
     */
    public function setAppType($appType)
    {
        $this->requestParameters['AppType'] = $appType;
        $this->queryParameters['AppType'] = $appType;

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

    /**
     * @param string $areaNumber
     *
     * @return $this
     */
    public function setAreaNumber($areaNumber)
    {
        $this->requestParameters['AreaNumber'] = $areaNumber;
        $this->queryParameters['AreaNumber'] = $areaNumber;

        return $this;
    }
}
