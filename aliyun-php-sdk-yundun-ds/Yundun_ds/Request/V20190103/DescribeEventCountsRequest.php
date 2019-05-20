<?php

namespace Yundun_ds\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeEventCounts
 *
 * @method string getTypeCode()
 * @method string getSourceIp()
 * @method string getFeatureType()
 * @method string getCountType()
 * @method string getDays()
 * @method string getLang()
 */
class DescribeEventCountsRequest extends \RpcAcsRequest
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
            'Yundun-ds',
            '2019-01-03',
            'DescribeEventCounts',
            'sddp'
        );
    }

    /**
     * @param string $typeCode
     *
     * @return $this
     */
    public function setTypeCode($typeCode)
    {
        $this->requestParameters['TypeCode'] = $typeCode;
        $this->queryParameters['TypeCode'] = $typeCode;

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
     * @param string $featureType
     *
     * @return $this
     */
    public function setFeatureType($featureType)
    {
        $this->requestParameters['FeatureType'] = $featureType;
        $this->queryParameters['FeatureType'] = $featureType;

        return $this;
    }

    /**
     * @param string $countType
     *
     * @return $this
     */
    public function setCountType($countType)
    {
        $this->requestParameters['CountType'] = $countType;
        $this->queryParameters['CountType'] = $countType;

        return $this;
    }

    /**
     * @param string $days
     *
     * @return $this
     */
    public function setDays($days)
    {
        $this->requestParameters['Days'] = $days;
        $this->queryParameters['Days'] = $days;

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
}
