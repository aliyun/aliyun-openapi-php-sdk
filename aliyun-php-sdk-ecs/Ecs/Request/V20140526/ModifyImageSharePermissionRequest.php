<?php

namespace Ecs\Request\V20140526;

/**
 * Request of ModifyImageSharePermission
 *
 * @method string getResourceOwnerId()
 * @method string getImageId()
 * @method array getAddAccounts()
 * @method string getResourceOwnerAccount()
 * @method array getRemoveAccounts()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class ModifyImageSharePermissionRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'ModifyImageSharePermission',
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
     * @param array $addAccounts
     *
     * @return $this
     */
    public function setAddAccounts(array $addAccounts)
    {
        $this->requestParameters['AddAccounts'] = $addAccounts;
        foreach ($addAccounts as $i => $iValue) {
            $this->queryParameters['AddAccount.' . ($i + 1)] = $iValue;
        }

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
     * @param array $removeAccounts
     *
     * @return $this
     */
    public function setRemoveAccounts(array $removeAccounts)
    {
        $this->requestParameters['RemoveAccounts'] = $removeAccounts;
        foreach ($removeAccounts as $i => $iValue) {
            $this->queryParameters['RemoveAccount.' . ($i + 1)] = $iValue;
        }

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
}
