<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of CopySystemImage
 *
 * @method string getTransitId()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getToImageName()
 * @method string getOwnerAccount()
 * @method array getToRegionNoLists()
 * @method string getToImageDesc()
 * @method array getTags()
 * @method string getOwnerId()
 */
class CopySystemImageRequest extends \RpcAcsRequest
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
            'CopySystemImage',
            'ecs'
        );
    }

    /**
     * @param string $transitId
     *
     * @return $this
     */
    public function setTransitId($transitId)
    {
        $this->requestParameters['TransitId'] = $transitId;
        $this->queryParameters['TransitId'] = $transitId;

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
     * @param string $toImageName
     *
     * @return $this
     */
    public function setToImageName($toImageName)
    {
        $this->requestParameters['ToImageName'] = $toImageName;
        $this->queryParameters['ToImageName'] = $toImageName;

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
     * @param array $toRegionNoLists
     *
     * @return $this
     */
    public function setToRegionNoLists(array $toRegionNoLists)
    {
        $this->requestParameters['ToRegionNoLists'] = $toRegionNoLists;
        foreach ($toRegionNoLists as $i => $iValue) {
            $this->queryParameters['ToRegionNoList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $toImageDesc
     *
     * @return $this
     */
    public function setToImageDesc($toImageDesc)
    {
        $this->requestParameters['ToImageDesc'] = $toImageDesc;
        $this->queryParameters['ToImageDesc'] = $toImageDesc;

        return $this;
    }

    /**
     * @param array $tags
     *
     * @return $this
     */
    public function setTags(array $tags)
    {
        $this->requestParameters['Tags'] = $tags;
        foreach ($tags as $i => $iValue) {
            $this->queryParameters['Tag.' . ($i + 1) . '.Value'] = $tags[$i]['Value'];
            $this->queryParameters['Tag.' . ($i + 1) . '.Key'] = $tags[$i]['Key'];
        }

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
}
