<?php

namespace Dyplsapi\Request\V20170525;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QuerySubscriptionDetail
 *
 * @method string getResourceOwnerId()
 * @method string getProductType()
 * @method string getSubsId()
 * @method string getPhoneNoX()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getPoolKey()
 */
class QuerySubscriptionDetailRequest extends \RpcAcsRequest
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
            'QuerySubscriptionDetail',
            'dypls'
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
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->requestParameters['ProductType'] = $productType;
        $this->queryParameters['ProductType'] = $productType;

        return $this;
    }

    /**
     * @param string $subsId
     *
     * @return $this
     */
    public function setSubsId($subsId)
    {
        $this->requestParameters['SubsId'] = $subsId;
        $this->queryParameters['SubsId'] = $subsId;

        return $this;
    }

    /**
     * @param string $phoneNoX
     *
     * @return $this
     */
    public function setPhoneNoX($phoneNoX)
    {
        $this->requestParameters['PhoneNoX'] = $phoneNoX;
        $this->queryParameters['PhoneNoX'] = $phoneNoX;

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
