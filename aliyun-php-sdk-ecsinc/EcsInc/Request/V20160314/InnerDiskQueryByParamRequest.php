<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerDiskQueryByParam
 *
 * @method string getfuzzyDiskName()
 * @method string getResourceOwnerId()
 * @method string getizNo()
 * @method string getprePayEcsInstanceIds()
 * @method string getautoSnapshotPolicyId()
 * @method string getchannel()
 * @method string getoperator()
 * @method string getexcludeStatus()
 * @method string getdiskName()
 * @method string getdeleteAutoSnapshot()
 * @method string getdiskCategory()
 * @method string getpageSize()
 * @method string getsnapshotNo()
 * @method string getaliUid()
 * @method string getdeleteWithInstance()
 * @method string getproxyId()
 * @method string getpostPayEcsInstanceIds()
 * @method string getecsInstanceId()
 * @method string getenableAutoSnapshot()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getactive()
 * @method string getimageNo()
 * @method string getcreateTimeFrom()
 * @method string getenableAutomatedSnapshotPolicy()
 * @method string getportable()
 * @method string getOwnerId()
 * @method string getdiskType()
 * @method string gettoken()
 * @method string gettags()
 * @method string getasync()
 * @method string getinstanceIds()
 * @method string getpageNo()
 * @method string getcreateTimeTo()
 * @method string getbid()
 * @method string getstatus()
 */
class InnerDiskQueryByParamRequest extends \RpcAcsRequest
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
            'InnerDiskQueryByParam',
            'ecs'
        );
    }

    /**
     * @param string $fuzzyDiskName
     *
     * @return $this
     */
    public function setfuzzyDiskName($fuzzyDiskName)
    {
        $this->requestParameters['fuzzyDiskName'] = $fuzzyDiskName;
        $this->queryParameters['fuzzyDiskName'] = $fuzzyDiskName;

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
     * @param string $izNo
     *
     * @return $this
     */
    public function setizNo($izNo)
    {
        $this->requestParameters['izNo'] = $izNo;
        $this->queryParameters['izNo'] = $izNo;

        return $this;
    }

    /**
     * @param string $prePayEcsInstanceIds
     *
     * @return $this
     */
    public function setprePayEcsInstanceIds($prePayEcsInstanceIds)
    {
        $this->requestParameters['prePayEcsInstanceIds'] = $prePayEcsInstanceIds;
        $this->queryParameters['prePayEcsInstanceIds'] = $prePayEcsInstanceIds;

        return $this;
    }

    /**
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function setautoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        $this->requestParameters['autoSnapshotPolicyId'] = $autoSnapshotPolicyId;
        $this->queryParameters['autoSnapshotPolicyId'] = $autoSnapshotPolicyId;

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
     * @param string $excludeStatus
     *
     * @return $this
     */
    public function setexcludeStatus($excludeStatus)
    {
        $this->requestParameters['excludeStatus'] = $excludeStatus;
        $this->queryParameters['excludeStatus'] = $excludeStatus;

        return $this;
    }

    /**
     * @param string $diskName
     *
     * @return $this
     */
    public function setdiskName($diskName)
    {
        $this->requestParameters['diskName'] = $diskName;
        $this->queryParameters['diskName'] = $diskName;

        return $this;
    }

    /**
     * @param string $deleteAutoSnapshot
     *
     * @return $this
     */
    public function setdeleteAutoSnapshot($deleteAutoSnapshot)
    {
        $this->requestParameters['deleteAutoSnapshot'] = $deleteAutoSnapshot;
        $this->queryParameters['deleteAutoSnapshot'] = $deleteAutoSnapshot;

        return $this;
    }

    /**
     * @param string $diskCategory
     *
     * @return $this
     */
    public function setdiskCategory($diskCategory)
    {
        $this->requestParameters['diskCategory'] = $diskCategory;
        $this->queryParameters['diskCategory'] = $diskCategory;

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
     * @param string $snapshotNo
     *
     * @return $this
     */
    public function setsnapshotNo($snapshotNo)
    {
        $this->requestParameters['snapshotNo'] = $snapshotNo;
        $this->queryParameters['snapshotNo'] = $snapshotNo;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function setaliUid($aliUid)
    {
        $this->requestParameters['aliUid'] = $aliUid;
        $this->queryParameters['aliUid'] = $aliUid;

        return $this;
    }

    /**
     * @param string $deleteWithInstance
     *
     * @return $this
     */
    public function setdeleteWithInstance($deleteWithInstance)
    {
        $this->requestParameters['deleteWithInstance'] = $deleteWithInstance;
        $this->queryParameters['deleteWithInstance'] = $deleteWithInstance;

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
     * @param string $postPayEcsInstanceIds
     *
     * @return $this
     */
    public function setpostPayEcsInstanceIds($postPayEcsInstanceIds)
    {
        $this->requestParameters['postPayEcsInstanceIds'] = $postPayEcsInstanceIds;
        $this->queryParameters['postPayEcsInstanceIds'] = $postPayEcsInstanceIds;

        return $this;
    }

    /**
     * @param string $ecsInstanceId
     *
     * @return $this
     */
    public function setecsInstanceId($ecsInstanceId)
    {
        $this->requestParameters['ecsInstanceId'] = $ecsInstanceId;
        $this->queryParameters['ecsInstanceId'] = $ecsInstanceId;

        return $this;
    }

    /**
     * @param string $enableAutoSnapshot
     *
     * @return $this
     */
    public function setenableAutoSnapshot($enableAutoSnapshot)
    {
        $this->requestParameters['enableAutoSnapshot'] = $enableAutoSnapshot;
        $this->queryParameters['enableAutoSnapshot'] = $enableAutoSnapshot;

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
     * @param string $active
     *
     * @return $this
     */
    public function setactive($active)
    {
        $this->requestParameters['active'] = $active;
        $this->queryParameters['active'] = $active;

        return $this;
    }

    /**
     * @param string $imageNo
     *
     * @return $this
     */
    public function setimageNo($imageNo)
    {
        $this->requestParameters['imageNo'] = $imageNo;
        $this->queryParameters['imageNo'] = $imageNo;

        return $this;
    }

    /**
     * @param string $createTimeFrom
     *
     * @return $this
     */
    public function setcreateTimeFrom($createTimeFrom)
    {
        $this->requestParameters['createTimeFrom'] = $createTimeFrom;
        $this->queryParameters['createTimeFrom'] = $createTimeFrom;

        return $this;
    }

    /**
     * @param string $enableAutomatedSnapshotPolicy
     *
     * @return $this
     */
    public function setenableAutomatedSnapshotPolicy($enableAutomatedSnapshotPolicy)
    {
        $this->requestParameters['enableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;
        $this->queryParameters['enableAutomatedSnapshotPolicy'] = $enableAutomatedSnapshotPolicy;

        return $this;
    }

    /**
     * @param string $portable
     *
     * @return $this
     */
    public function setportable($portable)
    {
        $this->requestParameters['portable'] = $portable;
        $this->queryParameters['portable'] = $portable;

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
     * @param string $tags
     *
     * @return $this
     */
    public function settags($tags)
    {
        $this->requestParameters['tags'] = $tags;
        $this->queryParameters['tags'] = $tags;

        return $this;
    }

    /**
     * @param string $async
     *
     * @return $this
     */
    public function setasync($async)
    {
        $this->requestParameters['async'] = $async;
        $this->queryParameters['async'] = $async;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setinstanceIds($instanceIds)
    {
        $this->requestParameters['instanceIds'] = $instanceIds;
        $this->queryParameters['instanceIds'] = $instanceIds;

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
     * @param string $createTimeTo
     *
     * @return $this
     */
    public function setcreateTimeTo($createTimeTo)
    {
        $this->requestParameters['createTimeTo'] = $createTimeTo;
        $this->queryParameters['createTimeTo'] = $createTimeTo;

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
     * @param string $status
     *
     * @return $this
     */
    public function setstatus($status)
    {
        $this->requestParameters['status'] = $status;
        $this->queryParameters['status'] = $status;

        return $this;
    }
}
