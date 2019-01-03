<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerInstanceQueryByParamBackyard
 *
 * @method string getstartOfInternetTx()
 * @method string getecsIds()
 * @method string getResourceOwnerId()
 * @method string getimageId()
 * @method string getinternetIp()
 * @method string getizNo()
 * @method string getioOptimized()
 * @method string getchannel()
 * @method string getvpcInstanceId()
 * @method string getimgPc()
 * @method string getnotSyncHouyi()
 * @method string getinstanceTypeId()
 * @method string getoperator()
 * @method string getvswInstanceId()
 * @method string gethostname()
 * @method string getcores()
 * @method string getzoneNo()
 * @method string getmem()
 * @method string getbizStatus()
 * @method string getpageSize()
 * @method string getaliUid()
 * @method string getexclusionEcsIds()
 * @method string getproxyId()
 * @method string getorder()
 * @method string getsystemDeviceCategory()
 * @method string getimageType()
 * @method string getagentId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getendOfInternetTx()
 * @method string getOwnerId()
 * @method string getregionIndexId()
 * @method string gettoken()
 * @method string getecsNetworkType()
 * @method string getregionNo()
 * @method string getinstanceIds()
 * @method string getpageNo()
 * @method string getzoneId()
 * @method string getappKey()
 * @method string getbid()
 * @method string getizId()
 * @method string getintranetIp()
 * @method string getstatus()
 * @method string getorderType()
 */
class InnerInstanceQueryByParamBackyardRequest extends \RpcAcsRequest
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
            'InnerInstanceQueryByParamBackyard',
            'ecs'
        );
    }

    /**
     * @param string $startOfInternetTx
     *
     * @return $this
     */
    public function setstartOfInternetTx($startOfInternetTx)
    {
        $this->requestParameters['startOfInternetTx'] = $startOfInternetTx;
        $this->queryParameters['startOfInternetTx'] = $startOfInternetTx;

        return $this;
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
     * @param string $internetIp
     *
     * @return $this
     */
    public function setinternetIp($internetIp)
    {
        $this->requestParameters['internetIp'] = $internetIp;
        $this->queryParameters['internetIp'] = $internetIp;

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
     * @param string $imgPc
     *
     * @return $this
     */
    public function setimgPc($imgPc)
    {
        $this->requestParameters['imgPc'] = $imgPc;
        $this->queryParameters['imgPc'] = $imgPc;

        return $this;
    }

    /**
     * @param string $notSyncHouyi
     *
     * @return $this
     */
    public function setnotSyncHouyi($notSyncHouyi)
    {
        $this->requestParameters['notSyncHouyi'] = $notSyncHouyi;
        $this->queryParameters['notSyncHouyi'] = $notSyncHouyi;

        return $this;
    }

    /**
     * @param string $instanceTypeId
     *
     * @return $this
     */
    public function setinstanceTypeId($instanceTypeId)
    {
        $this->requestParameters['instanceTypeId'] = $instanceTypeId;
        $this->queryParameters['instanceTypeId'] = $instanceTypeId;

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
     * @param string $hostname
     *
     * @return $this
     */
    public function sethostname($hostname)
    {
        $this->requestParameters['hostname'] = $hostname;
        $this->queryParameters['hostname'] = $hostname;

        return $this;
    }

    /**
     * @param string $cores
     *
     * @return $this
     */
    public function setcores($cores)
    {
        $this->requestParameters['cores'] = $cores;
        $this->queryParameters['cores'] = $cores;

        return $this;
    }

    /**
     * @param string $zoneNo
     *
     * @return $this
     */
    public function setzoneNo($zoneNo)
    {
        $this->requestParameters['zoneNo'] = $zoneNo;
        $this->queryParameters['zoneNo'] = $zoneNo;

        return $this;
    }

    /**
     * @param string $mem
     *
     * @return $this
     */
    public function setmem($mem)
    {
        $this->requestParameters['mem'] = $mem;
        $this->queryParameters['mem'] = $mem;

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
     * @param string $exclusionEcsIds
     *
     * @return $this
     */
    public function setexclusionEcsIds($exclusionEcsIds)
    {
        $this->requestParameters['exclusionEcsIds'] = $exclusionEcsIds;
        $this->queryParameters['exclusionEcsIds'] = $exclusionEcsIds;

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
     * @param string $order
     *
     * @return $this
     */
    public function setorder($order)
    {
        $this->requestParameters['order'] = $order;
        $this->queryParameters['order'] = $order;

        return $this;
    }

    /**
     * @param string $systemDeviceCategory
     *
     * @return $this
     */
    public function setsystemDeviceCategory($systemDeviceCategory)
    {
        $this->requestParameters['systemDeviceCategory'] = $systemDeviceCategory;
        $this->queryParameters['systemDeviceCategory'] = $systemDeviceCategory;

        return $this;
    }

    /**
     * @param string $imageType
     *
     * @return $this
     */
    public function setimageType($imageType)
    {
        $this->requestParameters['imageType'] = $imageType;
        $this->queryParameters['imageType'] = $imageType;

        return $this;
    }

    /**
     * @param string $agentId
     *
     * @return $this
     */
    public function setagentId($agentId)
    {
        $this->requestParameters['agentId'] = $agentId;
        $this->queryParameters['agentId'] = $agentId;

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
     * @param string $endOfInternetTx
     *
     * @return $this
     */
    public function setendOfInternetTx($endOfInternetTx)
    {
        $this->requestParameters['endOfInternetTx'] = $endOfInternetTx;
        $this->queryParameters['endOfInternetTx'] = $endOfInternetTx;

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
     * @param string $zoneId
     *
     * @return $this
     */
    public function setzoneId($zoneId)
    {
        $this->requestParameters['zoneId'] = $zoneId;
        $this->queryParameters['zoneId'] = $zoneId;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setappKey($appKey)
    {
        $this->requestParameters['appKey'] = $appKey;
        $this->queryParameters['appKey'] = $appKey;

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
     * @param string $izId
     *
     * @return $this
     */
    public function setizId($izId)
    {
        $this->requestParameters['izId'] = $izId;
        $this->queryParameters['izId'] = $izId;

        return $this;
    }

    /**
     * @param string $intranetIp
     *
     * @return $this
     */
    public function setintranetIp($intranetIp)
    {
        $this->requestParameters['intranetIp'] = $intranetIp;
        $this->queryParameters['intranetIp'] = $intranetIp;

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

    /**
     * @param string $orderType
     *
     * @return $this
     */
    public function setorderType($orderType)
    {
        $this->requestParameters['orderType'] = $orderType;
        $this->queryParameters['orderType'] = $orderType;

        return $this;
    }
}
