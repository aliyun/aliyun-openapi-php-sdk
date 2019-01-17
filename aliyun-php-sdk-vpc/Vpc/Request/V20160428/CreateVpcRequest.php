<?php

namespace Vpc\Request\V20160428;

/**
 * Request of CreateVpc
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getClientToken()
 * @method string getOwnerAccount()
 * @method string getEnableIpv6()
 * @method string getDescription()
 * @method string getOwnerId()
 * @method string getIpv6CidrBlock()
 * @method string getVpcName()
 * @method string getResourceGroupId()
 * @method string getCidrBlock()
 * @method string getUserCidr()
 */
class CreateVpcRequest extends \RpcAcsRequest
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
            'Vpc',
            '2016-04-28',
            'CreateVpc',
            'vpc'
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
     * @param string $enableIpv6
     *
     * @return $this
     */
    public function setEnableIpv6($enableIpv6)
    {
        $this->requestParameters['EnableIpv6'] = $enableIpv6;
        $this->queryParameters['EnableIpv6'] = $enableIpv6;

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
     * @param string $ipv6CidrBlock
     *
     * @return $this
     */
    public function setIpv6CidrBlock($ipv6CidrBlock)
    {
        $this->requestParameters['Ipv6CidrBlock'] = $ipv6CidrBlock;
        $this->queryParameters['Ipv6CidrBlock'] = $ipv6CidrBlock;

        return $this;
    }

    /**
     * @param string $vpcName
     *
     * @return $this
     */
    public function setVpcName($vpcName)
    {
        $this->requestParameters['VpcName'] = $vpcName;
        $this->queryParameters['VpcName'] = $vpcName;

        return $this;
    }

    /**
     * @param string $resourceGroupId
     *
     * @return $this
     */
    public function setResourceGroupId($resourceGroupId)
    {
        $this->requestParameters['ResourceGroupId'] = $resourceGroupId;
        $this->queryParameters['ResourceGroupId'] = $resourceGroupId;

        return $this;
    }

    /**
     * @param string $cidrBlock
     *
     * @return $this
     */
    public function setCidrBlock($cidrBlock)
    {
        $this->requestParameters['CidrBlock'] = $cidrBlock;
        $this->queryParameters['CidrBlock'] = $cidrBlock;

        return $this;
    }

    /**
     * @param string $userCidr
     *
     * @return $this
     */
    public function setUserCidr($userCidr)
    {
        $this->requestParameters['UserCidr'] = $userCidr;
        $this->queryParameters['UserCidr'] = $userCidr;

        return $this;
    }
}
