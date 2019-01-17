<?php

namespace Ecs\Request\V20140526;

/**
 * Request of RemoveBandwidthPackageIps
 *
 * @method array getRemovedIpAddressess()
 * @method string getResourceOwnerId()
 * @method string getBandwidthPackageId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class RemoveBandwidthPackageIpsRequest extends \RpcAcsRequest
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
            'RemoveBandwidthPackageIps',
            'ecs'
        );
    }

    /**
     * @param array $removedIpAddressess
     *
     * @return $this
     */
    public function setRemovedIpAddressess(array $removedIpAddressess)
    {
        $this->requestParameters['RemovedIpAddressess'] = $removedIpAddressess;
        foreach ($removedIpAddressess as $i => $iValue) {
            $this->queryParameters['RemovedIpAddresses.' . ($i + 1)] = $iValue;
        }

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
     * @param string $bandwidthPackageId
     *
     * @return $this
     */
    public function setBandwidthPackageId($bandwidthPackageId)
    {
        $this->requestParameters['BandwidthPackageId'] = $bandwidthPackageId;
        $this->queryParameters['BandwidthPackageId'] = $bandwidthPackageId;

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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
