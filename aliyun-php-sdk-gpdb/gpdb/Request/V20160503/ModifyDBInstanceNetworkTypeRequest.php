<?php

namespace gpdb\Request\V20160503;

/**
 * Request of ModifyDBInstanceNetworkType
 *
 * @method string getVSwitchId()
 * @method string getPrivateIpAddress()
 * @method string getVPCId()
 * @method string getDBInstanceId()
 * @method string getInstanceNetworkType()
 */
class ModifyDBInstanceNetworkTypeRequest extends \RpcAcsRequest
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
            'gpdb',
            '2016-05-03',
            'ModifyDBInstanceNetworkType',
            'gpdb'
        );
    }

    /**
     * @param string $vSwitchId
     *
     * @return $this
     */
    public function setVSwitchId($vSwitchId)
    {
        $this->requestParameters['VSwitchId'] = $vSwitchId;
        $this->queryParameters['VSwitchId'] = $vSwitchId;

        return $this;
    }

    /**
     * @param string $privateIpAddress
     *
     * @return $this
     */
    public function setPrivateIpAddress($privateIpAddress)
    {
        $this->requestParameters['PrivateIpAddress'] = $privateIpAddress;
        $this->queryParameters['PrivateIpAddress'] = $privateIpAddress;

        return $this;
    }

    /**
     * @param string $vPCId
     *
     * @return $this
     */
    public function setVPCId($vPCId)
    {
        $this->requestParameters['VPCId'] = $vPCId;
        $this->queryParameters['VPCId'] = $vPCId;

        return $this;
    }

    /**
     * @param string $dBInstanceId
     *
     * @return $this
     */
    public function setDBInstanceId($dBInstanceId)
    {
        $this->requestParameters['DBInstanceId'] = $dBInstanceId;
        $this->queryParameters['DBInstanceId'] = $dBInstanceId;

        return $this;
    }

    /**
     * @param string $instanceNetworkType
     *
     * @return $this
     */
    public function setInstanceNetworkType($instanceNetworkType)
    {
        $this->requestParameters['InstanceNetworkType'] = $instanceNetworkType;
        $this->queryParameters['InstanceNetworkType'] = $instanceNetworkType;

        return $this;
    }
}
