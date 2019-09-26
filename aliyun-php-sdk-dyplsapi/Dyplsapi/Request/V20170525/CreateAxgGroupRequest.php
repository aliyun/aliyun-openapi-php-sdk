<?php

namespace Dyplsapi\Request\V20170525;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAxgGroup
 *
 * @method string getResourceOwnerId()
 * @method string getNumbers()
 * @method string getRemark()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getPoolKey()
 * @method string getName()
 */
class CreateAxgGroupRequest extends \RpcAcsRequest
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
            'CreateAxgGroup',
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
     * @param string $numbers
     *
     * @return $this
     */
    public function setNumbers($numbers)
    {
        $this->requestParameters['Numbers'] = $numbers;
        $this->queryParameters['Numbers'] = $numbers;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->requestParameters['Remark'] = $remark;
        $this->queryParameters['Remark'] = $remark;

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
}
