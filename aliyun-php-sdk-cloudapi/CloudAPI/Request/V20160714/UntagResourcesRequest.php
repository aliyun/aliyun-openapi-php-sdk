<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UntagResources
 *
 * @method string getAll()
 * @method array getResourceIds()
 * @method string getResourceType()
 * @method string getSecurityToken()
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
            'CloudAPI',
            '2016-07-14',
            'UntagResources',
            'apigateway'
        );
    }

    /**
     * @param string $all
     *
     * @return $this
     */
    public function setAll($all)
    {
        $this->requestParameters['All'] = $all;
        $this->queryParameters['All'] = $all;

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
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

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
