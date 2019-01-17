<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DescribeInvocations
 *
 * @method string getResourceOwnerId()
 * @method string getInvokeStatus()
 * @method string getCommandId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getInvokeId()
 * @method string getTimed()
 * @method string getCommandName()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getCommandType()
 * @method string getInstanceId()
 */
class DescribeInvocationsRequest extends \RpcAcsRequest
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
            'DescribeInvocations',
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
     * @param string $invokeStatus
     *
     * @return $this
     */
    public function setInvokeStatus($invokeStatus)
    {
        $this->requestParameters['InvokeStatus'] = $invokeStatus;
        $this->queryParameters['InvokeStatus'] = $invokeStatus;

        return $this;
    }

    /**
     * @param string $commandId
     *
     * @return $this
     */
    public function setCommandId($commandId)
    {
        $this->requestParameters['CommandId'] = $commandId;
        $this->queryParameters['CommandId'] = $commandId;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $invokeId
     *
     * @return $this
     */
    public function setInvokeId($invokeId)
    {
        $this->requestParameters['InvokeId'] = $invokeId;
        $this->queryParameters['InvokeId'] = $invokeId;

        return $this;
    }

    /**
     * @param string $timed
     *
     * @return $this
     */
    public function setTimed($timed)
    {
        $this->requestParameters['Timed'] = $timed;
        $this->queryParameters['Timed'] = $timed;

        return $this;
    }

    /**
     * @param string $commandName
     *
     * @return $this
     */
    public function setCommandName($commandName)
    {
        $this->requestParameters['CommandName'] = $commandName;
        $this->queryParameters['CommandName'] = $commandName;

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
     * @param string $commandType
     *
     * @return $this
     */
    public function setCommandType($commandType)
    {
        $this->requestParameters['CommandType'] = $commandType;
        $this->queryParameters['CommandType'] = $commandType;

        return $this;
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

        return $this;
    }
}
