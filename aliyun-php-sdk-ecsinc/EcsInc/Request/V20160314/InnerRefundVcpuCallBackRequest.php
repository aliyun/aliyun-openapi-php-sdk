<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerRefundVcpuCallBack
 *
 * @method string getResourceOwnerId()
 * @method string getVcpuTotal()
 * @method string getType()
 * @method string getAliUid()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getIsSuccess()
 * @method array getInstanceIdss()
 */
class InnerRefundVcpuCallBackRequest extends \RpcAcsRequest
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
            'EcsInc',
            '2016-03-14',
            'InnerRefundVcpuCallBack',
            'ecs'
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
     * @param string $vcpuTotal
     *
     * @return $this
     */
    public function setVcpuTotal($vcpuTotal)
    {
        $this->requestParameters['VcpuTotal'] = $vcpuTotal;
        $this->queryParameters['VcpuTotal'] = $vcpuTotal;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function setAliUid($aliUid)
    {
        $this->requestParameters['AliUid'] = $aliUid;
        $this->queryParameters['AliUid'] = $aliUid;

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
     * @param string $isSuccess
     *
     * @return $this
     */
    public function setIsSuccess($isSuccess)
    {
        $this->requestParameters['IsSuccess'] = $isSuccess;
        $this->queryParameters['IsSuccess'] = $isSuccess;

        return $this;
    }

    /**
     * @param array $instanceIdss
     *
     * @return $this
     */
    public function setInstanceIdss(array $instanceIdss)
    {
        $this->requestParameters['InstanceIdss'] = $instanceIdss;
        foreach ($instanceIdss as $i => $iValue) {
            $this->queryParameters['InstanceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
