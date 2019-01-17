<?php

namespace Vpc\Request\V20160428;

/**
 * Request of CreateSnatEntry
 *
 * @method string getResourceOwnerId()
 * @method string getSourceVSwitchId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getSourceCIDR()
 * @method string getSnatTableId()
 * @method string getOwnerId()
 * @method string getSnatIp()
 */
class CreateSnatEntryRequest extends \RpcAcsRequest
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
            'CreateSnatEntry',
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
     * @param string $sourceVSwitchId
     *
     * @return $this
     */
    public function setSourceVSwitchId($sourceVSwitchId)
    {
        $this->requestParameters['SourceVSwitchId'] = $sourceVSwitchId;
        $this->queryParameters['SourceVSwitchId'] = $sourceVSwitchId;

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
     * @param string $sourceCIDR
     *
     * @return $this
     */
    public function setSourceCIDR($sourceCIDR)
    {
        $this->requestParameters['SourceCIDR'] = $sourceCIDR;
        $this->queryParameters['SourceCIDR'] = $sourceCIDR;

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
