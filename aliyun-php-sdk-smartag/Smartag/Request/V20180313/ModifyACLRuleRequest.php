<?php

namespace Smartag\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyACLRule
 *
 * @method string getAclId()
 * @method string getResourceOwnerId()
 * @method string getSourcePortRange()
 * @method string getResourceOwnerAccount()
 * @method string getIpProtocol()
 * @method string getOwnerAccount()
 * @method string getSourceCidr()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getPriority()
 * @method string getAcrId()
 * @method string getDestCidr()
 * @method string getDestPortRange()
 * @method string getDirection()
 * @method string getPolicy()
 */
class ModifyACLRuleRequest extends \RpcAcsRequest
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
            'Smartag',
            '2018-03-13',
            'ModifyACLRule',
            'smartag'
        );
    }

    /**
     * @param string $aclId
     *
     * @return $this
     */
    public function setAclId($aclId)
    {
        $this->requestParameters['AclId'] = $aclId;
        $this->queryParameters['AclId'] = $aclId;

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
     * @param string $sourcePortRange
     *
     * @return $this
     */
    public function setSourcePortRange($sourcePortRange)
    {
        $this->requestParameters['SourcePortRange'] = $sourcePortRange;
        $this->queryParameters['SourcePortRange'] = $sourcePortRange;

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
     * @param string $ipProtocol
     *
     * @return $this
     */
    public function setIpProtocol($ipProtocol)
    {
        $this->requestParameters['IpProtocol'] = $ipProtocol;
        $this->queryParameters['IpProtocol'] = $ipProtocol;

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
     * @param string $sourceCidr
     *
     * @return $this
     */
    public function setSourceCidr($sourceCidr)
    {
        $this->requestParameters['SourceCidr'] = $sourceCidr;
        $this->queryParameters['SourceCidr'] = $sourceCidr;

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
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->requestParameters['Priority'] = $priority;
        $this->queryParameters['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $acrId
     *
     * @return $this
     */
    public function setAcrId($acrId)
    {
        $this->requestParameters['AcrId'] = $acrId;
        $this->queryParameters['AcrId'] = $acrId;

        return $this;
    }

    /**
     * @param string $destCidr
     *
     * @return $this
     */
    public function setDestCidr($destCidr)
    {
        $this->requestParameters['DestCidr'] = $destCidr;
        $this->queryParameters['DestCidr'] = $destCidr;

        return $this;
    }

    /**
     * @param string $destPortRange
     *
     * @return $this
     */
    public function setDestPortRange($destPortRange)
    {
        $this->requestParameters['DestPortRange'] = $destPortRange;
        $this->queryParameters['DestPortRange'] = $destPortRange;

        return $this;
    }

    /**
     * @param string $direction
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->requestParameters['Direction'] = $direction;
        $this->queryParameters['Direction'] = $direction;

        return $this;
    }

    /**
     * @param string $policy
     *
     * @return $this
     */
    public function setPolicy($policy)
    {
        $this->requestParameters['Policy'] = $policy;
        $this->queryParameters['Policy'] = $policy;

        return $this;
    }
}
