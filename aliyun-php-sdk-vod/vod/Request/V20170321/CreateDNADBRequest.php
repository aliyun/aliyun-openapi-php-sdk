<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDNADB
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getDBRegion()
 * @method string getDBDescription()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getDBName()
 * @method string getDBType()
 */
class CreateDNADBRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'CreateDNADB',
            'vod'
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
     * @param string $dBRegion
     *
     * @return $this
     */
    public function setDBRegion($dBRegion)
    {
        $this->requestParameters['DBRegion'] = $dBRegion;
        $this->queryParameters['DBRegion'] = $dBRegion;

        return $this;
    }

    /**
     * @param string $dBDescription
     *
     * @return $this
     */
    public function setDBDescription($dBDescription)
    {
        $this->requestParameters['DBDescription'] = $dBDescription;
        $this->queryParameters['DBDescription'] = $dBDescription;

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
     * @param string $dBName
     *
     * @return $this
     */
    public function setDBName($dBName)
    {
        $this->requestParameters['DBName'] = $dBName;
        $this->queryParameters['DBName'] = $dBName;

        return $this;
    }

    /**
     * @param string $dBType
     *
     * @return $this
     */
    public function setDBType($dBType)
    {
        $this->requestParameters['DBType'] = $dBType;
        $this->queryParameters['DBType'] = $dBType;

        return $this;
    }
}
