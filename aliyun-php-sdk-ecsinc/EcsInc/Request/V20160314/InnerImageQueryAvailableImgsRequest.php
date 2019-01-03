<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerImageQueryAvailableImgs
 *
 * @method string getResourceOwnerId()
 * @method string getsnapshotId()
 * @method string getioOptimized()
 * @method string getchannel()
 * @method string getisAll()
 * @method string getfuzzyImageName()
 * @method string getoperator()
 * @method string getimageOwnerAlias()
 * @method string getimageName()
 * @method string getpageSize()
 * @method string getinstanceType()
 * @method string getaliUid()
 * @method string getquoteType()
 * @method string getcreateEndTime()
 * @method string getproxyId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getuserCountryType()
 * @method string getosType()
 * @method string getOwnerId()
 * @method string getcreateStartTime()
 * @method string gettoken()
 * @method string gettags()
 * @method string getregionNos()
 * @method string getasync()
 * @method string getpageNo()
 * @method string getosBit()
 * @method string getbid()
 * @method string getimageIds()
 * @method string getstatus()
 */
class InnerImageQueryAvailableImgsRequest extends \RpcAcsRequest
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
            'InnerImageQueryAvailableImgs',
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
     * @param string $snapshotId
     *
     * @return $this
     */
    public function setsnapshotId($snapshotId)
    {
        $this->requestParameters['snapshotId'] = $snapshotId;
        $this->queryParameters['snapshotId'] = $snapshotId;

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
     * @param string $isAll
     *
     * @return $this
     */
    public function setisAll($isAll)
    {
        $this->requestParameters['isAll'] = $isAll;
        $this->queryParameters['isAll'] = $isAll;

        return $this;
    }

    /**
     * @param string $fuzzyImageName
     *
     * @return $this
     */
    public function setfuzzyImageName($fuzzyImageName)
    {
        $this->requestParameters['fuzzyImageName'] = $fuzzyImageName;
        $this->queryParameters['fuzzyImageName'] = $fuzzyImageName;

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
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setimageOwnerAlias($imageOwnerAlias)
    {
        $this->requestParameters['imageOwnerAlias'] = $imageOwnerAlias;
        $this->queryParameters['imageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }

    /**
     * @param string $imageName
     *
     * @return $this
     */
    public function setimageName($imageName)
    {
        $this->requestParameters['imageName'] = $imageName;
        $this->queryParameters['imageName'] = $imageName;

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
     * @param string $createEndTime
     *
     * @return $this
     */
    public function setcreateEndTime($createEndTime)
    {
        $this->requestParameters['createEndTime'] = $createEndTime;
        $this->queryParameters['createEndTime'] = $createEndTime;

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
     * @param string $userCountryType
     *
     * @return $this
     */
    public function setuserCountryType($userCountryType)
    {
        $this->requestParameters['userCountryType'] = $userCountryType;
        $this->queryParameters['userCountryType'] = $userCountryType;

        return $this;
    }

    /**
     * @param string $osType
     *
     * @return $this
     */
    public function setosType($osType)
    {
        $this->requestParameters['osType'] = $osType;
        $this->queryParameters['osType'] = $osType;

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
     * @param string $createStartTime
     *
     * @return $this
     */
    public function setcreateStartTime($createStartTime)
    {
        $this->requestParameters['createStartTime'] = $createStartTime;
        $this->queryParameters['createStartTime'] = $createStartTime;

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
     * @param string $regionNos
     *
     * @return $this
     */
    public function setregionNos($regionNos)
    {
        $this->requestParameters['regionNos'] = $regionNos;
        $this->queryParameters['regionNos'] = $regionNos;

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
     * @param string $osBit
     *
     * @return $this
     */
    public function setosBit($osBit)
    {
        $this->requestParameters['osBit'] = $osBit;
        $this->queryParameters['osBit'] = $osBit;

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
     * @param string $imageIds
     *
     * @return $this
     */
    public function setimageIds($imageIds)
    {
        $this->requestParameters['imageIds'] = $imageIds;
        $this->queryParameters['imageIds'] = $imageIds;

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
