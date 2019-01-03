<?php

namespace EcsInc\Request\V20160314;

/**
 * Request of InnerCheckEniEipOperate
 *
 * @method string getResourceOwnerId()
 * @method string getAliUid()
 * @method string getEipAddressKeeped()
 * @method string getEniNo()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getEipAddressCount()
 * @method string getOperateType()
 */
class InnerCheckEniEipOperateRequest extends \RpcAcsRequest
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
            'InnerCheckEniEipOperate',
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
     * @param string $eipAddressKeeped
     *
     * @return $this
     */
    public function setEipAddressKeeped($eipAddressKeeped)
    {
        $this->requestParameters['EipAddressKeeped'] = $eipAddressKeeped;
        $this->queryParameters['EipAddressKeeped'] = $eipAddressKeeped;

        return $this;
    }

    /**
     * @param string $eniNo
     *
     * @return $this
     */
    public function setEniNo($eniNo)
    {
        $this->requestParameters['EniNo'] = $eniNo;
        $this->queryParameters['EniNo'] = $eniNo;

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
     * @param string $eipAddressCount
     *
     * @return $this
     */
    public function setEipAddressCount($eipAddressCount)
    {
        $this->requestParameters['EipAddressCount'] = $eipAddressCount;
        $this->queryParameters['EipAddressCount'] = $eipAddressCount;

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
}
