<?php

namespace aegis\Request\V20161111;

/**
 * Request of UpgradeInstance
 *
 * @method string getInstanceId()
 * @method string getClientToken()
 * @method string getVmNumber()
 * @method string getOwnerId()
 * @method string getVersionCode()
 */
class UpgradeInstanceRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'UpgradeInstance',
            'vipaegis'
        );
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        $this->requestParameters['InstanceId'] = $instanceId;
        $this->queryParameters['InstanceId'] = $instanceId;

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
     * @param string $vmNumber
     *
     * @return $this
     */
    public function setVmNumber($vmNumber)
    {
        $this->requestParameters['VmNumber'] = $vmNumber;
        $this->queryParameters['VmNumber'] = $vmNumber;

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
     * @param string $versionCode
     *
     * @return $this
     */
    public function setVersionCode($versionCode)
    {
        $this->requestParameters['VersionCode'] = $versionCode;
        $this->queryParameters['VersionCode'] = $versionCode;

        return $this;
    }
}
