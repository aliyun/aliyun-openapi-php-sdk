<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GrantInstanceToCbn
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getCenUid()
 * @method string getCenInstanceId()
 * @method string getOwnerAccount()
 * @method string getCcnInstanceId()
 * @method string getOwnerId()
 */
class GrantInstanceToCbnRequest extends \RpcAcsRequest
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
            'GrantInstanceToCbn',
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
     * @param string $cenUid
     *
     * @return $this
     */
    public function setCenUid($cenUid)
    {
        $this->requestParameters['CenUid'] = $cenUid;
        $this->queryParameters['CenUid'] = $cenUid;

        return $this;
    }

    /**
     * @param string $cenInstanceId
     *
     * @return $this
     */
    public function setCenInstanceId($cenInstanceId)
    {
        $this->requestParameters['CenInstanceId'] = $cenInstanceId;
        $this->queryParameters['CenInstanceId'] = $cenInstanceId;

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
     * @param string $ccnInstanceId
     *
     * @return $this
     */
    public function setCcnInstanceId($ccnInstanceId)
    {
        $this->requestParameters['CcnInstanceId'] = $ccnInstanceId;
        $this->queryParameters['CcnInstanceId'] = $ccnInstanceId;

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
