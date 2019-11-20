<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribePrice
 *
 * @method string getDataDisk3Size()
 * @method string getResourceOwnerId()
 * @method string getDataDisk3Category()
 * @method string getDataDisk4Size()
 * @method string getPriceUnit()
 * @method string getPeriod()
 * @method string getDataDisk1PerformanceLevel()
 * @method string getOwnerId()
 * @method string getInternetChargeType()
 * @method string getInstanceNetworkType()
 * @method string getInstanceAmount()
 * @method string getDataDisk3PerformanceLevel()
 * @method string getImageId()
 * @method string getIoOptimized()
 * @method string getInternetMaxBandwidthOut()
 * @method string getSystemDiskCategory()
 * @method string getPlatform()
 * @method string getCapacity()
 * @method string getSystemDiskPerformanceLevel()
 * @method string getDataDisk4Category()
 * @method string getDataDisk4PerformanceLevel()
 * @method string getScope()
 * @method string getInstanceType()
 * @method string getDataDisk2Category()
 * @method string getDataDisk1Size()
 * @method string getAmount()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDataDisk2Size()
 * @method string getResourceType()
 * @method string getDataDisk1Category()
 * @method string getDataDisk2PerformanceLevel()
 * @method string getSystemDiskSize()
 * @method string getOfferingType()
 */
class DescribePriceRequest extends \RpcAcsRequest
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
            'DescribePrice',
            'ecs'
        );
    }

    /**
     * @param string $dataDisk3Size
     *
     * @return $this
     */
    public function setDataDisk3Size($dataDisk3Size)
    {
        $this->requestParameters['DataDisk3Size'] = $dataDisk3Size;
        $this->queryParameters['DataDisk.3.Size'] = $dataDisk3Size;

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
     * @param string $dataDisk3Category
     *
     * @return $this
     */
    public function setDataDisk3Category($dataDisk3Category)
    {
        $this->requestParameters['DataDisk3Category'] = $dataDisk3Category;
        $this->queryParameters['DataDisk.3.Category'] = $dataDisk3Category;

        return $this;
    }

    /**
     * @param string $dataDisk4Size
     *
     * @return $this
     */
    public function setDataDisk4Size($dataDisk4Size)
    {
        $this->requestParameters['DataDisk4Size'] = $dataDisk4Size;
        $this->queryParameters['DataDisk.4.Size'] = $dataDisk4Size;

        return $this;
    }

    /**
     * @param string $priceUnit
     *
     * @return $this
     */
    public function setPriceUnit($priceUnit)
    {
        $this->requestParameters['PriceUnit'] = $priceUnit;
        $this->queryParameters['PriceUnit'] = $priceUnit;

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
     * @param string $dataDisk1PerformanceLevel
     *
     * @return $this
     */
    public function setDataDisk1PerformanceLevel($dataDisk1PerformanceLevel)
    {
        $this->requestParameters['DataDisk1PerformanceLevel'] = $dataDisk1PerformanceLevel;
        $this->queryParameters['DataDisk.1.PerformanceLevel'] = $dataDisk1PerformanceLevel;

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
     * @param string $internetChargeType
     *
     * @return $this
     */
    public function setInternetChargeType($internetChargeType)
    {
        $this->requestParameters['InternetChargeType'] = $internetChargeType;
        $this->queryParameters['InternetChargeType'] = $internetChargeType;

        return $this;
    }

    /**
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function setInstanceNetworkType($instanceNetworkType)
    {
        $this->requestParameters['InstanceNetworkType'] = $instanceNetworkType;
        $this->queryParameters['InstanceNetworkType'] = $instanceNetworkType;

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

    /**
     * @param string $dataDisk3PerformanceLevel
     *
     * @return $this
     */
    public function setDataDisk3PerformanceLevel($dataDisk3PerformanceLevel)
    {
        $this->requestParameters['DataDisk3PerformanceLevel'] = $dataDisk3PerformanceLevel;
        $this->queryParameters['DataDisk.3.PerformanceLevel'] = $dataDisk3PerformanceLevel;

        return $this;
    }

    /**
     * @param string $imageId
     *
     * @return $this
     */
    public function setImageId($imageId)
    {
        $this->requestParameters['ImageId'] = $imageId;
        $this->queryParameters['ImageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setIoOptimized($ioOptimized)
    {
        $this->requestParameters['IoOptimized'] = $ioOptimized;
        $this->queryParameters['IoOptimized'] = $ioOptimized;

        return $this;
    }

    /**
     * @param string $internetMaxBandwidthOut
     *
     * @return $this
     */
    public function setInternetMaxBandwidthOut($internetMaxBandwidthOut)
    {
        $this->requestParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;
        $this->queryParameters['InternetMaxBandwidthOut'] = $internetMaxBandwidthOut;

        return $this;
    }

    /**
     * @param string $systemDiskCategory
     *
     * @return $this
     */
    public function setSystemDiskCategory($systemDiskCategory)
    {
        $this->requestParameters['SystemDiskCategory'] = $systemDiskCategory;
        $this->queryParameters['SystemDisk.Category'] = $systemDiskCategory;

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
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->requestParameters['Capacity'] = $capacity;
        $this->queryParameters['Capacity'] = $capacity;

        return $this;
    }

    /**
     * @param string $systemDiskPerformanceLevel
     *
     * @return $this
     */
    public function setSystemDiskPerformanceLevel($systemDiskPerformanceLevel)
    {
        $this->requestParameters['SystemDiskPerformanceLevel'] = $systemDiskPerformanceLevel;
        $this->queryParameters['SystemDisk.PerformanceLevel'] = $systemDiskPerformanceLevel;

        return $this;
    }

    /**
     * @param string $dataDisk4Category
     *
     * @return $this
     */
    public function setDataDisk4Category($dataDisk4Category)
    {
        $this->requestParameters['DataDisk4Category'] = $dataDisk4Category;
        $this->queryParameters['DataDisk.4.Category'] = $dataDisk4Category;

        return $this;
    }

    /**
     * @param string $dataDisk4PerformanceLevel
     *
     * @return $this
     */
    public function setDataDisk4PerformanceLevel($dataDisk4PerformanceLevel)
    {
        $this->requestParameters['DataDisk4PerformanceLevel'] = $dataDisk4PerformanceLevel;
        $this->queryParameters['DataDisk.4.PerformanceLevel'] = $dataDisk4PerformanceLevel;

        return $this;
    }

    /**
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->requestParameters['Scope'] = $scope;
        $this->queryParameters['Scope'] = $scope;

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
     * @param string $dataDisk2Category
     *
     * @return $this
     */
    public function setDataDisk2Category($dataDisk2Category)
    {
        $this->requestParameters['DataDisk2Category'] = $dataDisk2Category;
        $this->queryParameters['DataDisk.2.Category'] = $dataDisk2Category;

        return $this;
    }

    /**
     * @param string $dataDisk1Size
     *
     * @return $this
     */
    public function setDataDisk1Size($dataDisk1Size)
    {
        $this->requestParameters['DataDisk1Size'] = $dataDisk1Size;
        $this->queryParameters['DataDisk.1.Size'] = $dataDisk1Size;

        return $this;
    }

    /**
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->requestParameters['Amount'] = $amount;
        $this->queryParameters['Amount'] = $amount;

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
     * @param string $dataDisk2Size
     *
     * @return $this
     */
    public function setDataDisk2Size($dataDisk2Size)
    {
        $this->requestParameters['DataDisk2Size'] = $dataDisk2Size;
        $this->queryParameters['DataDisk.2.Size'] = $dataDisk2Size;

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
     * @param string $dataDisk1Category
     *
     * @return $this
     */
    public function setDataDisk1Category($dataDisk1Category)
    {
        $this->requestParameters['DataDisk1Category'] = $dataDisk1Category;
        $this->queryParameters['DataDisk.1.Category'] = $dataDisk1Category;

        return $this;
    }

    /**
     * @param string $dataDisk2PerformanceLevel
     *
     * @return $this
     */
    public function setDataDisk2PerformanceLevel($dataDisk2PerformanceLevel)
    {
        $this->requestParameters['DataDisk2PerformanceLevel'] = $dataDisk2PerformanceLevel;
        $this->queryParameters['DataDisk.2.PerformanceLevel'] = $dataDisk2PerformanceLevel;

        return $this;
    }

    /**
     * @param string $systemDiskSize
     *
     * @return $this
     */
    public function setSystemDiskSize($systemDiskSize)
    {
        $this->requestParameters['SystemDiskSize'] = $systemDiskSize;
        $this->queryParameters['SystemDisk.Size'] = $systemDiskSize;

        return $this;
    }

    /**
     * @param string $offeringType
     *
     * @return $this
     */
    public function setOfferingType($offeringType)
    {
        $this->requestParameters['OfferingType'] = $offeringType;
        $this->queryParameters['OfferingType'] = $offeringType;

        return $this;
    }
}
