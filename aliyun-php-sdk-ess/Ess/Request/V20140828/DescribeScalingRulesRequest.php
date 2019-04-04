<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeScalingRules
 *
 * @method string getScalingRuleName1()
 * @method string getResourceOwnerId()
 * @method string getScalingRuleName2()
 * @method string getScalingRuleName3()
 * @method string getScalingRuleName4()
 * @method string getScalingRuleName5()
 * @method string getScalingGroupId()
 * @method string getScalingRuleName6()
 * @method string getScalingRuleName7()
 * @method string getScalingRuleName8()
 * @method string getScalingRuleAri9()
 * @method string getScalingRuleName9()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getScalingRuleType()
 * @method string getScalingRuleId10()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getScalingRuleAri1()
 * @method string getScalingRuleAri2()
 * @method string getScalingRuleName10()
 * @method string getScalingRuleAri3()
 * @method string getScalingRuleAri4()
 * @method string getScalingRuleId8()
 * @method string getScalingRuleAri5()
 * @method string getScalingRuleId9()
 * @method string getScalingRuleAri6()
 * @method string getScalingRuleAri7()
 * @method string getScalingRuleAri10()
 * @method string getScalingRuleAri8()
 * @method string getScalingRuleId4()
 * @method string getShowAlarmRules()
 * @method string getScalingRuleId5()
 * @method string getScalingRuleId6()
 * @method string getScalingRuleId7()
 * @method string getScalingRuleId1()
 * @method string getScalingRuleId2()
 * @method string getScalingRuleId3()
 */
class DescribeScalingRulesRequest extends \RpcAcsRequest
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
            'DescribeScalingRules',
            'ess'
        );
    }

    /**
     * @param string $scalingRuleName1
     *
     * @return $this
     */
    public function setScalingRuleName1($scalingRuleName1)
    {
        $this->requestParameters['ScalingRuleName1'] = $scalingRuleName1;
        $this->queryParameters['ScalingRuleName.1'] = $scalingRuleName1;

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
     * @param string $scalingRuleName2
     *
     * @return $this
     */
    public function setScalingRuleName2($scalingRuleName2)
    {
        $this->requestParameters['ScalingRuleName2'] = $scalingRuleName2;
        $this->queryParameters['ScalingRuleName.2'] = $scalingRuleName2;

        return $this;
    }

    /**
     * @param string $scalingRuleName3
     *
     * @return $this
     */
    public function setScalingRuleName3($scalingRuleName3)
    {
        $this->requestParameters['ScalingRuleName3'] = $scalingRuleName3;
        $this->queryParameters['ScalingRuleName.3'] = $scalingRuleName3;

        return $this;
    }

    /**
     * @param string $scalingRuleName4
     *
     * @return $this
     */
    public function setScalingRuleName4($scalingRuleName4)
    {
        $this->requestParameters['ScalingRuleName4'] = $scalingRuleName4;
        $this->queryParameters['ScalingRuleName.4'] = $scalingRuleName4;

        return $this;
    }

    /**
     * @param string $scalingRuleName5
     *
     * @return $this
     */
    public function setScalingRuleName5($scalingRuleName5)
    {
        $this->requestParameters['ScalingRuleName5'] = $scalingRuleName5;
        $this->queryParameters['ScalingRuleName.5'] = $scalingRuleName5;

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
     * @param string $scalingRuleName6
     *
     * @return $this
     */
    public function setScalingRuleName6($scalingRuleName6)
    {
        $this->requestParameters['ScalingRuleName6'] = $scalingRuleName6;
        $this->queryParameters['ScalingRuleName.6'] = $scalingRuleName6;

        return $this;
    }

    /**
     * @param string $scalingRuleName7
     *
     * @return $this
     */
    public function setScalingRuleName7($scalingRuleName7)
    {
        $this->requestParameters['ScalingRuleName7'] = $scalingRuleName7;
        $this->queryParameters['ScalingRuleName.7'] = $scalingRuleName7;

        return $this;
    }

    /**
     * @param string $scalingRuleName8
     *
     * @return $this
     */
    public function setScalingRuleName8($scalingRuleName8)
    {
        $this->requestParameters['ScalingRuleName8'] = $scalingRuleName8;
        $this->queryParameters['ScalingRuleName.8'] = $scalingRuleName8;

        return $this;
    }

    /**
     * @param string $scalingRuleAri9
     *
     * @return $this
     */
    public function setScalingRuleAri9($scalingRuleAri9)
    {
        $this->requestParameters['ScalingRuleAri9'] = $scalingRuleAri9;
        $this->queryParameters['ScalingRuleAri.9'] = $scalingRuleAri9;

        return $this;
    }

    /**
     * @param string $scalingRuleName9
     *
     * @return $this
     */
    public function setScalingRuleName9($scalingRuleName9)
    {
        $this->requestParameters['ScalingRuleName9'] = $scalingRuleName9;
        $this->queryParameters['ScalingRuleName.9'] = $scalingRuleName9;

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
     * @param string $scalingRuleType
     *
     * @return $this
     */
    public function setScalingRuleType($scalingRuleType)
    {
        $this->requestParameters['ScalingRuleType'] = $scalingRuleType;
        $this->queryParameters['ScalingRuleType'] = $scalingRuleType;

        return $this;
    }

    /**
     * @param string $scalingRuleId10
     *
     * @return $this
     */
    public function setScalingRuleId10($scalingRuleId10)
    {
        $this->requestParameters['ScalingRuleId10'] = $scalingRuleId10;
        $this->queryParameters['ScalingRuleId.10'] = $scalingRuleId10;

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
     * @param string $scalingRuleAri1
     *
     * @return $this
     */
    public function setScalingRuleAri1($scalingRuleAri1)
    {
        $this->requestParameters['ScalingRuleAri1'] = $scalingRuleAri1;
        $this->queryParameters['ScalingRuleAri.1'] = $scalingRuleAri1;

        return $this;
    }

    /**
     * @param string $scalingRuleAri2
     *
     * @return $this
     */
    public function setScalingRuleAri2($scalingRuleAri2)
    {
        $this->requestParameters['ScalingRuleAri2'] = $scalingRuleAri2;
        $this->queryParameters['ScalingRuleAri.2'] = $scalingRuleAri2;

        return $this;
    }

    /**
     * @param string $scalingRuleName10
     *
     * @return $this
     */
    public function setScalingRuleName10($scalingRuleName10)
    {
        $this->requestParameters['ScalingRuleName10'] = $scalingRuleName10;
        $this->queryParameters['ScalingRuleName.10'] = $scalingRuleName10;

        return $this;
    }

    /**
     * @param string $scalingRuleAri3
     *
     * @return $this
     */
    public function setScalingRuleAri3($scalingRuleAri3)
    {
        $this->requestParameters['ScalingRuleAri3'] = $scalingRuleAri3;
        $this->queryParameters['ScalingRuleAri.3'] = $scalingRuleAri3;

        return $this;
    }

    /**
     * @param string $scalingRuleAri4
     *
     * @return $this
     */
    public function setScalingRuleAri4($scalingRuleAri4)
    {
        $this->requestParameters['ScalingRuleAri4'] = $scalingRuleAri4;
        $this->queryParameters['ScalingRuleAri.4'] = $scalingRuleAri4;

        return $this;
    }

    /**
     * @param string $scalingRuleId8
     *
     * @return $this
     */
    public function setScalingRuleId8($scalingRuleId8)
    {
        $this->requestParameters['ScalingRuleId8'] = $scalingRuleId8;
        $this->queryParameters['ScalingRuleId.8'] = $scalingRuleId8;

        return $this;
    }

    /**
     * @param string $scalingRuleAri5
     *
     * @return $this
     */
    public function setScalingRuleAri5($scalingRuleAri5)
    {
        $this->requestParameters['ScalingRuleAri5'] = $scalingRuleAri5;
        $this->queryParameters['ScalingRuleAri.5'] = $scalingRuleAri5;

        return $this;
    }

    /**
     * @param string $scalingRuleId9
     *
     * @return $this
     */
    public function setScalingRuleId9($scalingRuleId9)
    {
        $this->requestParameters['ScalingRuleId9'] = $scalingRuleId9;
        $this->queryParameters['ScalingRuleId.9'] = $scalingRuleId9;

        return $this;
    }

    /**
     * @param string $scalingRuleAri6
     *
     * @return $this
     */
    public function setScalingRuleAri6($scalingRuleAri6)
    {
        $this->requestParameters['ScalingRuleAri6'] = $scalingRuleAri6;
        $this->queryParameters['ScalingRuleAri.6'] = $scalingRuleAri6;

        return $this;
    }

    /**
     * @param string $scalingRuleAri7
     *
     * @return $this
     */
    public function setScalingRuleAri7($scalingRuleAri7)
    {
        $this->requestParameters['ScalingRuleAri7'] = $scalingRuleAri7;
        $this->queryParameters['ScalingRuleAri.7'] = $scalingRuleAri7;

        return $this;
    }

    /**
     * @param string $scalingRuleAri10
     *
     * @return $this
     */
    public function setScalingRuleAri10($scalingRuleAri10)
    {
        $this->requestParameters['ScalingRuleAri10'] = $scalingRuleAri10;
        $this->queryParameters['ScalingRuleAri.10'] = $scalingRuleAri10;

        return $this;
    }

    /**
     * @param string $scalingRuleAri8
     *
     * @return $this
     */
    public function setScalingRuleAri8($scalingRuleAri8)
    {
        $this->requestParameters['ScalingRuleAri8'] = $scalingRuleAri8;
        $this->queryParameters['ScalingRuleAri.8'] = $scalingRuleAri8;

        return $this;
    }

    /**
     * @param string $scalingRuleId4
     *
     * @return $this
     */
    public function setScalingRuleId4($scalingRuleId4)
    {
        $this->requestParameters['ScalingRuleId4'] = $scalingRuleId4;
        $this->queryParameters['ScalingRuleId.4'] = $scalingRuleId4;

        return $this;
    }

    /**
     * @param string $showAlarmRules
     *
     * @return $this
     */
    public function setShowAlarmRules($showAlarmRules)
    {
        $this->requestParameters['ShowAlarmRules'] = $showAlarmRules;
        $this->queryParameters['ShowAlarmRules'] = $showAlarmRules;

        return $this;
    }

    /**
     * @param string $scalingRuleId5
     *
     * @return $this
     */
    public function setScalingRuleId5($scalingRuleId5)
    {
        $this->requestParameters['ScalingRuleId5'] = $scalingRuleId5;
        $this->queryParameters['ScalingRuleId.5'] = $scalingRuleId5;

        return $this;
    }

    /**
     * @param string $scalingRuleId6
     *
     * @return $this
     */
    public function setScalingRuleId6($scalingRuleId6)
    {
        $this->requestParameters['ScalingRuleId6'] = $scalingRuleId6;
        $this->queryParameters['ScalingRuleId.6'] = $scalingRuleId6;

        return $this;
    }

    /**
     * @param string $scalingRuleId7
     *
     * @return $this
     */
    public function setScalingRuleId7($scalingRuleId7)
    {
        $this->requestParameters['ScalingRuleId7'] = $scalingRuleId7;
        $this->queryParameters['ScalingRuleId.7'] = $scalingRuleId7;

        return $this;
    }

    /**
     * @param string $scalingRuleId1
     *
     * @return $this
     */
    public function setScalingRuleId1($scalingRuleId1)
    {
        $this->requestParameters['ScalingRuleId1'] = $scalingRuleId1;
        $this->queryParameters['ScalingRuleId.1'] = $scalingRuleId1;

        return $this;
    }

    /**
     * @param string $scalingRuleId2
     *
     * @return $this
     */
    public function setScalingRuleId2($scalingRuleId2)
    {
        $this->requestParameters['ScalingRuleId2'] = $scalingRuleId2;
        $this->queryParameters['ScalingRuleId.2'] = $scalingRuleId2;

        return $this;
    }

    /**
     * @param string $scalingRuleId3
     *
     * @return $this
     */
    public function setScalingRuleId3($scalingRuleId3)
    {
        $this->requestParameters['ScalingRuleId3'] = $scalingRuleId3;
        $this->queryParameters['ScalingRuleId.3'] = $scalingRuleId3;

        return $this;
    }
}
