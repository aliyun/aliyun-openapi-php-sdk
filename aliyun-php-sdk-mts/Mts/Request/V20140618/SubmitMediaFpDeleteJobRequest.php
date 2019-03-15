<?php

namespace Mts\Request\V20140618;

/**
 * Request of SubmitMediaFpDeleteJob
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getFpDBId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getPipelineId()
 * @method string getPrimaryKey()
 */
class SubmitMediaFpDeleteJobRequest extends \RpcAcsRequest
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
            'Mts',
            '2014-06-18',
            'SubmitMediaFpDeleteJob',
            'mts'
        );
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

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
     * @param string $fpDBId
     *
     * @return $this
     */
    public function setFpDBId($fpDBId)
    {
        $this->requestParameters['FpDBId'] = $fpDBId;
        $this->queryParameters['FpDBId'] = $fpDBId;

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
     * @param string $pipelineId
     *
     * @return $this
     */
    public function setPipelineId($pipelineId)
    {
        $this->requestParameters['PipelineId'] = $pipelineId;
        $this->queryParameters['PipelineId'] = $pipelineId;

        return $this;
    }

    /**
     * @param string $primaryKey
     *
     * @return $this
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->requestParameters['PrimaryKey'] = $primaryKey;
        $this->queryParameters['PrimaryKey'] = $primaryKey;

        return $this;
    }
}
