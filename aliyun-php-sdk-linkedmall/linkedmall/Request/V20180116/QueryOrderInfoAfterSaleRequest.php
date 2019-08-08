<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryOrderInfoAfterSale
 *
 * @method string getLmOrderId()
 * @method string getThirdPartyUserId()
 * @method string getBizId()
 * @method string getUseAnonymousTbAccount()
 * @method string getChannelUserId()
 */
class QueryOrderInfoAfterSaleRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'linkedmall',
            '2018-01-16',
            'QueryOrderInfoAfterSale',
            'linkedmall'
        );
    }

    /**
     * @param string $lmOrderId
     *
     * @return $this
     */
    public function setLmOrderId($lmOrderId)
    {
        $this->requestParameters['LmOrderId'] = $lmOrderId;
        $this->queryParameters['LmOrderId'] = $lmOrderId;

        return $this;
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

    /**
     * @param string $channelUserId
     *
     * @return $this
     */
    public function setChannelUserId($channelUserId)
    {
        $this->requestParameters['ChannelUserId'] = $channelUserId;
        $this->queryParameters['ChannelUserId'] = $channelUserId;

        return $this;
    }
}
