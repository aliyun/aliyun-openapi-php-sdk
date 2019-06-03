<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSmartAccessGateway
 *
 * @method string getMaxBandWidth()
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getReceiverTown()
 * @method string getReceiverDistrict()
 * @method string getUserCount()
 * @method string getReceiverAddress()
 * @method string getInstanceType()
 * @method string getBuyerMessage()
 * @method string getHardWareSpec()
 * @method string getReceiverEmail()
 * @method string getReceiverState()
 * @method string getReceiverCity()
 * @method string getPeriod()
 * @method string getAutoPay()
 * @method string getReceiverMobile()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getReceiverPhone()
 * @method string getReceiverName()
 * @method string getHaType()
 * @method string getName()
 * @method string getReceiverCountry()
 * @method string getChargeType()
 * @method string getDataPlan()
 * @method string getReceiverZip()
 */
class CreateSmartAccessGatewayRequest extends \RpcAcsRequest
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
            'CreateSmartAccessGateway',
            'smartag'
        );
    }

    /**
     * @param string $maxBandWidth
     *
     * @return $this
     */
    public function setMaxBandWidth($maxBandWidth)
    {
        $this->requestParameters['MaxBandWidth'] = $maxBandWidth;
        $this->queryParameters['MaxBandWidth'] = $maxBandWidth;

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
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $receiverTown
     *
     * @return $this
     */
    public function setReceiverTown($receiverTown)
    {
        $this->requestParameters['ReceiverTown'] = $receiverTown;
        $this->queryParameters['ReceiverTown'] = $receiverTown;

        return $this;
    }

    /**
     * @param string $receiverDistrict
     *
     * @return $this
     */
    public function setReceiverDistrict($receiverDistrict)
    {
        $this->requestParameters['ReceiverDistrict'] = $receiverDistrict;
        $this->queryParameters['ReceiverDistrict'] = $receiverDistrict;

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
     * @param string $receiverAddress
     *
     * @return $this
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->requestParameters['ReceiverAddress'] = $receiverAddress;
        $this->queryParameters['ReceiverAddress'] = $receiverAddress;

        return $this;
    }

    /**
     * @param string $instanceType
     *
     * @return $this
     */
    public function setInstanceType($instanceType)
    {
        $this->requestParameters['InstanceType'] = $instanceType;
        $this->queryParameters['InstanceType'] = $instanceType;

        return $this;
    }

    /**
     * @param string $buyerMessage
     *
     * @return $this
     */
    public function setBuyerMessage($buyerMessage)
    {
        $this->requestParameters['BuyerMessage'] = $buyerMessage;
        $this->queryParameters['BuyerMessage'] = $buyerMessage;

        return $this;
    }

    /**
     * @param string $hardWareSpec
     *
     * @return $this
     */
    public function setHardWareSpec($hardWareSpec)
    {
        $this->requestParameters['HardWareSpec'] = $hardWareSpec;
        $this->queryParameters['HardWareSpec'] = $hardWareSpec;

        return $this;
    }

    /**
     * @param string $receiverEmail
     *
     * @return $this
     */
    public function setReceiverEmail($receiverEmail)
    {
        $this->requestParameters['ReceiverEmail'] = $receiverEmail;
        $this->queryParameters['ReceiverEmail'] = $receiverEmail;

        return $this;
    }

    /**
     * @param string $receiverState
     *
     * @return $this
     */
    public function setReceiverState($receiverState)
    {
        $this->requestParameters['ReceiverState'] = $receiverState;
        $this->queryParameters['ReceiverState'] = $receiverState;

        return $this;
    }

    /**
     * @param string $receiverCity
     *
     * @return $this
     */
    public function setReceiverCity($receiverCity)
    {
        $this->requestParameters['ReceiverCity'] = $receiverCity;
        $this->queryParameters['ReceiverCity'] = $receiverCity;

        return $this;
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

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
     * @param string $receiverMobile
     *
     * @return $this
     */
    public function setReceiverMobile($receiverMobile)
    {
        $this->requestParameters['ReceiverMobile'] = $receiverMobile;
        $this->queryParameters['ReceiverMobile'] = $receiverMobile;

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
     * @param string $receiverPhone
     *
     * @return $this
     */
    public function setReceiverPhone($receiverPhone)
    {
        $this->requestParameters['ReceiverPhone'] = $receiverPhone;
        $this->queryParameters['ReceiverPhone'] = $receiverPhone;

        return $this;
    }

    /**
     * @param string $receiverName
     *
     * @return $this
     */
    public function setReceiverName($receiverName)
    {
        $this->requestParameters['ReceiverName'] = $receiverName;
        $this->queryParameters['ReceiverName'] = $receiverName;

        return $this;
    }

    /**
     * @param string $haType
     *
     * @return $this
     */
    public function setHaType($haType)
    {
        $this->requestParameters['HaType'] = $haType;
        $this->queryParameters['HaType'] = $haType;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $receiverCountry
     *
     * @return $this
     */
    public function setReceiverCountry($receiverCountry)
    {
        $this->requestParameters['ReceiverCountry'] = $receiverCountry;
        $this->queryParameters['ReceiverCountry'] = $receiverCountry;

        return $this;
    }

    /**
     * @param string $chargeType
     *
     * @return $this
     */
    public function setChargeType($chargeType)
    {
        $this->requestParameters['ChargeType'] = $chargeType;
        $this->queryParameters['ChargeType'] = $chargeType;

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

    /**
     * @param string $receiverZip
     *
     * @return $this
     */
    public function setReceiverZip($receiverZip)
    {
        $this->requestParameters['ReceiverZip'] = $receiverZip;
        $this->queryParameters['ReceiverZip'] = $receiverZip;

        return $this;
    }
}
