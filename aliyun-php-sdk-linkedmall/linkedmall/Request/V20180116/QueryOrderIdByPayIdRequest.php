<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryOrderIdByPayId
 *
 * @method string getThirdPartyUserId()
 * @method string getBizUid()
 * @method string getPaymentId()
 * @method string getBizId()
 * @method string getUseAnonymousTbAccount()
 */
class QueryOrderIdByPayIdRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'QueryOrderIdByPayId',
            'linkedmall'
        );
    }

    /**
     * @param string $thirdPartyUserId
     *
     * @return $this
     */
    public function setThirdPartyUserId($thirdPartyUserId)
    {
        $this->requestParameters['ThirdPartyUserId'] = $thirdPartyUserId;
        $this->queryParameters['ThirdPartyUserId'] = $thirdPartyUserId;

        return $this;
    }

    /**
     * @param string $bizUid
     *
     * @return $this
     */
    public function setBizUid($bizUid)
    {
        $this->requestParameters['BizUid'] = $bizUid;
        $this->queryParameters['BizUid'] = $bizUid;

        return $this;
    }

    /**
     * @param string $paymentId
     *
     * @return $this
     */
    public function setPaymentId($paymentId)
    {
        $this->requestParameters['PaymentId'] = $paymentId;
        $this->queryParameters['PaymentId'] = $paymentId;

        return $this;
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
     * @param string $useAnonymousTbAccount
     *
     * @return $this
     */
    public function setUseAnonymousTbAccount($useAnonymousTbAccount)
    {
        $this->requestParameters['UseAnonymousTbAccount'] = $useAnonymousTbAccount;
        $this->queryParameters['UseAnonymousTbAccount'] = $useAnonymousTbAccount;

        return $this;
    }
}
