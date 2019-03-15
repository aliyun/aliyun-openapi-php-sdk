<?php

namespace Ubsms\Request\V20150623;

/**
 * Request of NotifyUserBusinessCommand
 *
 * @method string getUid()
 * @method string getPassword()
 * @method string getInstanceId()
 * @method string getServiceCode()
 * @method string getClientToken()
 * @method string getCmd()
 * @method string getRegion()
 */
class NotifyUserBusinessCommandRequest extends \RpcAcsRequest
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
            'Ubsms',
            '2015-06-23',
            'NotifyUserBusinessCommand',
            'ubsms'
        );
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->requestParameters['Uid'] = $uid;
        $this->queryParameters['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

        return $this;
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
     * @param string $serviceCode
     *
     * @return $this
     */
    public function setServiceCode($serviceCode)
    {
        $this->requestParameters['ServiceCode'] = $serviceCode;
        $this->queryParameters['ServiceCode'] = $serviceCode;

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
     * @param string $cmd
     *
     * @return $this
     */
    public function setCmd($cmd)
    {
        $this->requestParameters['Cmd'] = $cmd;
        $this->queryParameters['Cmd'] = $cmd;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->requestParameters['Region'] = $region;
        $this->queryParameters['Region'] = $region;

        return $this;
    }
}
