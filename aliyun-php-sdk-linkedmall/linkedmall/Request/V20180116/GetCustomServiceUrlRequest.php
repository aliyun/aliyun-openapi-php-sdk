<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetCustomServiceUrl
 *
 * @method string getNick()
 * @method string getSellerId()
 * @method string getCuid()
 * @method string getThirdPartyUserId()
 * @method string getBizUid()
 * @method string getBizId()
 * @method string getUseAnonymousTbAccount()
 */
class GetCustomServiceUrlRequest extends \RpcAcsRequest
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
            'GetCustomServiceUrl',
            'linkedmall'
        );
    }

    /**
     * @param string $nick
     *
     * @return $this
     */
    public function setNick($nick)
    {
        $this->requestParameters['Nick'] = $nick;
        $this->queryParameters['Nick'] = $nick;

        return $this;
    }

    /**
     * @param string $sellerId
     *
     * @return $this
     */
    public function setSellerId($sellerId)
    {
        $this->requestParameters['SellerId'] = $sellerId;
        $this->queryParameters['SellerId'] = $sellerId;

        return $this;
    }

    /**
     * @param string $cuid
     *
     * @return $this
     */
    public function setCuid($cuid)
    {
        $this->requestParameters['Cuid'] = $cuid;
        $this->queryParameters['Cuid'] = $cuid;

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
