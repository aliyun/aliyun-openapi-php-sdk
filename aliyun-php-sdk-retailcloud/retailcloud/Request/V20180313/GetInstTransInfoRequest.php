<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetInstTransInfo
 *
 * @method string getaliyunUid()
 * @method string getaliyunEquipId()
 * @method string getaliyunCommodityCode()
 */
class GetInstTransInfoRequest extends \RpcAcsRequest
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
            'retailcloud',
            '2018-03-13',
            'GetInstTransInfo',
            'retailcloud'
        );
    }

    /**
     * @param string $aliyunUid
     *
     * @return $this
     */
    public function setaliyunUid($aliyunUid)
    {
        $this->requestParameters['aliyunUid'] = $aliyunUid;
        $this->queryParameters['aliyunUid'] = $aliyunUid;

        return $this;
    }

    /**
     * @param string $aliyunEquipId
     *
     * @return $this
     */
    public function setaliyunEquipId($aliyunEquipId)
    {
        $this->requestParameters['aliyunEquipId'] = $aliyunEquipId;
        $this->queryParameters['aliyunEquipId'] = $aliyunEquipId;

        return $this;
    }

    /**
     * @param string $aliyunCommodityCode
     *
     * @return $this
     */
    public function setaliyunCommodityCode($aliyunCommodityCode)
    {
        $this->requestParameters['aliyunCommodityCode'] = $aliyunCommodityCode;
        $this->queryParameters['aliyunCommodityCode'] = $aliyunCommodityCode;

        return $this;
    }
}
