<?php

namespace Ecs\Request\V20140526;

/**
 * Request of DescribeLaunchTemplateVersions
 *
 * @method string getLaunchTemplateName()
 * @method string getMaxVersion()
 * @method string getResourceOwnerId()
 * @method string getDefaultVersion()
 * @method string getMinVersion()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getLaunchTemplateId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method array getLaunchTemplateVersions()
 * @method string getDetailFlag()
 */
class DescribeLaunchTemplateVersionsRequest extends \RpcAcsRequest
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
            'DescribeLaunchTemplateVersions',
            'ecs'
        );
    }

    /**
     * @param string $launchTemplateName
     *
     * @return $this
     */
    public function setLaunchTemplateName($launchTemplateName)
    {
        $this->requestParameters['LaunchTemplateName'] = $launchTemplateName;
        $this->queryParameters['LaunchTemplateName'] = $launchTemplateName;

        return $this;
    }

    /**
     * @param string $maxVersion
     *
     * @return $this
     */
    public function setMaxVersion($maxVersion)
    {
        $this->requestParameters['MaxVersion'] = $maxVersion;
        $this->queryParameters['MaxVersion'] = $maxVersion;

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
     * @param string $defaultVersion
     *
     * @return $this
     */
    public function setDefaultVersion($defaultVersion)
    {
        $this->requestParameters['DefaultVersion'] = $defaultVersion;
        $this->queryParameters['DefaultVersion'] = $defaultVersion;

        return $this;
    }

    /**
     * @param string $minVersion
     *
     * @return $this
     */
    public function setMinVersion($minVersion)
    {
        $this->requestParameters['MinVersion'] = $minVersion;
        $this->queryParameters['MinVersion'] = $minVersion;

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
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function setLaunchTemplateId($launchTemplateId)
    {
        $this->requestParameters['LaunchTemplateId'] = $launchTemplateId;
        $this->queryParameters['LaunchTemplateId'] = $launchTemplateId;

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
     * @param array $launchTemplateVersions
     *
     * @return $this
     */
    public function setLaunchTemplateVersions(array $launchTemplateVersions)
    {
        $this->requestParameters['LaunchTemplateVersions'] = $launchTemplateVersions;
        foreach ($launchTemplateVersions as $i => $iValue) {
            $this->queryParameters['LaunchTemplateVersion.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $detailFlag
     *
     * @return $this
     */
    public function setDetailFlag($detailFlag)
    {
        $this->requestParameters['DetailFlag'] = $detailFlag;
        $this->queryParameters['DetailFlag'] = $detailFlag;

        return $this;
    }
}
