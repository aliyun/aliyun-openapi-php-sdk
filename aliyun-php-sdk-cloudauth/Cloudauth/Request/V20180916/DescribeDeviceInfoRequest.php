<?php

namespace Cloudauth\Request\V20180916;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeDeviceInfo
 *
 * @method string getBizType()
 * @method string getUserDeviceId()
 * @method string getTotalCount()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getLang()
 * @method string getExpiredEndDay()
 * @method string getDeviceId()
 * @method string getExpiredStartDay()
 */
class DescribeDeviceInfoRequest extends \RpcAcsRequest
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
            'Cloudauth',
            '2018-09-16',
            'DescribeDeviceInfo',
            'cloudauth'
        );
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        $this->requestParameters['BizType'] = $bizType;
        $this->queryParameters['BizType'] = $bizType;

        return $this;
    }

    /**
     * @param string $userDeviceId
     *
     * @return $this
     */
    public function setUserDeviceId($userDeviceId)
    {
        $this->requestParameters['UserDeviceId'] = $userDeviceId;
        $this->queryParameters['UserDeviceId'] = $userDeviceId;

        return $this;
    }

    /**
     * @param string $totalCount
     *
     * @return $this
     */
    public function setTotalCount($totalCount)
    {
        $this->requestParameters['TotalCount'] = $totalCount;
        $this->queryParameters['TotalCount'] = $totalCount;

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
     * @param string $expiredEndDay
     *
     * @return $this
     */
    public function setExpiredEndDay($expiredEndDay)
    {
        $this->requestParameters['ExpiredEndDay'] = $expiredEndDay;
        $this->queryParameters['ExpiredEndDay'] = $expiredEndDay;

        return $this;
    }

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->requestParameters['DeviceId'] = $deviceId;
        $this->queryParameters['DeviceId'] = $deviceId;

        return $this;
    }

    /**
     * @param string $expiredStartDay
     *
     * @return $this
     */
    public function setExpiredStartDay($expiredStartDay)
    {
        $this->requestParameters['ExpiredStartDay'] = $expiredStartDay;
        $this->queryParameters['ExpiredStartDay'] = $expiredStartDay;

        return $this;
    }
}
