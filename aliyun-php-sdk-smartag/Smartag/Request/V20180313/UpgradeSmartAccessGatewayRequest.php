<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpgradeSmartAccessGateway
 *
 * @method string getResourceOwnerId()
 * @method string getAutoPay()
 * @method string getBandWidthSpec()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getUserCount()
 * @method string getSmartAGId()
 * @method string getOwnerId()
 * @method string getDataPlan()
 */
class UpgradeSmartAccessGatewayRequest extends \RpcAcsRequest
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
            'Smartag',
            '2018-03-13',
            'UpgradeSmartAccessGateway',
            'smartag'
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
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        $this->requestParameters['AutoPay'] = $autoPay;
        $this->queryParameters['AutoPay'] = $autoPay;

        return $this;
    }

    /**
     * @param string $bandWidthSpec
     *
     * @return $this
     */
    public function setBandWidthSpec($bandWidthSpec)
    {
        $this->requestParameters['BandWidthSpec'] = $bandWidthSpec;
        $this->queryParameters['BandWidthSpec'] = $bandWidthSpec;

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
     * @param string $userCount
     *
     * @return $this
     */
    public function setUserCount($userCount)
    {
        $this->requestParameters['UserCount'] = $userCount;
        $this->queryParameters['UserCount'] = $userCount;

        return $this;
    }

    /**
     * @param string $smartAGId
     *
     * @return $this
     */
    public function setSmartAGId($smartAGId)
    {
        $this->requestParameters['SmartAGId'] = $smartAGId;
        $this->queryParameters['SmartAGId'] = $smartAGId;

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
     * @param string $dataPlan
     *
     * @return $this
     */
    public function setDataPlan($dataPlan)
    {
        $this->requestParameters['DataPlan'] = $dataPlan;
        $this->queryParameters['DataPlan'] = $dataPlan;

        return $this;
    }
}
