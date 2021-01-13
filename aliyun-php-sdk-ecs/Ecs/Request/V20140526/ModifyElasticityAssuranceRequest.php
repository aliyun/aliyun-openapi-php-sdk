<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyElasticityAssurance
 *
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getPrivatePoolOptionsId()
 * @method string getResourceOwnerAccount()
 * @method string getPrivatePoolOptionsName()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getPackageType()
 */
class ModifyElasticityAssuranceRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'ModifyElasticityAssurance',
            'ecs'
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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $privatePoolOptionsId
     *
     * @return $this
     */
    public function setPrivatePoolOptionsId($privatePoolOptionsId)
    {
        $this->requestParameters['PrivatePoolOptionsId'] = $privatePoolOptionsId;
        $this->queryParameters['PrivatePoolOptions.Id'] = $privatePoolOptionsId;

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
     * @param string $privatePoolOptionsName
     *
     * @return $this
     */
    public function setPrivatePoolOptionsName($privatePoolOptionsName)
    {
        $this->requestParameters['PrivatePoolOptionsName'] = $privatePoolOptionsName;
        $this->queryParameters['PrivatePoolOptions.Name'] = $privatePoolOptionsName;

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
     * @param string $packageType
     *
     * @return $this
     */
    public function setPackageType($packageType)
    {
        $this->requestParameters['PackageType'] = $packageType;
        $this->queryParameters['PackageType'] = $packageType;

        return $this;
    }
}
