<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RunCommand
 *
 * @method string getResourceOwnerId()
 * @method string getWorkingDir()
 * @method string getDescription()
 * @method string getType()
 * @method string getCommandContent()
 * @method string getTimeout()
 * @method string getFrequency()
 * @method string getContentEncoding()
 * @method string getKeepCommand()
 * @method string getTimed()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getInstanceIds()
 * @method string getName()
 * @method string getParameters()
 * @method string getEnableParameter()
 */
class RunCommandRequest extends \RpcAcsRequest
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
            'RunCommand',
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
     * @param string $workingDir
     *
     * @return $this
     */
    public function setWorkingDir($workingDir)
    {
        $this->requestParameters['WorkingDir'] = $workingDir;
        $this->queryParameters['WorkingDir'] = $workingDir;

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
     * @param string $commandContent
     *
     * @return $this
     */
    public function setCommandContent($commandContent)
    {
        $this->requestParameters['CommandContent'] = $commandContent;
        $this->queryParameters['CommandContent'] = $commandContent;

        return $this;
    }

    /**
     * @param string $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->requestParameters['Timeout'] = $timeout;
        $this->queryParameters['Timeout'] = $timeout;

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
     * @param string $contentEncoding
     *
     * @return $this
     */
    public function setContentEncoding($contentEncoding)
    {
        $this->requestParameters['ContentEncoding'] = $contentEncoding;
        $this->queryParameters['ContentEncoding'] = $contentEncoding;

        return $this;
    }

    /**
     * @param string $keepCommand
     *
     * @return $this
     */
    public function setKeepCommand($keepCommand)
    {
        $this->requestParameters['KeepCommand'] = $keepCommand;
        $this->queryParameters['KeepCommand'] = $keepCommand;

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
     * @param string $enableParameter
     *
     * @return $this
     */
    public function setEnableParameter($enableParameter)
    {
        $this->requestParameters['EnableParameter'] = $enableParameter;
        $this->queryParameters['EnableParameter'] = $enableParameter;

        return $this;
    }
}
