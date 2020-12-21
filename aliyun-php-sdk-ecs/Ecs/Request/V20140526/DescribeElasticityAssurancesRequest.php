<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeElasticityAssurances
 *
 * @method string getResourceOwnerId()
 * @method string getPlatform()
 * @method string getNextToken()
 * @method string getInstanceType()
 * @method string getInstanceChargeType()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getPrivatePoolOptionsIds()
 * @method string getMaxResults()
 * @method string getZoneId()
 * @method string getPackageType()
 * @method string getStatus()
 */
class DescribeElasticityAssurancesRequest extends \RpcAcsRequest
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
            'DescribeElasticityAssurances',
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
     * @param string $platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->requestParameters['Platform'] = $platform;
        $this->queryParameters['Platform'] = $platform;

        return $this;
    }

    /**
     * @param string $nextToken
     *
     * @return $this
     */
    public function setNextToken($nextToken)
    {
        $this->requestParameters['NextToken'] = $nextToken;
        $this->queryParameters['NextToken'] = $nextToken;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        $this->requestParameters['InstanceChargeType'] = $instanceChargeType;
        $this->queryParameters['InstanceChargeType'] = $instanceChargeType;

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
     * @param string $privatePoolOptionsIds
     *
     * @return $this
     */
    public function setPrivatePoolOptionsIds($privatePoolOptionsIds)
    {
        $this->requestParameters['PrivatePoolOptionsIds'] = $privatePoolOptionsIds;
        $this->queryParameters['PrivatePoolOptions.Ids'] = $privatePoolOptionsIds;

        return $this;
    }

    /**
     * @param string $maxResults
     *
     * @return $this
     */
    public function setMaxResults($maxResults)
    {
        $this->requestParameters['MaxResults'] = $maxResults;
        $this->queryParameters['MaxResults'] = $maxResults;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

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

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
