<?php

namespace vod\Request\V20170321;

/**
 * Request of GetCDNStatisSum
 *
 * @method string getResourceOwnerId()
 * @method string getStartStatisTime()
 * @method string getResourceOwnerAccount()
 * @method string getLevel()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getEndStatisTime()
 */
class GetCDNStatisSumRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'GetCDNStatisSum',
            'vod'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $startStatisTime
     *
     * @return $this
     */
    public function setStartStatisTime($startStatisTime)
    {
        $this->requestParameters['StartStatisTime'] = $startStatisTime;
        $this->queryParameters['StartStatisTime'] = $startStatisTime;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->requestParameters['Level'] = $level;
        $this->queryParameters['Level'] = $level;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

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

    /**
     * @param string $endStatisTime
     *
     * @return $this
     */
    public function setEndStatisTime($endStatisTime)
    {
        $this->requestParameters['EndStatisTime'] = $endStatisTime;
        $this->queryParameters['EndStatisTime'] = $endStatisTime;

        return $this;
    }
}
