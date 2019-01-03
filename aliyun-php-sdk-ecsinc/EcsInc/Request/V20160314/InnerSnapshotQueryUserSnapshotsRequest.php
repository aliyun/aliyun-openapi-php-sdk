<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerSnapshotQueryUserSnapshots
 *
 * @method string getecsIds()
 * @method string getResourceOwnerId()
 * @method string getsnapshotNickName()
 * @method string getaliUids()
 * @method string getsnapshotIds()
 * @method string getchannel()
 * @method string getdeviceNo()
 * @method string getoperator()
 * @method string getdeviceType()
 * @method string getgmtCreatedBegin()
 * @method string getecsSnapshotStatus()
 * @method string getcreateFinished()
 * @method string getfuzzySnapshotName()
 * @method string getpageSize()
 * @method string getdiskId()
 * @method string getecsSnapshotTypes()
 * @method string getquoteType()
 * @method string getgmtCreatedEnd()
 * @method string getproxyId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getexcludeSnapshotIds()
 * @method string getOwnerId()
 * @method string getdiskType()
 * @method string getregionIndexId()
 * @method string gettoken()
 * @method string getregionNo()
 * @method string getpageNo()
 * @method string getsnapshotSizeLowLimit()
 * @method string getids()
 * @method string getsnapshotSizeLimit()
 * @method string getisSyncHouyi()
 * @method string getbid()
 * @method string getsnapshotNos()
 */
class InnerSnapshotQueryUserSnapshotsRequest extends \RpcAcsRequest
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
            'InnerSnapshotQueryUserSnapshots',
            'ecs'
        );
    }

    /**
     * @param string $ecsIds
     *
     * @return $this
     */
    public function setecsIds($ecsIds)
    {
        $this->requestParameters['ecsIds'] = $ecsIds;
        $this->queryParameters['ecsIds'] = $ecsIds;

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
     * @param string $snapshotNickName
     *
     * @return $this
     */
    public function setsnapshotNickName($snapshotNickName)
    {
        $this->requestParameters['snapshotNickName'] = $snapshotNickName;
        $this->queryParameters['snapshotNickName'] = $snapshotNickName;

        return $this;
    }

    /**
     * @param string $aliUids
     *
     * @return $this
     */
    public function setaliUids($aliUids)
    {
        $this->requestParameters['aliUids'] = $aliUids;
        $this->queryParameters['aliUids'] = $aliUids;

        return $this;
    }

    /**
     * @param string $snapshotIds
     *
     * @return $this
     */
    public function setsnapshotIds($snapshotIds)
    {
        $this->requestParameters['snapshotIds'] = $snapshotIds;
        $this->queryParameters['snapshotIds'] = $snapshotIds;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setchannel($channel)
    {
        $this->requestParameters['channel'] = $channel;
        $this->queryParameters['channel'] = $channel;

        return $this;
    }

    /**
     * @param string $deviceNo
     *
     * @return $this
     */
    public function setdeviceNo($deviceNo)
    {
        $this->requestParameters['deviceNo'] = $deviceNo;
        $this->queryParameters['deviceNo'] = $deviceNo;

        return $this;
    }

    /**
     * @param string $operator
     *
     * @return $this
     */
    public function setoperator($operator)
    {
        $this->requestParameters['operator'] = $operator;
        $this->queryParameters['operator'] = $operator;

        return $this;
    }

    /**
     * @param string $deviceType
     *
     * @return $this
     */
    public function setdeviceType($deviceType)
    {
        $this->requestParameters['deviceType'] = $deviceType;
        $this->queryParameters['deviceType'] = $deviceType;

        return $this;
    }

    /**
     * @param string $gmtCreatedBegin
     *
     * @return $this
     */
    public function setgmtCreatedBegin($gmtCreatedBegin)
    {
        $this->requestParameters['gmtCreatedBegin'] = $gmtCreatedBegin;
        $this->queryParameters['gmtCreatedBegin'] = $gmtCreatedBegin;

        return $this;
    }

    /**
     * @param string $ecsSnapshotStatus
     *
     * @return $this
     */
    public function setecsSnapshotStatus($ecsSnapshotStatus)
    {
        $this->requestParameters['ecsSnapshotStatus'] = $ecsSnapshotStatus;
        $this->queryParameters['ecsSnapshotStatus'] = $ecsSnapshotStatus;

        return $this;
    }

    /**
     * @param string $createFinished
     *
     * @return $this
     */
    public function setcreateFinished($createFinished)
    {
        $this->requestParameters['createFinished'] = $createFinished;
        $this->queryParameters['createFinished'] = $createFinished;

        return $this;
    }

    /**
     * @param string $fuzzySnapshotName
     *
     * @return $this
     */
    public function setfuzzySnapshotName($fuzzySnapshotName)
    {
        $this->requestParameters['fuzzySnapshotName'] = $fuzzySnapshotName;
        $this->queryParameters['fuzzySnapshotName'] = $fuzzySnapshotName;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setpageSize($pageSize)
    {
        $this->requestParameters['pageSize'] = $pageSize;
        $this->queryParameters['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $diskId
     *
     * @return $this
     */
    public function setdiskId($diskId)
    {
        $this->requestParameters['diskId'] = $diskId;
        $this->queryParameters['diskId'] = $diskId;

        return $this;
    }

    /**
     * @param string $ecsSnapshotTypes
     *
     * @return $this
     */
    public function setecsSnapshotTypes($ecsSnapshotTypes)
    {
        $this->requestParameters['ecsSnapshotTypes'] = $ecsSnapshotTypes;
        $this->queryParameters['ecsSnapshotTypes'] = $ecsSnapshotTypes;

        return $this;
    }

    /**
     * @param string $quoteType
     *
     * @return $this
     */
    public function setquoteType($quoteType)
    {
        $this->requestParameters['quoteType'] = $quoteType;
        $this->queryParameters['quoteType'] = $quoteType;

        return $this;
    }

    /**
     * @param string $gmtCreatedEnd
     *
     * @return $this
     */
    public function setgmtCreatedEnd($gmtCreatedEnd)
    {
        $this->requestParameters['gmtCreatedEnd'] = $gmtCreatedEnd;
        $this->queryParameters['gmtCreatedEnd'] = $gmtCreatedEnd;

        return $this;
    }

    /**
     * @param string $proxyId
     *
     * @return $this
     */
    public function setproxyId($proxyId)
    {
        $this->requestParameters['proxyId'] = $proxyId;
        $this->queryParameters['proxyId'] = $proxyId;

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
     * @param string $excludeSnapshotIds
     *
     * @return $this
     */
    public function setexcludeSnapshotIds($excludeSnapshotIds)
    {
        $this->requestParameters['excludeSnapshotIds'] = $excludeSnapshotIds;
        $this->queryParameters['excludeSnapshotIds'] = $excludeSnapshotIds;

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
     * @param string $diskType
     *
     * @return $this
     */
    public function setdiskType($diskType)
    {
        $this->requestParameters['diskType'] = $diskType;
        $this->queryParameters['diskType'] = $diskType;

        return $this;
    }

    /**
     * @param string $regionIndexId
     *
     * @return $this
     */
    public function setregionIndexId($regionIndexId)
    {
        $this->requestParameters['regionIndexId'] = $regionIndexId;
        $this->queryParameters['regionIndexId'] = $regionIndexId;

        return $this;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function settoken($token)
    {
        $this->requestParameters['token'] = $token;
        $this->queryParameters['token'] = $token;

        return $this;
    }

    /**
     * @param string $regionNo
     *
     * @return $this
     */
    public function setregionNo($regionNo)
    {
        $this->requestParameters['regionNo'] = $regionNo;
        $this->queryParameters['regionNo'] = $regionNo;

        return $this;
    }

    /**
     * @param string $pageNo
     *
     * @return $this
     */
    public function setpageNo($pageNo)
    {
        $this->requestParameters['pageNo'] = $pageNo;
        $this->queryParameters['pageNo'] = $pageNo;

        return $this;
    }

    /**
     * @param string $snapshotSizeLowLimit
     *
     * @return $this
     */
    public function setsnapshotSizeLowLimit($snapshotSizeLowLimit)
    {
        $this->requestParameters['snapshotSizeLowLimit'] = $snapshotSizeLowLimit;
        $this->queryParameters['snapshotSizeLowLimit'] = $snapshotSizeLowLimit;

        return $this;
    }

    /**
     * @param string $ids
     *
     * @return $this
     */
    public function setids($ids)
    {
        $this->requestParameters['ids'] = $ids;
        $this->queryParameters['ids'] = $ids;

        return $this;
    }

    /**
     * @param string $snapshotSizeLimit
     *
     * @return $this
     */
    public function setsnapshotSizeLimit($snapshotSizeLimit)
    {
        $this->requestParameters['snapshotSizeLimit'] = $snapshotSizeLimit;
        $this->queryParameters['snapshotSizeLimit'] = $snapshotSizeLimit;

        return $this;
    }

    /**
     * @param string $isSyncHouyi
     *
     * @return $this
     */
    public function setisSyncHouyi($isSyncHouyi)
    {
        $this->requestParameters['isSyncHouyi'] = $isSyncHouyi;
        $this->queryParameters['isSyncHouyi'] = $isSyncHouyi;

        return $this;
    }

    /**
     * @param string $bid
     *
     * @return $this
     */
    public function setbid($bid)
    {
        $this->requestParameters['bid'] = $bid;
        $this->queryParameters['bid'] = $bid;

        return $this;
    }

    /**
     * @param string $snapshotNos
     *
     * @return $this
     */
    public function setsnapshotNos($snapshotNos)
    {
        $this->requestParameters['snapshotNos'] = $snapshotNos;
        $this->queryParameters['snapshotNos'] = $snapshotNos;

        return $this;
    }
}
