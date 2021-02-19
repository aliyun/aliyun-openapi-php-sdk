<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InvokeCommand
 *
 * @method string getResourceOwnerId()
 * @method string getCommandId()
 * @method string getFrequency()
 * @method string getWindowsPasswordName()
 * @method string getTimed()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getInstanceIds()
 * @method string getParameters()
 * @method string getUsername()
 */
class InvokeCommandRequest extends \RpcAcsRequest
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
            'InvokeCommand',
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
     * @param string $frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->requestParameters['Frequency'] = $frequency;
        $this->queryParameters['Frequency'] = $frequency;

        return $this;
    }

    /**
     * @param string $windowsPasswordName
     *
     * @return $this
     */
    public function setWindowsPasswordName($windowsPasswordName)
    {
        $this->requestParameters['WindowsPasswordName'] = $windowsPasswordName;
        $this->queryParameters['WindowsPasswordName'] = $windowsPasswordName;

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
     * @param array $instanceId
     *
     * @return $this
     */
	public function setInstanceIds(array $instanceId)
	{
	    $this->requestParameters['InstanceIds'] = $instanceId;
		foreach ($instanceId as $i => $iValue) {
			$this->queryParameters['InstanceId.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $parameters
     *
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->requestParameters['Parameters'] = $parameters;
        $this->queryParameters['Parameters'] = $parameters;

        return $this;
    }

    /**
     * @param string $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->requestParameters['Username'] = $username;
        $this->queryParameters['Username'] = $username;

        return $this;
    }
}
