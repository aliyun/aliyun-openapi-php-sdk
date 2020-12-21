<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateElasticityAssurance
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getStartTime()
 * @method string getPlatform()
 * @method string getPrivatePoolOptionsMatchCriteria()
 * @method array getInstanceTypes()
 * @method string getInstanceChargeType()
 * @method string getPeriod()
 * @method string getResourceOwnerAccount()
 * @method string getPrivatePoolOptionsName()
 * @method string getOwnerAccount()
 * @method string getAssuranceTimes()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method string getInstanceCpuCoreCount()
 * @method string getPeriodUnit()
 * @method array getZoneIds()
 * @method string getChargeType()
 * @method string getPackageType()
 * @method string getInstanceAmount()
 */
class CreateElasticityAssuranceRequest extends \RpcAcsRequest
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
            'CreateElasticityAssurance',
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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
     * @param string $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->requestParameters['StartTime'] = $startTime;
        $this->queryParameters['StartTime'] = $startTime;

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
     * @param string $privatePoolOptionsMatchCriteria
     *
     * @return $this
     */
    public function setPrivatePoolOptionsMatchCriteria($privatePoolOptionsMatchCriteria)
    {
        $this->requestParameters['PrivatePoolOptionsMatchCriteria'] = $privatePoolOptionsMatchCriteria;
        $this->queryParameters['PrivatePoolOptions.MatchCriteria'] = $privatePoolOptionsMatchCriteria;

        return $this;
    }

    /**
     * @param array $instanceType
     *
     * @return $this
     */
	public function setInstanceTypes(array $instanceType)
	{
	    $this->requestParameters['InstanceTypes'] = $instanceType;
		foreach ($instanceType as $i => $iValue) {
			$this->queryParameters['InstanceType.' . ($i + 1)] = $iValue;
		}

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
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

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
     * @param string $assuranceTimes
     *
     * @return $this
     */
    public function setAssuranceTimes($assuranceTimes)
    {
        $this->requestParameters['AssuranceTimes'] = $assuranceTimes;
        $this->queryParameters['AssuranceTimes'] = $assuranceTimes;

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param string $instanceCpuCoreCount
     *
     * @return $this
     */
    public function setInstanceCpuCoreCount($instanceCpuCoreCount)
    {
        $this->requestParameters['InstanceCpuCoreCount'] = $instanceCpuCoreCount;
        $this->queryParameters['InstanceCpuCoreCount'] = $instanceCpuCoreCount;

        return $this;
    }

    /**
     * @param string $periodUnit
     *
     * @return $this
     */
    public function setPeriodUnit($periodUnit)
    {
        $this->requestParameters['PeriodUnit'] = $periodUnit;
        $this->queryParameters['PeriodUnit'] = $periodUnit;

        return $this;
    }

    /**
     * @param array $zoneId
     *
     * @return $this
     */
	public function setZoneIds(array $zoneId)
	{
	    $this->requestParameters['ZoneIds'] = $zoneId;
		foreach ($zoneId as $i => $iValue) {
			$this->queryParameters['ZoneId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->requestParameters['ChargeType'] = $chargeType;
        $this->queryParameters['ChargeType'] = $chargeType;

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
     * @param string $instanceAmount
     *
     * @return $this
     */
    public function setInstanceAmount($instanceAmount)
    {
        $this->requestParameters['InstanceAmount'] = $instanceAmount;
        $this->queryParameters['InstanceAmount'] = $instanceAmount;

        return $this;
    }
}
