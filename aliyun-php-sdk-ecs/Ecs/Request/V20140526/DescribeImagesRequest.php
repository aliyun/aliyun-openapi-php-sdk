<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DescribeImages
 *
 * @method string getActionType()
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getSnapshotId()
 * @method string getUsage()
 * @method string getPageNumber()
 * @method string getImageOwnerAlias()
 * @method string getResourceGroupId()
 * @method string getIsSupportIoOptimized()
 * @method string getImageName()
 * @method string getIsSupportCloudinit()
 * @method string getPageSize()
 * @method string getInstanceType()
 * @method array getTags()
 * @method string getArchitecture()
 * @method string getDryRun()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getShowExpired()
 * @method string getOSType()
 * @method string getOwnerId()
 * @method array getFilters()
 * @method string getStatus()
 */
class DescribeImagesRequest extends \RpcAcsRequest
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
            'DescribeImages',
            'ecs'
        );
    }

    /**
     * @param string $actionType
     *
     * @return $this
     */
    public function setActionType($actionType)
    {
        $this->requestParameters['ActionType'] = $actionType;
        $this->queryParameters['ActionType'] = $actionType;

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
     * @param string $snapshotId
     *
     * @return $this
     */
    public function setSnapshotId($snapshotId)
    {
        $this->requestParameters['SnapshotId'] = $snapshotId;
        $this->queryParameters['SnapshotId'] = $snapshotId;

        return $this;
    }

    /**
     * @param string $usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->requestParameters['Usage'] = $usage;
        $this->queryParameters['Usage'] = $usage;

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
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        $this->requestParameters['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->queryParameters['ImageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $isSupportIoOptimized
     *
     * @return $this
     */
    public function setIsSupportIoOptimized($isSupportIoOptimized)
    {
        $this->requestParameters['IsSupportIoOptimized'] = $isSupportIoOptimized;
        $this->queryParameters['IsSupportIoOptimized'] = $isSupportIoOptimized;

        return $this;
    }

    /**
     * @param string $imageName
     *
     * @return $this
     */
    public function setImageName($imageName)
    {
        $this->requestParameters['ImageName'] = $imageName;
        $this->queryParameters['ImageName'] = $imageName;

        return $this;
    }

    /**
     * @param string $isSupportCloudinit
     *
     * @return $this
     */
    public function setIsSupportCloudinit($isSupportCloudinit)
    {
        $this->requestParameters['IsSupportCloudinit'] = $isSupportCloudinit;
        $this->queryParameters['IsSupportCloudinit'] = $isSupportCloudinit;

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
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->requestParameters['Tags'] = $tags;
        foreach ($tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $tags[$i]['Value'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $tags[$i]['Key'];
        }

        return $this;
    }

    /**
     * @param string $architecture
     *
     * @return $this
     */
    public function setArchitecture($architecture)
    {
        $this->requestParameters['Architecture'] = $architecture;
        $this->queryParameters['Architecture'] = $architecture;

        return $this;
    }

    /**
     * @param string $dryRun
     *
     * @return $this
     */
    public function setDryRun($dryRun)
    {
        $this->requestParameters['DryRun'] = $dryRun;
        $this->queryParameters['DryRun'] = $dryRun;

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
     * @param string $showExpired
     *
     * @return $this
     */
    public function setShowExpired($showExpired)
    {
        $this->requestParameters['ShowExpired'] = $showExpired;
        $this->queryParameters['ShowExpired'] = $showExpired;

        return $this;
    }

    /**
     * @param string $oSType
     *
     * @return $this
     */
    public function setOSType($oSType)
    {
        $this->requestParameters['OSType'] = $oSType;
        $this->queryParameters['OSType'] = $oSType;

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
     * @param array $filters
     *
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->requestParameters['Filters'] = $filters;
        foreach ($filters as $i => $iValue) {
            $this->queryParameters['Filter.' . ($i + 1) . '.Value'] = $filters[$i]['Value'];
            $this->queryParameters['Filter.' . ($i + 1) . '.Key'] = $filters[$i]['Key'];
        }

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
