<?php

namespace Tag_Inner\Request\V20181109;

/**
 * Request of InnerFixRegion
 *
 * @method string getResourceOwnerId()
 * @method string getFixRegionId()
 * @method string getTagOwnerUid()
 * @method string getResourceRelId()
 * @method string getTagOwnerBid()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTagValueId()
 * @method string getTagKeyId()
 */
class InnerFixRegionRequest extends \RpcAcsRequest
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
            'Tag-Inner',
            '2018-11-09',
            'InnerFixRegion',
            'tag',
            'innerAPI'
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
     * @param string $fixRegionId
     *
     * @return $this
     */
    public function setFixRegionId($fixRegionId)
    {
        $this->requestParameters['FixRegionId'] = $fixRegionId;
        $this->queryParameters['FixRegionId'] = $fixRegionId;

        return $this;
    }

    /**
     * @param string $tagOwnerUid
     *
     * @return $this
     */
    public function setTagOwnerUid($tagOwnerUid)
    {
        $this->requestParameters['TagOwnerUid'] = $tagOwnerUid;
        $this->queryParameters['TagOwnerUid'] = $tagOwnerUid;

        return $this;
    }

    /**
     * @param string $resourceRelId
     *
     * @return $this
     */
    public function setResourceRelId($resourceRelId)
    {
        $this->requestParameters['ResourceRelId'] = $resourceRelId;
        $this->queryParameters['ResourceRelId'] = $resourceRelId;

        return $this;
    }

    /**
     * @param string $tagOwnerBid
     *
     * @return $this
     */
    public function setTagOwnerBid($tagOwnerBid)
    {
        $this->requestParameters['TagOwnerBid'] = $tagOwnerBid;
        $this->queryParameters['TagOwnerBid'] = $tagOwnerBid;

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
     * @param string $tagValueId
     *
     * @return $this
     */
    public function setTagValueId($tagValueId)
    {
        $this->requestParameters['TagValueId'] = $tagValueId;
        $this->queryParameters['TagValueId'] = $tagValueId;

        return $this;
    }

    /**
     * @param string $tagKeyId
     *
     * @return $this
     */
    public function setTagKeyId($tagKeyId)
    {
        $this->requestParameters['TagKeyId'] = $tagKeyId;
        $this->queryParameters['TagKeyId'] = $tagKeyId;

        return $this;
    }
}
