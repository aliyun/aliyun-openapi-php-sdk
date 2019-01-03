<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerImageQueryUserImages
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getosTypeId()
 * @method string getchannel()
 * @method string getOwnerId()
 * @method string getregionIndexId()
 * @method string getoperator()
 * @method string gettoken()
 * @method string getimageName()
 * @method string getpageNo()
 * @method string getisPublic()
 * @method string getpageSize()
 * @method string getsnapshotNo()
 * @method string getaliUid()
 * @method string getbid()
 * @method string getproxyId()
 * @method string getstatus()
 */
class InnerImageQueryUserImagesRequest extends \RpcAcsRequest
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
            'InnerImageQueryUserImages',
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
     * @param string $osTypeId
     *
     * @return $this
     */
    public function setosTypeId($osTypeId)
    {
        $this->requestParameters['osTypeId'] = $osTypeId;
        $this->queryParameters['osTypeId'] = $osTypeId;

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
     * @param string $isPublic
     *
     * @return $this
     */
    public function setisPublic($isPublic)
    {
        $this->requestParameters['isPublic'] = $isPublic;
        $this->queryParameters['isPublic'] = $isPublic;

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
