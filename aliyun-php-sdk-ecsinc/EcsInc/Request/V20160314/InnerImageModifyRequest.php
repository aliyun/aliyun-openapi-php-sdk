<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerImageModify
 *
 * @method string getResourceOwnerId()
 * @method string getimageId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getosTypeId()
 * @method string getchannel()
 * @method string getremark()
 * @method string getimageSize()
 * @method string getOwnerId()
 * @method string getvirtBaseImageId()
 * @method string getoperator()
 * @method string getimageCategory()
 * @method string gettoken()
 * @method string getasync()
 * @method string getimageName()
 * @method string getisPublic()
 * @method string getImageVersion()
 * @method string getaliUid()
 * @method string getbid()
 * @method string getproxyId()
 */
class InnerImageModifyRequest extends \RpcAcsRequest
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
            'InnerImageModify',
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
    public function setimageId($imageId)
    {
        $this->requestParameters['imageId'] = $imageId;
        $this->queryParameters['imageId'] = $imageId;

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
     * @param string $remark
     *
     * @return $this
     */
    public function setremark($remark)
    {
        $this->requestParameters['remark'] = $remark;
        $this->queryParameters['remark'] = $remark;

        return $this;
    }

    /**
     * @param string $imageSize
     *
     * @return $this
     */
    public function setimageSize($imageSize)
    {
        $this->requestParameters['imageSize'] = $imageSize;
        $this->queryParameters['imageSize'] = $imageSize;

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
     * @param string $virtBaseImageId
     *
     * @return $this
     */
    public function setvirtBaseImageId($virtBaseImageId)
    {
        $this->requestParameters['virtBaseImageId'] = $virtBaseImageId;
        $this->queryParameters['virtBaseImageId'] = $virtBaseImageId;

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
     * @param string $imageCategory
     *
     * @return $this
     */
    public function setimageCategory($imageCategory)
    {
        $this->requestParameters['imageCategory'] = $imageCategory;
        $this->queryParameters['imageCategory'] = $imageCategory;

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
     * @param string $imageVersion
     *
     * @return $this
     */
    public function setImageVersion($imageVersion)
    {
        $this->requestParameters['ImageVersion'] = $imageVersion;
        $this->queryParameters['ImageVersion'] = $imageVersion;

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
}
