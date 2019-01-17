<?php

namespace Vpc\Request\V20160428;

/**
 * Request of ModifySnatEntry
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSnatTableId()
 * @method string getSnatEntryId()
 * @method string getOwnerId()
 * @method string getSnatIp()
 */
class ModifySnatEntryRequest extends \RpcAcsRequest
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
            'ModifySnatEntry',
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
     * @param string $snatTableId
     *
     * @return $this
     */
    public function setSnatTableId($snatTableId)
    {
        $this->requestParameters['SnatTableId'] = $snatTableId;
        $this->queryParameters['SnatTableId'] = $snatTableId;

        return $this;
    }

    /**
     * @param string $snatEntryId
     *
     * @return $this
     */
    public function setSnatEntryId($snatEntryId)
    {
        $this->requestParameters['SnatEntryId'] = $snatEntryId;
        $this->queryParameters['SnatEntryId'] = $snatEntryId;

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
     * @param string $snatIp
     *
     * @return $this
     */
    public function setSnatIp($snatIp)
    {
        $this->requestParameters['SnatIp'] = $snatIp;
        $this->queryParameters['SnatIp'] = $snatIp;

        return $this;
    }
}
