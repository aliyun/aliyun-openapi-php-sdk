<?php

namespace Ess\Request\V20140828;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeScalingActivities
 *
 * @method string getScalingActivityId9()
 * @method string getResourceOwnerId()
 * @method string getScalingActivityId5()
 * @method string getScalingActivityId6()
 * @method string getScalingGroupId()
 * @method string getScalingActivityId7()
 * @method string getScalingActivityId8()
 * @method string getScalingActivityId1()
 * @method string getScalingActivityId2()
 * @method string getScalingActivityId3()
 * @method string getScalingActivityId4()
 * @method string getPageNumber()
 * @method string getStatusCode()
 * @method string getPageSize()
 * @method string getScalingActivityId11()
 * @method string getScalingActivityId10()
 * @method string getScalingActivityId13()
 * @method string getScalingActivityId12()
 * @method string getScalingActivityId15()
 * @method string getScalingActivityId14()
 * @method string getScalingActivityId17()
 * @method string getScalingActivityId16()
 * @method string getScalingActivityId19()
 * @method string getResourceOwnerAccount()
 * @method string getScalingActivityId18()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getScalingActivityId20()
 */
class DescribeScalingActivitiesRequest extends \RpcAcsRequest
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
            'DescribeScalingActivities',
            'ess'
        );
    }

    /**
     * @param string $scalingActivityId9
     *
     * @return $this
     */
    public function setScalingActivityId9($scalingActivityId9)
    {
        $this->requestParameters['ScalingActivityId9'] = $scalingActivityId9;
        $this->queryParameters['ScalingActivityId.9'] = $scalingActivityId9;

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
     * @param string $scalingActivityId5
     *
     * @return $this
     */
    public function setScalingActivityId5($scalingActivityId5)
    {
        $this->requestParameters['ScalingActivityId5'] = $scalingActivityId5;
        $this->queryParameters['ScalingActivityId.5'] = $scalingActivityId5;

        return $this;
    }

    /**
     * @param string $scalingActivityId6
     *
     * @return $this
     */
    public function setScalingActivityId6($scalingActivityId6)
    {
        $this->requestParameters['ScalingActivityId6'] = $scalingActivityId6;
        $this->queryParameters['ScalingActivityId.6'] = $scalingActivityId6;

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
     * @param string $scalingActivityId7
     *
     * @return $this
     */
    public function setScalingActivityId7($scalingActivityId7)
    {
        $this->requestParameters['ScalingActivityId7'] = $scalingActivityId7;
        $this->queryParameters['ScalingActivityId.7'] = $scalingActivityId7;

        return $this;
    }

    /**
     * @param string $scalingActivityId8
     *
     * @return $this
     */
    public function setScalingActivityId8($scalingActivityId8)
    {
        $this->requestParameters['ScalingActivityId8'] = $scalingActivityId8;
        $this->queryParameters['ScalingActivityId.8'] = $scalingActivityId8;

        return $this;
    }

    /**
     * @param string $scalingActivityId1
     *
     * @return $this
     */
    public function setScalingActivityId1($scalingActivityId1)
    {
        $this->requestParameters['ScalingActivityId1'] = $scalingActivityId1;
        $this->queryParameters['ScalingActivityId.1'] = $scalingActivityId1;

        return $this;
    }

    /**
     * @param string $scalingActivityId2
     *
     * @return $this
     */
    public function setScalingActivityId2($scalingActivityId2)
    {
        $this->requestParameters['ScalingActivityId2'] = $scalingActivityId2;
        $this->queryParameters['ScalingActivityId.2'] = $scalingActivityId2;

        return $this;
    }

    /**
     * @param string $scalingActivityId3
     *
     * @return $this
     */
    public function setScalingActivityId3($scalingActivityId3)
    {
        $this->requestParameters['ScalingActivityId3'] = $scalingActivityId3;
        $this->queryParameters['ScalingActivityId.3'] = $scalingActivityId3;

        return $this;
    }

    /**
     * @param string $scalingActivityId4
     *
     * @return $this
     */
    public function setScalingActivityId4($scalingActivityId4)
    {
        $this->requestParameters['ScalingActivityId4'] = $scalingActivityId4;
        $this->queryParameters['ScalingActivityId.4'] = $scalingActivityId4;

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
     * @param string $statusCode
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->requestParameters['StatusCode'] = $statusCode;
        $this->queryParameters['StatusCode'] = $statusCode;

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
     * @param string $scalingActivityId11
     *
     * @return $this
     */
    public function setScalingActivityId11($scalingActivityId11)
    {
        $this->requestParameters['ScalingActivityId11'] = $scalingActivityId11;
        $this->queryParameters['ScalingActivityId.11'] = $scalingActivityId11;

        return $this;
    }

    /**
     * @param string $scalingActivityId10
     *
     * @return $this
     */
    public function setScalingActivityId10($scalingActivityId10)
    {
        $this->requestParameters['ScalingActivityId10'] = $scalingActivityId10;
        $this->queryParameters['ScalingActivityId.10'] = $scalingActivityId10;

        return $this;
    }

    /**
     * @param string $scalingActivityId13
     *
     * @return $this
     */
    public function setScalingActivityId13($scalingActivityId13)
    {
        $this->requestParameters['ScalingActivityId13'] = $scalingActivityId13;
        $this->queryParameters['ScalingActivityId.13'] = $scalingActivityId13;

        return $this;
    }

    /**
     * @param string $scalingActivityId12
     *
     * @return $this
     */
    public function setScalingActivityId12($scalingActivityId12)
    {
        $this->requestParameters['ScalingActivityId12'] = $scalingActivityId12;
        $this->queryParameters['ScalingActivityId.12'] = $scalingActivityId12;

        return $this;
    }

    /**
     * @param string $scalingActivityId15
     *
     * @return $this
     */
    public function setScalingActivityId15($scalingActivityId15)
    {
        $this->requestParameters['ScalingActivityId15'] = $scalingActivityId15;
        $this->queryParameters['ScalingActivityId.15'] = $scalingActivityId15;

        return $this;
    }

    /**
     * @param string $scalingActivityId14
     *
     * @return $this
     */
    public function setScalingActivityId14($scalingActivityId14)
    {
        $this->requestParameters['ScalingActivityId14'] = $scalingActivityId14;
        $this->queryParameters['ScalingActivityId.14'] = $scalingActivityId14;

        return $this;
    }

    /**
     * @param string $scalingActivityId17
     *
     * @return $this
     */
    public function setScalingActivityId17($scalingActivityId17)
    {
        $this->requestParameters['ScalingActivityId17'] = $scalingActivityId17;
        $this->queryParameters['ScalingActivityId.17'] = $scalingActivityId17;

        return $this;
    }

    /**
     * @param string $scalingActivityId16
     *
     * @return $this
     */
    public function setScalingActivityId16($scalingActivityId16)
    {
        $this->requestParameters['ScalingActivityId16'] = $scalingActivityId16;
        $this->queryParameters['ScalingActivityId.16'] = $scalingActivityId16;

        return $this;
    }

    /**
     * @param string $scalingActivityId19
     *
     * @return $this
     */
    public function setScalingActivityId19($scalingActivityId19)
    {
        $this->requestParameters['ScalingActivityId19'] = $scalingActivityId19;
        $this->queryParameters['ScalingActivityId.19'] = $scalingActivityId19;

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
     * @param string $scalingActivityId18
     *
     * @return $this
     */
    public function setScalingActivityId18($scalingActivityId18)
    {
        $this->requestParameters['ScalingActivityId18'] = $scalingActivityId18;
        $this->queryParameters['ScalingActivityId.18'] = $scalingActivityId18;

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
     * @param string $scalingActivityId20
     *
     * @return $this
     */
    public function setScalingActivityId20($scalingActivityId20)
    {
        $this->requestParameters['ScalingActivityId20'] = $scalingActivityId20;
        $this->queryParameters['ScalingActivityId.20'] = $scalingActivityId20;

        return $this;
    }
}
