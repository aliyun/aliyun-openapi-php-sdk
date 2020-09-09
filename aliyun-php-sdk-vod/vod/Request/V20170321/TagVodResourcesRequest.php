<?php

namespace vod\Request\V20170321;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of TagVodResources
 *
 * @method array getTags()
 * @method array getResourceIds()
 * @method string getOwnerId()
 * @method string getResourceType()
 */
class TagVodResourcesRequest extends \RpcAcsRequest
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
            'vod',
            '2017-03-21',
            'TagVodResources',
            'vod'
        );
    }

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function setTags(array $tag)
	{
	    $this->requestParameters['Tags'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			$this->queryParameters['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
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
}
