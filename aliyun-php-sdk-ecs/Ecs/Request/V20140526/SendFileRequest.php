<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SendFile
 *
 * @method string getResourceOwnerId()
 * @method string getDescription()
 * @method string getTimeout()
 * @method string getContent()
 * @method string getFileOwner()
 * @method string getOverwrite()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getFileMode()
 * @method string getOwnerId()
 * @method string getContentType()
 * @method array getInstanceIds()
 * @method string getName()
 * @method string getFileGroup()
 * @method string getTargetDir()
 */
class SendFileRequest extends \RpcAcsRequest
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
            'SendFile',
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
     * @param string $content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->requestParameters['Content'] = $content;
        $this->queryParameters['Content'] = $content;

        return $this;
    }

    /**
     * @param string $fileOwner
     *
     * @return $this
     */
    public function setFileOwner($fileOwner)
    {
        $this->requestParameters['FileOwner'] = $fileOwner;
        $this->queryParameters['FileOwner'] = $fileOwner;

        return $this;
    }

    /**
     * @param string $overwrite
     *
     * @return $this
     */
    public function setOverwrite($overwrite)
    {
        $this->requestParameters['Overwrite'] = $overwrite;
        $this->queryParameters['Overwrite'] = $overwrite;

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
     * @param string $fileMode
     *
     * @return $this
     */
    public function setFileMode($fileMode)
    {
        $this->requestParameters['FileMode'] = $fileMode;
        $this->queryParameters['FileMode'] = $fileMode;

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
     * @param string $contentType
     *
     * @return $this
     */
    public function setContentType($contentType)
    {
        $this->requestParameters['ContentType'] = $contentType;
        $this->queryParameters['ContentType'] = $contentType;

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
     * @param string $fileGroup
     *
     * @return $this
     */
    public function setFileGroup($fileGroup)
    {
        $this->requestParameters['FileGroup'] = $fileGroup;
        $this->queryParameters['FileGroup'] = $fileGroup;

        return $this;
    }

    /**
     * @param string $targetDir
     *
     * @return $this
     */
    public function setTargetDir($targetDir)
    {
        $this->requestParameters['TargetDir'] = $targetDir;
        $this->queryParameters['TargetDir'] = $targetDir;

        return $this;
    }
}
