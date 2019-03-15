<?php

namespace Snsuapi\Request\V20180709;

/**
 * Request of BandOfferOrder
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getBandId()
 * @method string getOfferId()
 * @method string getOwnerId()
 */
class BandOfferOrderRequest extends \RpcAcsRequest
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
            'Snsuapi',
            '2018-07-09',
            'BandOfferOrder',
            'snsuapi'
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
     * @param string $bandId
     *
     * @return $this
     */
    public function setBandId($bandId)
    {
        $this->requestParameters['BandId'] = $bandId;
        $this->queryParameters['BandId'] = $bandId;

        return $this;
    }

    /**
     * @param string $offerId
     *
     * @return $this
     */
    public function setOfferId($offerId)
    {
        $this->requestParameters['OfferId'] = $offerId;
        $this->queryParameters['OfferId'] = $offerId;

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
