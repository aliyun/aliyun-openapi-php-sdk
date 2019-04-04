<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeScalingConfigurations
 *
 * @method string getScalingConfigurationId6()
 * @method string getScalingConfigurationId7()
 * @method string getResourceOwnerId()
 * @method string getScalingConfigurationId4()
 * @method string getScalingConfigurationId5()
 * @method string getScalingGroupId()
 * @method string getScalingConfigurationId8()
 * @method string getScalingConfigurationId9()
 * @method string getScalingConfigurationId10()
 * @method string getPageNumber()
 * @method string getScalingConfigurationName2()
 * @method string getScalingConfigurationName3()
 * @method string getScalingConfigurationName1()
 * @method string getPageSize()
 * @method string getScalingConfigurationId2()
 * @method string getScalingConfigurationId3()
 * @method string getScalingConfigurationId1()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getScalingConfigurationName6()
 * @method string getScalingConfigurationName7()
 * @method string getScalingConfigurationName4()
 * @method string getScalingConfigurationName5()
 * @method string getOwnerId()
 * @method string getScalingConfigurationName8()
 * @method string getScalingConfigurationName9()
 * @method string getScalingConfigurationName10()
 */
class DescribeScalingConfigurationsRequest extends \RpcAcsRequest
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
            'Ess',
            '2014-08-28',
            'DescribeScalingConfigurations',
            'ess'
        );
    }

    /**
     * @param string $scalingConfigurationId6
     *
     * @return $this
     */
    public function setScalingConfigurationId6($scalingConfigurationId6)
    {
        $this->requestParameters['ScalingConfigurationId6'] = $scalingConfigurationId6;
        $this->queryParameters['ScalingConfigurationId.6'] = $scalingConfigurationId6;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId7
     *
     * @return $this
     */
    public function setScalingConfigurationId7($scalingConfigurationId7)
    {
        $this->requestParameters['ScalingConfigurationId7'] = $scalingConfigurationId7;
        $this->queryParameters['ScalingConfigurationId.7'] = $scalingConfigurationId7;

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
     * @param string $scalingConfigurationId4
     *
     * @return $this
     */
    public function setScalingConfigurationId4($scalingConfigurationId4)
    {
        $this->requestParameters['ScalingConfigurationId4'] = $scalingConfigurationId4;
        $this->queryParameters['ScalingConfigurationId.4'] = $scalingConfigurationId4;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId5
     *
     * @return $this
     */
    public function setScalingConfigurationId5($scalingConfigurationId5)
    {
        $this->requestParameters['ScalingConfigurationId5'] = $scalingConfigurationId5;
        $this->queryParameters['ScalingConfigurationId.5'] = $scalingConfigurationId5;

        return $this;
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->requestParameters['ScalingGroupId'] = $scalingGroupId;
        $this->queryParameters['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId8
     *
     * @return $this
     */
    public function setScalingConfigurationId8($scalingConfigurationId8)
    {
        $this->requestParameters['ScalingConfigurationId8'] = $scalingConfigurationId8;
        $this->queryParameters['ScalingConfigurationId.8'] = $scalingConfigurationId8;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId9
     *
     * @return $this
     */
    public function setScalingConfigurationId9($scalingConfigurationId9)
    {
        $this->requestParameters['ScalingConfigurationId9'] = $scalingConfigurationId9;
        $this->queryParameters['ScalingConfigurationId.9'] = $scalingConfigurationId9;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId10
     *
     * @return $this
     */
    public function setScalingConfigurationId10($scalingConfigurationId10)
    {
        $this->requestParameters['ScalingConfigurationId10'] = $scalingConfigurationId10;
        $this->queryParameters['ScalingConfigurationId.10'] = $scalingConfigurationId10;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName2
     *
     * @return $this
     */
    public function setScalingConfigurationName2($scalingConfigurationName2)
    {
        $this->requestParameters['ScalingConfigurationName2'] = $scalingConfigurationName2;
        $this->queryParameters['ScalingConfigurationName.2'] = $scalingConfigurationName2;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName3
     *
     * @return $this
     */
    public function setScalingConfigurationName3($scalingConfigurationName3)
    {
        $this->requestParameters['ScalingConfigurationName3'] = $scalingConfigurationName3;
        $this->queryParameters['ScalingConfigurationName.3'] = $scalingConfigurationName3;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName1
     *
     * @return $this
     */
    public function setScalingConfigurationName1($scalingConfigurationName1)
    {
        $this->requestParameters['ScalingConfigurationName1'] = $scalingConfigurationName1;
        $this->queryParameters['ScalingConfigurationName.1'] = $scalingConfigurationName1;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId2
     *
     * @return $this
     */
    public function setScalingConfigurationId2($scalingConfigurationId2)
    {
        $this->requestParameters['ScalingConfigurationId2'] = $scalingConfigurationId2;
        $this->queryParameters['ScalingConfigurationId.2'] = $scalingConfigurationId2;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId3
     *
     * @return $this
     */
    public function setScalingConfigurationId3($scalingConfigurationId3)
    {
        $this->requestParameters['ScalingConfigurationId3'] = $scalingConfigurationId3;
        $this->queryParameters['ScalingConfigurationId.3'] = $scalingConfigurationId3;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId1
     *
     * @return $this
     */
    public function setScalingConfigurationId1($scalingConfigurationId1)
    {
        $this->requestParameters['ScalingConfigurationId1'] = $scalingConfigurationId1;
        $this->queryParameters['ScalingConfigurationId.1'] = $scalingConfigurationId1;

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
     * @param string $scalingConfigurationName6
     *
     * @return $this
     */
    public function setScalingConfigurationName6($scalingConfigurationName6)
    {
        $this->requestParameters['ScalingConfigurationName6'] = $scalingConfigurationName6;
        $this->queryParameters['ScalingConfigurationName.6'] = $scalingConfigurationName6;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName7
     *
     * @return $this
     */
    public function setScalingConfigurationName7($scalingConfigurationName7)
    {
        $this->requestParameters['ScalingConfigurationName7'] = $scalingConfigurationName7;
        $this->queryParameters['ScalingConfigurationName.7'] = $scalingConfigurationName7;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName4
     *
     * @return $this
     */
    public function setScalingConfigurationName4($scalingConfigurationName4)
    {
        $this->requestParameters['ScalingConfigurationName4'] = $scalingConfigurationName4;
        $this->queryParameters['ScalingConfigurationName.4'] = $scalingConfigurationName4;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName5
     *
     * @return $this
     */
    public function setScalingConfigurationName5($scalingConfigurationName5)
    {
        $this->requestParameters['ScalingConfigurationName5'] = $scalingConfigurationName5;
        $this->queryParameters['ScalingConfigurationName.5'] = $scalingConfigurationName5;

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
     * @param string $scalingConfigurationName8
     *
     * @return $this
     */
    public function setScalingConfigurationName8($scalingConfigurationName8)
    {
        $this->requestParameters['ScalingConfigurationName8'] = $scalingConfigurationName8;
        $this->queryParameters['ScalingConfigurationName.8'] = $scalingConfigurationName8;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName9
     *
     * @return $this
     */
    public function setScalingConfigurationName9($scalingConfigurationName9)
    {
        $this->requestParameters['ScalingConfigurationName9'] = $scalingConfigurationName9;
        $this->queryParameters['ScalingConfigurationName.9'] = $scalingConfigurationName9;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName10
     *
     * @return $this
     */
    public function setScalingConfigurationName10($scalingConfigurationName10)
    {
        $this->requestParameters['ScalingConfigurationName10'] = $scalingConfigurationName10;
        $this->queryParameters['ScalingConfigurationName.10'] = $scalingConfigurationName10;

        return $this;
    }
}
