<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerImageQueryImgsByParam
 *
 * @method string getResourceOwnerId()
 * @method string getimageId()
 * @method string getvisibility()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getosTypeId()
 * @method string getchannel()
 * @method string getOwnerId()
 * @method string getoperator()
 * @method string getimageCategory()
 * @method string gettoken()
 * @method string getrequestId()
 * @method string getpageSize()
 * @method string getaliUid()
 * @method string getpage()
 * @method string getbid()
 * @method string getproxyId()
 * @method string getstatus()
 */
class InnerImageQueryImgsByParamRequest extends \RpcAcsRequest
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
            'InnerImageQueryImgsByParam',
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
     * @param string $visibility
     *
     * @return $this
     */
    public function setvisibility($visibility)
    {
        $this->requestParameters['visibility'] = $visibility;
        $this->queryParameters['visibility'] = $visibility;

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
     * @param string $requestId
     *
     * @return $this
     */
    public function setrequestId($requestId)
    {
        $this->requestParameters['requestId'] = $requestId;
        $this->queryParameters['requestId'] = $requestId;

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
     * @param string $page
     *
     * @return $this
     */
    public function setpage($page)
    {
        $this->requestParameters['page'] = $page;
        $this->queryParameters['page'] = $page;

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
