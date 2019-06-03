<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifySmartAccessGateway
 *
 * @method array getSnatEntriess()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCity()
 * @method string getOwnerAccount()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getSecurityLockThreshold()
 * @method string getName()
 * @method string getCidrBlock()
 * @method string getSmartAGId()
 */
class ModifySmartAccessGatewayRequest extends \RpcAcsRequest
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
            'ModifySmartAccessGateway',
            'smartag'
        );
    }

    /**
     * @param array $snatEntries
     *
     * @return $this
     */
    public function setSnatEntriess(array $snatEntries)
    {
        $this->requestParameters['SnatEntriess'] = $snatEntries;
        foreach ($snatEntries as $depth1 => $depth1Value) {
            $this->queryParameters['SnatEntries.' . ($depth1 + 1) . '.CidrBlock'] = $depth1Value['CidrBlock'];
            $this->queryParameters['SnatEntries.' . ($depth1 + 1) . '.SnatIp'] = $depth1Value['SnatIp'];
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
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->requestParameters['City'] = $city;
        $this->queryParameters['City'] = $city;

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
     * @param string $securityLockThreshold
     *
     * @return $this
     */
    public function setSecurityLockThreshold($securityLockThreshold)
    {
        $this->requestParameters['SecurityLockThreshold'] = $securityLockThreshold;
        $this->queryParameters['SecurityLockThreshold'] = $securityLockThreshold;

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
     * @param string $cidrBlock
     *
     * @return $this
     */
    public function setCidrBlock($cidrBlock)
    {
        $this->requestParameters['CidrBlock'] = $cidrBlock;
        $this->queryParameters['CidrBlock'] = $cidrBlock;

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
}
