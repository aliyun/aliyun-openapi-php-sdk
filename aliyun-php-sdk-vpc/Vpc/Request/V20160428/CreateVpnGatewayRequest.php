<?php

namespace Vpc\Request\V20160428;

/**
 * Request of CreateVpnGateway
 *
 * @method string getResourceOwnerId()
 * @method string getPeriod()
 * @method string getAutoPay()
 * @method string getResourceOwnerAccount()
 * @method string getBandwidth()
 * @method string getEnableIpsec()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getEnableSsl()
 * @method string getSslConnections()
 * @method string getVpcId()
 * @method string getName()
 * @method string getInstanceChargeType()
 */
class CreateVpnGatewayRequest extends \RpcAcsRequest
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
            'CreateVpnGateway',
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
     * @param string $period
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->requestParameters['Period'] = $period;
        $this->queryParameters['Period'] = $period;

        return $this;
    }

    /**
     * @param string $autoPay
     *
     * @return $this
     */
    public function setAutoPay($autoPay)
    {
        $this->requestParameters['AutoPay'] = $autoPay;
        $this->queryParameters['AutoPay'] = $autoPay;

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
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->requestParameters['Bandwidth'] = $bandwidth;
        $this->queryParameters['Bandwidth'] = $bandwidth;

        return $this;
    }

    /**
     * @param string $enableIpsec
     *
     * @return $this
     */
    public function setEnableIpsec($enableIpsec)
    {
        $this->requestParameters['EnableIpsec'] = $enableIpsec;
        $this->queryParameters['EnableIpsec'] = $enableIpsec;

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
     * @param string $enableSsl
     *
     * @return $this
     */
    public function setEnableSsl($enableSsl)
    {
        $this->requestParameters['EnableSsl'] = $enableSsl;
        $this->queryParameters['EnableSsl'] = $enableSsl;

        return $this;
    }

    /**
     * @param string $sslConnections
     *
     * @return $this
     */
    public function setSslConnections($sslConnections)
    {
        $this->requestParameters['SslConnections'] = $sslConnections;
        $this->queryParameters['SslConnections'] = $sslConnections;

        return $this;
    }

    /**
     * @param string $vpcId
     *
     * @return $this
     */
    public function setVpcId($vpcId)
    {
        $this->requestParameters['VpcId'] = $vpcId;
        $this->queryParameters['VpcId'] = $vpcId;

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
     * @param string $instanceChargeType
     *
     * @return $this
     */
    public function setInstanceChargeType($instanceChargeType)
    {
        $this->requestParameters['InstanceChargeType'] = $instanceChargeType;
        $this->queryParameters['InstanceChargeType'] = $instanceChargeType;

        return $this;
    }
}
