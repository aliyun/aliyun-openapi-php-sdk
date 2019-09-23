<?php

namespace Ecs\Request\V20140526;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDeploymentSet
 *
 * @method string getResourceOwnerId()
 * @method string getClientToken()
 * @method string getDescription()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getDeploymentSetName()
 * @method string getOwnerId()
 * @method string getOnUnableToRedeployFailedInstance()
 * @method string getGranularity()
 * @method string getDomain()
 * @method string getStrategy()
 */
class CreateDeploymentSetRequest extends \RpcAcsRequest
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
            'CreateDeploymentSet',
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
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        $this->requestParameters['ClientToken'] = $clientToken;
        $this->queryParameters['ClientToken'] = $clientToken;

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
     * @param string $deploymentSetName
     *
     * @return $this
     */
    public function setDeploymentSetName($deploymentSetName)
    {
        $this->requestParameters['DeploymentSetName'] = $deploymentSetName;
        $this->queryParameters['DeploymentSetName'] = $deploymentSetName;

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
     * @param string $onUnableToRedeployFailedInstance
     *
     * @return $this
     */
    public function setOnUnableToRedeployFailedInstance($onUnableToRedeployFailedInstance)
    {
        $this->requestParameters['OnUnableToRedeployFailedInstance'] = $onUnableToRedeployFailedInstance;
        $this->queryParameters['OnUnableToRedeployFailedInstance'] = $onUnableToRedeployFailedInstance;

        return $this;
    }

    /**
     * @param string $granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        $this->requestParameters['Granularity'] = $granularity;
        $this->queryParameters['Granularity'] = $granularity;

        return $this;
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->queryParameters['Domain'] = $domain;

        return $this;
    }

    /**
     * @param string $strategy
     *
     * @return $this
     */
    public function setStrategy($strategy)
    {
        $this->requestParameters['Strategy'] = $strategy;
        $this->queryParameters['Strategy'] = $strategy;

        return $this;
    }
}
