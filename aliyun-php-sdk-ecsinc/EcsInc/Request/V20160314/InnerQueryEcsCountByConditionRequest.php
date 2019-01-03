<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerQueryEcsCountByCondition
 *
 * @method string getBizRegionId()
 * @method string getResourceOwnerId()
 * @method string getNetworkType()
 * @method string getStartTime()
 * @method array getTagValues()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getEndTime()
 * @method string getOwnerId()
 * @method array getVSwitchIds()
 * @method string getMetric()
 * @method string getTagKey()
 */
class InnerQueryEcsCountByConditionRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'InnerQueryEcsCountByCondition',
            'ecs'
        );
    }

    /**
     * @param string $bizRegionId
     *
     * @return $this
     */
    public function setBizRegionId($bizRegionId)
    {
        $this->requestParameters['BizRegionId'] = $bizRegionId;
        $this->queryParameters['BizRegionId'] = $bizRegionId;

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
     * @param string $networkType
     *
     * @return $this
     */
    public function setNetworkType($networkType)
    {
        $this->requestParameters['NetworkType'] = $networkType;
        $this->queryParameters['NetworkType'] = $networkType;

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
     * @param array $tagValues
     *
     * @return $this
     */
    public function setTagValues(array $tagValues)
    {
        $this->requestParameters['TagValues'] = $tagValues;
        foreach ($tagValues as $i => $iValue) {
            $this->queryParameters['TagValue.' . ($i + 1)] = $iValue;
        }

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
     * @param string $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->requestParameters['EndTime'] = $endTime;
        $this->queryParameters['EndTime'] = $endTime;

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
     * @param array $vSwitchIds
     *
     * @return $this
     */
    public function setVSwitchIds(array $vSwitchIds)
    {
        $this->requestParameters['VSwitchIds'] = $vSwitchIds;
        foreach ($vSwitchIds as $i => $iValue) {
            $this->queryParameters['VSwitchId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $metric
     *
     * @return $this
     */
    public function setMetric($metric)
    {
        $this->requestParameters['Metric'] = $metric;
        $this->queryParameters['Metric'] = $metric;

        return $this;
    }

    /**
     * @param string $tagKey
     *
     * @return $this
     */
    public function setTagKey($tagKey)
    {
        $this->requestParameters['TagKey'] = $tagKey;
        $this->queryParameters['TagKey'] = $tagKey;

        return $this;
    }
}
