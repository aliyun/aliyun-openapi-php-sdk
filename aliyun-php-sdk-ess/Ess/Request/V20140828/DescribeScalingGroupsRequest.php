<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeScalingGroups
 *
 * @method string getResourceOwnerId()
 * @method string getScalingGroupId10()
 * @method string getScalingGroupId12()
 * @method string getScalingGroupId13()
 * @method string getScalingGroupId14()
 * @method string getScalingGroupId15()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getScalingGroupName20()
 * @method string getScalingGroupName19()
 * @method string getScalingGroupId20()
 * @method string getScalingGroupName18()
 * @method string getScalingGroupName17()
 * @method string getScalingGroupName16()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupName()
 * @method string getOwnerAccount()
 * @method string getScalingGroupName1()
 * @method string getScalingGroupName2()
 * @method string getScalingGroupId2()
 * @method string getScalingGroupId1()
 * @method string getScalingGroupId6()
 * @method string getScalingGroupId16()
 * @method string getScalingGroupName7()
 * @method string getScalingGroupName11()
 * @method string getScalingGroupId5()
 * @method string getScalingGroupId17()
 * @method string getScalingGroupName8()
 * @method string getScalingGroupName10()
 * @method string getScalingGroupId4()
 * @method string getScalingGroupId18()
 * @method string getScalingGroupName9()
 * @method string getScalingGroupId3()
 * @method string getScalingGroupId19()
 * @method string getScalingGroupName3()
 * @method string getScalingGroupName15()
 * @method string getScalingGroupId9()
 * @method string getScalingGroupName4()
 * @method string getScalingGroupName14()
 * @method string getScalingGroupId8()
 * @method string getScalingGroupName5()
 * @method string getScalingGroupName13()
 * @method string getScalingGroupId7()
 * @method string getScalingGroupName6()
 * @method string getScalingGroupName12()
 */
class DescribeScalingGroupsRequest extends \RpcAcsRequest
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
            'DescribeScalingGroups',
            'ess'
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
     * @param string $scalingGroupId10
     *
     * @return $this
     */
    public function setScalingGroupId10($scalingGroupId10)
    {
        $this->requestParameters['ScalingGroupId10'] = $scalingGroupId10;
        $this->queryParameters['ScalingGroupId.10'] = $scalingGroupId10;

        return $this;
    }

    /**
     * @param string $scalingGroupId12
     *
     * @return $this
     */
    public function setScalingGroupId12($scalingGroupId12)
    {
        $this->requestParameters['ScalingGroupId12'] = $scalingGroupId12;
        $this->queryParameters['ScalingGroupId.12'] = $scalingGroupId12;

        return $this;
    }

    /**
     * @param string $scalingGroupId13
     *
     * @return $this
     */
    public function setScalingGroupId13($scalingGroupId13)
    {
        $this->requestParameters['ScalingGroupId13'] = $scalingGroupId13;
        $this->queryParameters['ScalingGroupId.13'] = $scalingGroupId13;

        return $this;
    }

    /**
     * @param string $scalingGroupId14
     *
     * @return $this
     */
    public function setScalingGroupId14($scalingGroupId14)
    {
        $this->requestParameters['ScalingGroupId14'] = $scalingGroupId14;
        $this->queryParameters['ScalingGroupId.14'] = $scalingGroupId14;

        return $this;
    }

    /**
     * @param string $scalingGroupId15
     *
     * @return $this
     */
    public function setScalingGroupId15($scalingGroupId15)
    {
        $this->requestParameters['ScalingGroupId15'] = $scalingGroupId15;
        $this->queryParameters['ScalingGroupId.15'] = $scalingGroupId15;

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
     * @param string $scalingGroupName20
     *
     * @return $this
     */
    public function setScalingGroupName20($scalingGroupName20)
    {
        $this->requestParameters['ScalingGroupName20'] = $scalingGroupName20;
        $this->queryParameters['ScalingGroupName.20'] = $scalingGroupName20;

        return $this;
    }

    /**
     * @param string $scalingGroupName19
     *
     * @return $this
     */
    public function setScalingGroupName19($scalingGroupName19)
    {
        $this->requestParameters['ScalingGroupName19'] = $scalingGroupName19;
        $this->queryParameters['ScalingGroupName.19'] = $scalingGroupName19;

        return $this;
    }

    /**
     * @param string $scalingGroupId20
     *
     * @return $this
     */
    public function setScalingGroupId20($scalingGroupId20)
    {
        $this->requestParameters['ScalingGroupId20'] = $scalingGroupId20;
        $this->queryParameters['ScalingGroupId.20'] = $scalingGroupId20;

        return $this;
    }

    /**
     * @param string $scalingGroupName18
     *
     * @return $this
     */
    public function setScalingGroupName18($scalingGroupName18)
    {
        $this->requestParameters['ScalingGroupName18'] = $scalingGroupName18;
        $this->queryParameters['ScalingGroupName.18'] = $scalingGroupName18;

        return $this;
    }

    /**
     * @param string $scalingGroupName17
     *
     * @return $this
     */
    public function setScalingGroupName17($scalingGroupName17)
    {
        $this->requestParameters['ScalingGroupName17'] = $scalingGroupName17;
        $this->queryParameters['ScalingGroupName.17'] = $scalingGroupName17;

        return $this;
    }

    /**
     * @param string $scalingGroupName16
     *
     * @return $this
     */
    public function setScalingGroupName16($scalingGroupName16)
    {
        $this->requestParameters['ScalingGroupName16'] = $scalingGroupName16;
        $this->queryParameters['ScalingGroupName.16'] = $scalingGroupName16;

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
     * @param string $scalingGroupName
     *
     * @return $this
     */
    public function setScalingGroupName($scalingGroupName)
    {
        $this->requestParameters['ScalingGroupName'] = $scalingGroupName;
        $this->queryParameters['ScalingGroupName'] = $scalingGroupName;

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
     * @param string $scalingGroupName1
     *
     * @return $this
     */
    public function setScalingGroupName1($scalingGroupName1)
    {
        $this->requestParameters['ScalingGroupName1'] = $scalingGroupName1;
        $this->queryParameters['ScalingGroupName.1'] = $scalingGroupName1;

        return $this;
    }

    /**
     * @param string $scalingGroupName2
     *
     * @return $this
     */
    public function setScalingGroupName2($scalingGroupName2)
    {
        $this->requestParameters['ScalingGroupName2'] = $scalingGroupName2;
        $this->queryParameters['ScalingGroupName.2'] = $scalingGroupName2;

        return $this;
    }

    /**
     * @param string $scalingGroupId2
     *
     * @return $this
     */
    public function setScalingGroupId2($scalingGroupId2)
    {
        $this->requestParameters['ScalingGroupId2'] = $scalingGroupId2;
        $this->queryParameters['ScalingGroupId.2'] = $scalingGroupId2;

        return $this;
    }

    /**
     * @param string $scalingGroupId1
     *
     * @return $this
     */
    public function setScalingGroupId1($scalingGroupId1)
    {
        $this->requestParameters['ScalingGroupId1'] = $scalingGroupId1;
        $this->queryParameters['ScalingGroupId.1'] = $scalingGroupId1;

        return $this;
    }

    /**
     * @param string $scalingGroupId6
     *
     * @return $this
     */
    public function setScalingGroupId6($scalingGroupId6)
    {
        $this->requestParameters['ScalingGroupId6'] = $scalingGroupId6;
        $this->queryParameters['ScalingGroupId.6'] = $scalingGroupId6;

        return $this;
    }

    /**
     * @param string $scalingGroupId16
     *
     * @return $this
     */
    public function setScalingGroupId16($scalingGroupId16)
    {
        $this->requestParameters['ScalingGroupId16'] = $scalingGroupId16;
        $this->queryParameters['ScalingGroupId.16'] = $scalingGroupId16;

        return $this;
    }

    /**
     * @param string $scalingGroupName7
     *
     * @return $this
     */
    public function setScalingGroupName7($scalingGroupName7)
    {
        $this->requestParameters['ScalingGroupName7'] = $scalingGroupName7;
        $this->queryParameters['ScalingGroupName.7'] = $scalingGroupName7;

        return $this;
    }

    /**
     * @param string $scalingGroupName11
     *
     * @return $this
     */
    public function setScalingGroupName11($scalingGroupName11)
    {
        $this->requestParameters['ScalingGroupName11'] = $scalingGroupName11;
        $this->queryParameters['ScalingGroupName.11'] = $scalingGroupName11;

        return $this;
    }

    /**
     * @param string $scalingGroupId5
     *
     * @return $this
     */
    public function setScalingGroupId5($scalingGroupId5)
    {
        $this->requestParameters['ScalingGroupId5'] = $scalingGroupId5;
        $this->queryParameters['ScalingGroupId.5'] = $scalingGroupId5;

        return $this;
    }

    /**
     * @param string $scalingGroupId17
     *
     * @return $this
     */
    public function setScalingGroupId17($scalingGroupId17)
    {
        $this->requestParameters['ScalingGroupId17'] = $scalingGroupId17;
        $this->queryParameters['ScalingGroupId.17'] = $scalingGroupId17;

        return $this;
    }

    /**
     * @param string $scalingGroupName8
     *
     * @return $this
     */
    public function setScalingGroupName8($scalingGroupName8)
    {
        $this->requestParameters['ScalingGroupName8'] = $scalingGroupName8;
        $this->queryParameters['ScalingGroupName.8'] = $scalingGroupName8;

        return $this;
    }

    /**
     * @param string $scalingGroupName10
     *
     * @return $this
     */
    public function setScalingGroupName10($scalingGroupName10)
    {
        $this->requestParameters['ScalingGroupName10'] = $scalingGroupName10;
        $this->queryParameters['ScalingGroupName.10'] = $scalingGroupName10;

        return $this;
    }

    /**
     * @param string $scalingGroupId4
     *
     * @return $this
     */
    public function setScalingGroupId4($scalingGroupId4)
    {
        $this->requestParameters['ScalingGroupId4'] = $scalingGroupId4;
        $this->queryParameters['ScalingGroupId.4'] = $scalingGroupId4;

        return $this;
    }

    /**
     * @param string $scalingGroupId18
     *
     * @return $this
     */
    public function setScalingGroupId18($scalingGroupId18)
    {
        $this->requestParameters['ScalingGroupId18'] = $scalingGroupId18;
        $this->queryParameters['ScalingGroupId.18'] = $scalingGroupId18;

        return $this;
    }

    /**
     * @param string $scalingGroupName9
     *
     * @return $this
     */
    public function setScalingGroupName9($scalingGroupName9)
    {
        $this->requestParameters['ScalingGroupName9'] = $scalingGroupName9;
        $this->queryParameters['ScalingGroupName.9'] = $scalingGroupName9;

        return $this;
    }

    /**
     * @param string $scalingGroupId3
     *
     * @return $this
     */
    public function setScalingGroupId3($scalingGroupId3)
    {
        $this->requestParameters['ScalingGroupId3'] = $scalingGroupId3;
        $this->queryParameters['ScalingGroupId.3'] = $scalingGroupId3;

        return $this;
    }

    /**
     * @param string $scalingGroupId19
     *
     * @return $this
     */
    public function setScalingGroupId19($scalingGroupId19)
    {
        $this->requestParameters['ScalingGroupId19'] = $scalingGroupId19;
        $this->queryParameters['ScalingGroupId.19'] = $scalingGroupId19;

        return $this;
    }

    /**
     * @param string $scalingGroupName3
     *
     * @return $this
     */
    public function setScalingGroupName3($scalingGroupName3)
    {
        $this->requestParameters['ScalingGroupName3'] = $scalingGroupName3;
        $this->queryParameters['ScalingGroupName.3'] = $scalingGroupName3;

        return $this;
    }

    /**
     * @param string $scalingGroupName15
     *
     * @return $this
     */
    public function setScalingGroupName15($scalingGroupName15)
    {
        $this->requestParameters['ScalingGroupName15'] = $scalingGroupName15;
        $this->queryParameters['ScalingGroupName.15'] = $scalingGroupName15;

        return $this;
    }

    /**
     * @param string $scalingGroupId9
     *
     * @return $this
     */
    public function setScalingGroupId9($scalingGroupId9)
    {
        $this->requestParameters['ScalingGroupId9'] = $scalingGroupId9;
        $this->queryParameters['ScalingGroupId.9'] = $scalingGroupId9;

        return $this;
    }

    /**
     * @param string $scalingGroupName4
     *
     * @return $this
     */
    public function setScalingGroupName4($scalingGroupName4)
    {
        $this->requestParameters['ScalingGroupName4'] = $scalingGroupName4;
        $this->queryParameters['ScalingGroupName.4'] = $scalingGroupName4;

        return $this;
    }

    /**
     * @param string $scalingGroupName14
     *
     * @return $this
     */
    public function setScalingGroupName14($scalingGroupName14)
    {
        $this->requestParameters['ScalingGroupName14'] = $scalingGroupName14;
        $this->queryParameters['ScalingGroupName.14'] = $scalingGroupName14;

        return $this;
    }

    /**
     * @param string $scalingGroupId8
     *
     * @return $this
     */
    public function setScalingGroupId8($scalingGroupId8)
    {
        $this->requestParameters['ScalingGroupId8'] = $scalingGroupId8;
        $this->queryParameters['ScalingGroupId.8'] = $scalingGroupId8;

        return $this;
    }

    /**
     * @param string $scalingGroupName5
     *
     * @return $this
     */
    public function setScalingGroupName5($scalingGroupName5)
    {
        $this->requestParameters['ScalingGroupName5'] = $scalingGroupName5;
        $this->queryParameters['ScalingGroupName.5'] = $scalingGroupName5;

        return $this;
    }

    /**
     * @param string $scalingGroupName13
     *
     * @return $this
     */
    public function setScalingGroupName13($scalingGroupName13)
    {
        $this->requestParameters['ScalingGroupName13'] = $scalingGroupName13;
        $this->queryParameters['ScalingGroupName.13'] = $scalingGroupName13;

        return $this;
    }

    /**
     * @param string $scalingGroupId7
     *
     * @return $this
     */
    public function setScalingGroupId7($scalingGroupId7)
    {
        $this->requestParameters['ScalingGroupId7'] = $scalingGroupId7;
        $this->queryParameters['ScalingGroupId.7'] = $scalingGroupId7;

        return $this;
    }

    /**
     * @param string $scalingGroupName6
     *
     * @return $this
     */
    public function setScalingGroupName6($scalingGroupName6)
    {
        $this->requestParameters['ScalingGroupName6'] = $scalingGroupName6;
        $this->queryParameters['ScalingGroupName.6'] = $scalingGroupName6;

        return $this;
    }

    /**
     * @param string $scalingGroupName12
     *
     * @return $this
     */
    public function setScalingGroupName12($scalingGroupName12)
    {
        $this->requestParameters['ScalingGroupName12'] = $scalingGroupName12;
        $this->queryParameters['ScalingGroupName.12'] = $scalingGroupName12;

        return $this;
    }
}
