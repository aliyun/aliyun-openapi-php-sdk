<?php

namespace Cloudauth\Request\V20180916;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetVerifyToken
 *
 * @method string getUserData()
 * @method string getResourceOwnerId()
 * @method string getBiz()
 * @method string getSourceIp()
 * @method string getBinding()
 * @method string getVerifyConfigs()
 * @method string getTicketId()
 */
class GetVerifyTokenRequest extends \RpcAcsRequest
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
            'Cloudauth',
            '2018-09-16',
            'GetVerifyToken',
            'cloudauth'
        );
    }

    /**
     * @param string $userData
     *
     * @return $this
     */
    public function setUserData($userData)
    {
        $this->requestParameters['UserData'] = $userData;
        $this->queryParameters['UserData'] = $userData;

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
     * @param string $biz
     *
     * @return $this
     */
    public function setBiz($biz)
    {
        $this->requestParameters['Biz'] = $biz;
        $this->queryParameters['Biz'] = $biz;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $binding
     *
     * @return $this
     */
    public function setBinding($binding)
    {
        $this->requestParameters['Binding'] = $binding;
        $this->queryParameters['Binding'] = $binding;

        return $this;
    }

    /**
     * @param string $verifyConfigs
     *
     * @return $this
     */
    public function setVerifyConfigs($verifyConfigs)
    {
        $this->requestParameters['VerifyConfigs'] = $verifyConfigs;
        $this->queryParameters['VerifyConfigs'] = $verifyConfigs;

        return $this;
    }

    /**
     * @param string $ticketId
     *
     * @return $this
     */
    public function setTicketId($ticketId)
    {
        $this->requestParameters['TicketId'] = $ticketId;
        $this->queryParameters['TicketId'] = $ticketId;

        return $this;
    }
}
