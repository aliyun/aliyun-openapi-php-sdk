<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerEcsInstanceQueryByParam
 *
 * @method string getResourceOwnerId()
 * @method string getizNo()
 * @method string getimageId()
 * @method string getisNeedDetail()
 * @method string getioOptimized()
 * @method string getchannel()
 * @method string getvpcInstanceId()
 * @method string getoperator()
 * @method string getvswInstanceId()
 * @method string getinnerIps()
 * @method string getbizStatus()
 * @method string getdeviceAvailable()
 * @method string getpageSize()
 * @method string getinstanceType()
 * @method string getaliUid()
 * @method string getpublicIps()
 * @method string getproxyId()
 * @method string getprivateIps()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getinstanceTypeFamily()
 * @method string getOwnerId()
 * @method string gettoken()
 * @method string gettags()
 * @method string getecsNetworkType()
 * @method string getasync()
 * @method string getinstanceIds()
 * @method string getpageNo()
 * @method string getfuzzyInstanceName()
 * @method string getbid()
 * @method string getgroupNo()
 * @method string getstatus()
 */
class InnerEcsInstanceQueryByParamRequest extends \RpcAcsRequest
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
            'InnerEcsInstanceQueryByParam',
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
     * @param string $imageId
     *
     * @return $this
     */
    public function setimageId($imageId)
    {
        $this->requestParameters['imageId'] = $imageId;
        $this->queryParameters['imageId'] = $imageId;

        return $this;
    }

    /**
     * @param string $isNeedDetail
     *
     * @return $this
     */
    public function setisNeedDetail($isNeedDetail)
    {
        $this->requestParameters['isNeedDetail'] = $isNeedDetail;
        $this->queryParameters['isNeedDetail'] = $isNeedDetail;

        return $this;
    }

    /**
     * @param string $ioOptimized
     *
     * @return $this
     */
    public function setioOptimized($ioOptimized)
    {
        $this->requestParameters['ioOptimized'] = $ioOptimized;
        $this->queryParameters['ioOptimized'] = $ioOptimized;

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
     * @param string $vpcInstanceId
     *
     * @return $this
     */
    public function setvpcInstanceId($vpcInstanceId)
    {
        $this->requestParameters['vpcInstanceId'] = $vpcInstanceId;
        $this->queryParameters['vpcInstanceId'] = $vpcInstanceId;

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
     * @param string $vswInstanceId
     *
     * @return $this
     */
    public function setvswInstanceId($vswInstanceId)
    {
        $this->requestParameters['vswInstanceId'] = $vswInstanceId;
        $this->queryParameters['vswInstanceId'] = $vswInstanceId;

        return $this;
    }

    /**
     * @param string $innerIps
     *
     * @return $this
     */
    public function setinnerIps($innerIps)
    {
        $this->requestParameters['innerIps'] = $innerIps;
        $this->queryParameters['innerIps'] = $innerIps;

        return $this;
    }

    /**
     * @param string $bizStatus
     *
     * @return $this
     */
    public function setbizStatus($bizStatus)
    {
        $this->requestParameters['bizStatus'] = $bizStatus;
        $this->queryParameters['bizStatus'] = $bizStatus;

        return $this;
    }

    /**
     * @param string $deviceAvailable
     *
     * @return $this
     */
    public function setdeviceAvailable($deviceAvailable)
    {
        $this->requestParameters['deviceAvailable'] = $deviceAvailable;
        $this->queryParameters['deviceAvailable'] = $deviceAvailable;

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
     * @param string $instanceType
     *
     * @return $this
     */
    public function setinstanceType($instanceType)
    {
        $this->requestParameters['instanceType'] = $instanceType;
        $this->queryParameters['instanceType'] = $instanceType;

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
     * @param string $publicIps
     *
     * @return $this
     */
    public function setpublicIps($publicIps)
    {
        $this->requestParameters['publicIps'] = $publicIps;
        $this->queryParameters['publicIps'] = $publicIps;

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
     * @param string $privateIps
     *
     * @return $this
     */
    public function setprivateIps($privateIps)
    {
        $this->requestParameters['privateIps'] = $privateIps;
        $this->queryParameters['privateIps'] = $privateIps;

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
     * @param string $instanceTypeFamily
     *
     * @return $this
     */
    public function setinstanceTypeFamily($instanceTypeFamily)
    {
        $this->requestParameters['instanceTypeFamily'] = $instanceTypeFamily;
        $this->queryParameters['instanceTypeFamily'] = $instanceTypeFamily;

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
     * @param string $ecsNetworkType
     *
     * @return $this
     */
    public function setecsNetworkType($ecsNetworkType)
    {
        $this->requestParameters['ecsNetworkType'] = $ecsNetworkType;
        $this->queryParameters['ecsNetworkType'] = $ecsNetworkType;

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
     * @param string $fuzzyInstanceName
     *
     * @return $this
     */
    public function setfuzzyInstanceName($fuzzyInstanceName)
    {
        $this->requestParameters['fuzzyInstanceName'] = $fuzzyInstanceName;
        $this->queryParameters['fuzzyInstanceName'] = $fuzzyInstanceName;

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
     * @param string $groupNo
     *
     * @return $this
     */
    public function setgroupNo($groupNo)
    {
        $this->requestParameters['groupNo'] = $groupNo;
        $this->queryParameters['groupNo'] = $groupNo;

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
