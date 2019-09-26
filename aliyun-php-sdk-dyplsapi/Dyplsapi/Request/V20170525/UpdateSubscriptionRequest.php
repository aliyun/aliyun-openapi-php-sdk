<?php

namespace Dyplsapi\Request\V20170525;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateSubscription
 *
 * @method string getResourceOwnerId()
 * @method string getCallDisplayType()
 * @method string getProductType()
 * @method string getSubsId()
 * @method string getPhoneNoX()
 * @method string getRingConfig()
 * @method string getPhoneNoB()
 * @method string getPhoneNoA()
 * @method string getResourceOwnerAccount()
 * @method string getGroupId()
 * @method string getOwnerId()
 * @method string getPoolKey()
 * @method string getExpiration()
 * @method string getOutId()
 * @method string getIsRecordingEnabled()
 * @method string getOperateType()
 * @method string getCallRestrict()
 */
class UpdateSubscriptionRequest extends \RpcAcsRequest
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
            'Dyplsapi',
            '2017-05-25',
            'UpdateSubscription',
            'dypls'
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
     * @param string $callDisplayType
     *
     * @return $this
     */
    public function setCallDisplayType($callDisplayType)
    {
        $this->requestParameters['CallDisplayType'] = $callDisplayType;
        $this->queryParameters['CallDisplayType'] = $callDisplayType;

        return $this;
    }

    /**
     * @param string $productType
     *
     * @return $this
     */
    public function setProductType($productType)
    {
        $this->requestParameters['ProductType'] = $productType;
        $this->queryParameters['ProductType'] = $productType;

        return $this;
    }

    /**
     * @param string $subsId
     *
     * @return $this
     */
    public function setSubsId($subsId)
    {
        $this->requestParameters['SubsId'] = $subsId;
        $this->queryParameters['SubsId'] = $subsId;

        return $this;
    }

    /**
     * @param string $phoneNoX
     *
     * @return $this
     */
    public function setPhoneNoX($phoneNoX)
    {
        $this->requestParameters['PhoneNoX'] = $phoneNoX;
        $this->queryParameters['PhoneNoX'] = $phoneNoX;

        return $this;
    }

    /**
     * @param string $ringConfig
     *
     * @return $this
     */
    public function setRingConfig($ringConfig)
    {
        $this->requestParameters['RingConfig'] = $ringConfig;
        $this->queryParameters['RingConfig'] = $ringConfig;

        return $this;
    }

    /**
     * @param string $phoneNoB
     *
     * @return $this
     */
    public function setPhoneNoB($phoneNoB)
    {
        $this->requestParameters['PhoneNoB'] = $phoneNoB;
        $this->queryParameters['PhoneNoB'] = $phoneNoB;

        return $this;
    }

    /**
     * @param string $phoneNoA
     *
     * @return $this
     */
    public function setPhoneNoA($phoneNoA)
    {
        $this->requestParameters['PhoneNoA'] = $phoneNoA;
        $this->queryParameters['PhoneNoA'] = $phoneNoA;

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
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

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
     * @param string $poolKey
     *
     * @return $this
     */
    public function setPoolKey($poolKey)
    {
        $this->requestParameters['PoolKey'] = $poolKey;
        $this->queryParameters['PoolKey'] = $poolKey;

        return $this;
    }

    /**
     * @param string $expiration
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->requestParameters['Expiration'] = $expiration;
        $this->queryParameters['Expiration'] = $expiration;

        return $this;
    }

    /**
     * @param string $outId
     *
     * @return $this
     */
    public function setOutId($outId)
    {
        $this->requestParameters['OutId'] = $outId;
        $this->queryParameters['OutId'] = $outId;

        return $this;
    }

    /**
     * @param string $isRecordingEnabled
     *
     * @return $this
     */
    public function setIsRecordingEnabled($isRecordingEnabled)
    {
        $this->requestParameters['IsRecordingEnabled'] = $isRecordingEnabled;
        $this->queryParameters['IsRecordingEnabled'] = $isRecordingEnabled;

        return $this;
    }

    /**
     * @param string $operateType
     *
     * @return $this
     */
    public function setOperateType($operateType)
    {
        $this->requestParameters['OperateType'] = $operateType;
        $this->queryParameters['OperateType'] = $operateType;

        return $this;
    }

    /**
     * @param string $callRestrict
     *
     * @return $this
     */
    public function setCallRestrict($callRestrict)
    {
        $this->requestParameters['CallRestrict'] = $callRestrict;
        $this->queryParameters['CallRestrict'] = $callRestrict;

        return $this;
    }
}
