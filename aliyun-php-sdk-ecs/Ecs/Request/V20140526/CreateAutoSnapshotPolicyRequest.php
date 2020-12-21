<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAutoSnapshotPolicy
 *
 * @method string getResourceOwnerId()
 * @method string getCopiedSnapshotsRetentionDays()
 * @method string gettimePoints()
 * @method string getrepeatWeekdays()
 * @method array getTags()
 * @method string getEnableCrossRegionCopy()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getautoSnapshotPolicyName()
 * @method string getretentionDays()
 * @method string getTargetCopyRegions()
 */
class CreateAutoSnapshotPolicyRequest extends \RpcAcsRequest
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
            'CreateAutoSnapshotPolicy',
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
     * @param string $copiedSnapshotsRetentionDays
     *
     * @return $this
     */
    public function setCopiedSnapshotsRetentionDays($copiedSnapshotsRetentionDays)
    {
        $this->requestParameters['CopiedSnapshotsRetentionDays'] = $copiedSnapshotsRetentionDays;
        $this->queryParameters['CopiedSnapshotsRetentionDays'] = $copiedSnapshotsRetentionDays;

        return $this;
    }

    /**
     * @param string $timePoints
     *
     * @return $this
     */
    public function settimePoints($timePoints)
    {
        $this->requestParameters['timePoints'] = $timePoints;
        $this->queryParameters['timePoints'] = $timePoints;

        return $this;
    }

    /**
     * @param string $repeatWeekdays
     *
     * @return $this
     */
    public function setrepeatWeekdays($repeatWeekdays)
    {
        $this->requestParameters['repeatWeekdays'] = $repeatWeekdays;
        $this->queryParameters['repeatWeekdays'] = $repeatWeekdays;

        return $this;
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
		}

		return $this;
    }

    /**
     * @param string $enableCrossRegionCopy
     *
     * @return $this
     */
    public function setEnableCrossRegionCopy($enableCrossRegionCopy)
    {
        $this->requestParameters['EnableCrossRegionCopy'] = $enableCrossRegionCopy;
        $this->queryParameters['EnableCrossRegionCopy'] = $enableCrossRegionCopy;

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
     * @param string $autoSnapshotPolicyName
     *
     * @return $this
     */
    public function setautoSnapshotPolicyName($autoSnapshotPolicyName)
    {
        $this->requestParameters['autoSnapshotPolicyName'] = $autoSnapshotPolicyName;
        $this->queryParameters['autoSnapshotPolicyName'] = $autoSnapshotPolicyName;

        return $this;
    }

    /**
     * @param string $retentionDays
     *
     * @return $this
     */
    public function setretentionDays($retentionDays)
    {
        $this->requestParameters['retentionDays'] = $retentionDays;
        $this->queryParameters['retentionDays'] = $retentionDays;

        return $this;
    }

    /**
     * @param string $targetCopyRegions
     *
     * @return $this
     */
    public function setTargetCopyRegions($targetCopyRegions)
    {
        $this->requestParameters['TargetCopyRegions'] = $targetCopyRegions;
        $this->queryParameters['TargetCopyRegions'] = $targetCopyRegions;

        return $this;
    }
}
