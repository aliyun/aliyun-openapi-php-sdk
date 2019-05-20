<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of FillLogistics
 *
 * @method string getBizId()
 * @method string getLogistics()
 */
class FillLogisticsRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'FillLogistics',
            'trademark'
        );
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $logistics
     *
     * @return $this
     */
    public function setLogistics($logistics)
    {
        $this->requestParameters['Logistics'] = $logistics;
        $this->queryParameters['Logistics'] = $logistics;

        return $this;
    }
}
