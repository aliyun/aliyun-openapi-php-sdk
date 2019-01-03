<?php

namespace scdn\Request\V20171115;

/**
 * Request of DescribeScdnIpInfo
 *
 * @method string getSecurityToken()
 * @method string getIP()
 * @method string getOwnerId()
 */
class DescribeScdnIpInfoRequest extends \RpcAcsRequest
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
            'scdn',
            '2017-11-15',
            'DescribeScdnIpInfo',
            'scdn'
        );
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $iP
     *
     * @return $this
     */
    public function setIP($iP)
    {
        $this->requestParameters['IP'] = $iP;
        $this->queryParameters['IP'] = $iP;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }
}
