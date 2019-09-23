<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ApplyAutoSnapshotPolicy
 *
 * @method string getResourceOwnerId()
 * @method string getautoSnapshotPolicyId()
 * @method string getdiskIds()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 */
class ApplyAutoSnapshotPolicyRequest extends \RpcAcsRequest
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
            'Ecs',
            '2014-05-26',
            'ApplyAutoSnapshotPolicy',
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
     * @param string $autoSnapshotPolicyId
     *
     * @return $this
     */
    public function setautoSnapshotPolicyId($autoSnapshotPolicyId)
    {
        $this->requestParameters['autoSnapshotPolicyId'] = $autoSnapshotPolicyId;
        $this->queryParameters['autoSnapshotPolicyId'] = $autoSnapshotPolicyId;

        return $this;
    }

    /**
     * @param string $diskIds
     *
     * @return $this
     */
    public function setdiskIds($diskIds)
    {
        $this->requestParameters['diskIds'] = $diskIds;
        $this->queryParameters['diskIds'] = $diskIds;

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
}
