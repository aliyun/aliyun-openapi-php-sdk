<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerGroupQuery
 *
 * @method string getResourceOwnerId()
 * @method string getfuzzyQuery()
 * @method string getchannel()
 * @method string getisQueryEcsCount()
 * @method string getvpcInstanceId()
 * @method string getnetworkType()
 * @method string getoperator()
 * @method string getpageSize()
 * @method string getaliUid()
 * @method string getgroupNos()
 * @method string getproxyId()
 * @method string getecsInstanceId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getgroupName()
 * @method string gettoken()
 * @method string getisOnlyQueryVpcGroup()
 * @method string gettags()
 * @method string getregionNo()
 * @method string getasync()
 * @method string getpageNo()
 * @method string getbid()
 * @method string getgroupNo()
 */
class InnerGroupQueryRequest extends \RpcAcsRequest
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
            'InnerGroupQuery',
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
     * @param string $fuzzyQuery
     *
     * @return $this
     */
    public function setfuzzyQuery($fuzzyQuery)
    {
        $this->requestParameters['fuzzyQuery'] = $fuzzyQuery;
        $this->queryParameters['fuzzyQuery'] = $fuzzyQuery;

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
     * @param string $isQueryEcsCount
     *
     * @return $this
     */
    public function setisQueryEcsCount($isQueryEcsCount)
    {
        $this->requestParameters['isQueryEcsCount'] = $isQueryEcsCount;
        $this->queryParameters['isQueryEcsCount'] = $isQueryEcsCount;

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
     * @param string $networkType
     *
     * @return $this
     */
    public function setnetworkType($networkType)
    {
        $this->requestParameters['networkType'] = $networkType;
        $this->queryParameters['networkType'] = $networkType;

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
     * @param string $groupNos
     *
     * @return $this
     */
    public function setgroupNos($groupNos)
    {
        $this->requestParameters['groupNos'] = $groupNos;
        $this->queryParameters['groupNos'] = $groupNos;

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
     * @param string $groupName
     *
     * @return $this
     */
    public function setgroupName($groupName)
    {
        $this->requestParameters['groupName'] = $groupName;
        $this->queryParameters['groupName'] = $groupName;

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
     * @param string $isOnlyQueryVpcGroup
     *
     * @return $this
     */
    public function setisOnlyQueryVpcGroup($isOnlyQueryVpcGroup)
    {
        $this->requestParameters['isOnlyQueryVpcGroup'] = $isOnlyQueryVpcGroup;
        $this->queryParameters['isOnlyQueryVpcGroup'] = $isOnlyQueryVpcGroup;

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
}
