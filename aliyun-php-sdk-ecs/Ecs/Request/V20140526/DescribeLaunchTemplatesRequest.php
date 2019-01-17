<?php

namespace Ecs\Request\V20140526;

/**
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
     * @param array $launchTemplateNames
     *
     * @return $this
     */
    public function setLaunchTemplateNames(array $launchTemplateNames)
    {
        $this->requestParameters['LaunchTemplateNames'] = $launchTemplateNames;
        foreach ($launchTemplateNames as $i => $iValue) {
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
     * @param array $templateTags
     *
     * @return $this
     */
    public function setTemplateTags(array $templateTags)
    {
        $this->requestParameters['TemplateTags'] = $templateTags;
        foreach ($templateTags as $i => $iValue) {
            $this->queryParameters['TemplateTag.' . ($i + 1) . '.Key'] = $templateTags[$i]['Key'];
            $this->queryParameters['TemplateTag.' . ($i + 1) . '.Value'] = $templateTags[$i]['Value'];
        }

        return $this;
    }

    /**
     * @param array $launchTemplateIds
     *
     * @return $this
     */
    public function setLaunchTemplateIds(array $launchTemplateIds)
    {
        $this->requestParameters['LaunchTemplateIds'] = $launchTemplateIds;
        foreach ($launchTemplateIds as $i => $iValue) {
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
