<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeLaunchTemplates
 *
 * @method array getLaunchTemplateNames()
 * @method string getResourceOwnerId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method array getTemplateTags()
 * @method array getLaunchTemplateIds()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getTemplateResourceGroupId()
 * @method string getOwnerId()
 */
class DescribeLaunchTemplatesRequest extends \RpcAcsRequest
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
            'DescribeLaunchTemplates',
            'ecs'
        );
    }

    /**
     * @param array $launchTemplateName
     *
     * @return $this
     */
	public function setLaunchTemplateNames(array $launchTemplateName)
	{
	    $this->requestParameters['LaunchTemplateNames'] = $launchTemplateName;
		foreach ($launchTemplateName as $i => $iValue) {
			$this->queryParameters['LaunchTemplateName.' . ($i + 1)] = $iValue;
		}

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
     * @param array $templateTag
     *
     * @return $this
     */
	public function setTemplateTags(array $templateTag)
	{
	    $this->requestParameters['TemplateTags'] = $templateTag;
		foreach ($templateTag as $depth1 => $depth1Value) {
			$this->queryParameters['TemplateTag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			$this->queryParameters['TemplateTag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
		}

		return $this;
    }

    /**
     * @param array $launchTemplateId
     *
     * @return $this
     */
	public function setLaunchTemplateIds(array $launchTemplateId)
	{
	    $this->requestParameters['LaunchTemplateIds'] = $launchTemplateId;
		foreach ($launchTemplateId as $i => $iValue) {
			$this->queryParameters['LaunchTemplateId.' . ($i + 1)] = $iValue;
		}

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
     * @param string $templateResourceGroupId
     *
     * @return $this
     */
    public function setTemplateResourceGroupId($templateResourceGroupId)
    {
        $this->requestParameters['TemplateResourceGroupId'] = $templateResourceGroupId;
        $this->queryParameters['TemplateResourceGroupId'] = $templateResourceGroupId;

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
