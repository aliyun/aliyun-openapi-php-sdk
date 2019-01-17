<?php

namespace Vpc\Request\V20160428;

/**
 * Request of DeleteForwardEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getForwardEntryId()
 * @method string getOwnerAccount()
 * @method string getForwardTableId()
 * @method string getOwnerId()
 */
class DeleteForwardEntryRequest extends \RpcAcsRequest
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
            'Vpc',
            '2016-04-28',
            'DeleteForwardEntry',
            'vpc'
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
     * @param string $forwardEntryId
     *
     * @return $this
     */
    public function setForwardEntryId($forwardEntryId)
    {
        $this->requestParameters['ForwardEntryId'] = $forwardEntryId;
        $this->queryParameters['ForwardEntryId'] = $forwardEntryId;

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
     * @param string $forwardTableId
     *
     * @return $this
     */
    public function setForwardTableId($forwardTableId)
    {
        $this->requestParameters['ForwardTableId'] = $forwardTableId;
        $this->queryParameters['ForwardTableId'] = $forwardTableId;

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
