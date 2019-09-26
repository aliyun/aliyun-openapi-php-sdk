<?php

namespace Dyplsapi\Request\V20170525;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of BuySecretNo
 *
 * @method string getSpecId()
 * @method string getResourceOwnerId()
 * @method string getCity()
 * @method string getSecretNo()
 * @method string getResourceOwnerAccount()
 * @method string getDisplayPool()
 * @method string getOwnerId()
 * @method string getPoolKey()
 */
class BuySecretNoRequest extends \RpcAcsRequest
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
            'Dyplsapi',
            '2017-05-25',
            'BuySecretNo',
            'dypls'
        );
    }

    /**
     * @param string $specId
     *
     * @return $this
     */
    public function setSpecId($specId)
    {
        $this->requestParameters['SpecId'] = $specId;
        $this->queryParameters['SpecId'] = $specId;

        return $this;
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
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->requestParameters['City'] = $city;
        $this->queryParameters['City'] = $city;

        return $this;
    }

    /**
     * @param string $secretNo
     *
     * @return $this
     */
    public function setSecretNo($secretNo)
    {
        $this->requestParameters['SecretNo'] = $secretNo;
        $this->queryParameters['SecretNo'] = $secretNo;

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
     * @param string $displayPool
     *
     * @return $this
     */
    public function setDisplayPool($displayPool)
    {
        $this->requestParameters['DisplayPool'] = $displayPool;
        $this->queryParameters['DisplayPool'] = $displayPool;

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
     * @param string $poolKey
     *
     * @return $this
     */
    public function setPoolKey($poolKey)
    {
        $this->requestParameters['PoolKey'] = $poolKey;
        $this->queryParameters['PoolKey'] = $poolKey;

        return $this;
    }
}
