<?php

namespace Cdn\Request\V20180510;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UntagResources
 *
 * @method array getResourceIds()
 * @method string getOwnerId()
 * @method string getResourceType()
 * @method array getTagKeys()
 */
class UntagResourcesRequest extends \RpcAcsRequest
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
            'Cdn',
            '2018-05-10',
            'UntagResources'
        );
    }

    /**
     * @param array $resourceId
     *
     * @return $this
     */
	public function setResourceIds(array $resourceId)
	{
	    $this->requestParameters['ResourceIds'] = $resourceId;
		foreach ($resourceId as $i => $iValue) {
			$this->queryParameters['ResourceId.' . ($i + 1)] = $iValue;
		}

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
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        $this->requestParameters['ResourceType'] = $resourceType;
        $this->queryParameters['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @param array $tagKey
     *
     * @return $this
     */
	public function setTagKeys(array $tagKey)
	{
	    $this->requestParameters['TagKeys'] = $tagKey;
		foreach ($tagKey as $i => $iValue) {
			$this->queryParameters['TagKey.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
