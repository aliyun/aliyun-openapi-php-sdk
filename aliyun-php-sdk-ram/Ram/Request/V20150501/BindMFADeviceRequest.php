<?php

namespace Ram\Request\V20150501;

/**
 * Request of BindMFADevice
 *
 * @method string getSerialNumber()
 * @method string getAuthenticationCode2()
 * @method string getAuthenticationCode1()
 * @method string getUserName()
 */
class BindMFADeviceRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Ram',
            '2015-05-01',
            'BindMFADevice',
            'ram'
        );
    }

    /**
     * @param string $serialNumber
     *
     * @return $this
     */
    public function setSerialNumber($serialNumber)
    {
        $this->requestParameters['SerialNumber'] = $serialNumber;
        $this->queryParameters['SerialNumber'] = $serialNumber;

        return $this;
    }

    /**
     * @param string $authenticationCode2
     *
     * @return $this
     */
    public function setAuthenticationCode2($authenticationCode2)
    {
        $this->requestParameters['AuthenticationCode2'] = $authenticationCode2;
        $this->queryParameters['AuthenticationCode2'] = $authenticationCode2;

        return $this;
    }

    /**
     * @param string $authenticationCode1
     *
     * @return $this
     */
    public function setAuthenticationCode1($authenticationCode1)
    {
        $this->requestParameters['AuthenticationCode1'] = $authenticationCode1;
        $this->queryParameters['AuthenticationCode1'] = $authenticationCode1;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->requestParameters['UserName'] = $userName;
        $this->queryParameters['UserName'] = $userName;

        return $this;
    }
}
