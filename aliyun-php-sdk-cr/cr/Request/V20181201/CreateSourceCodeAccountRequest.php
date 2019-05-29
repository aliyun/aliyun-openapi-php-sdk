<?php

namespace cr\Request\V20181201;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateSourceCodeAccount
 *
 * @method string getCodeRepoType()
 * @method string getCodeRepoUrl()
 * @method string getAccessToken()
 * @method string getInstanceId()
 * @method string getUsername()
 */
class CreateSourceCodeAccountRequest extends \RpcAcsRequest
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
            'cr',
            '2018-12-01',
            'CreateSourceCodeAccount',
            'cr'
        );
    }

    /**
     * @param string $codeRepoType
     *
     * @return $this
     */
    public function setCodeRepoType($codeRepoType)
    {
        $this->requestParameters['CodeRepoType'] = $codeRepoType;
        $this->queryParameters['CodeRepoType'] = $codeRepoType;

        return $this;
    }

    /**
     * @param string $codeRepoUrl
     *
     * @return $this
     */
    public function setCodeRepoUrl($codeRepoUrl)
    {
        $this->requestParameters['CodeRepoUrl'] = $codeRepoUrl;
        $this->queryParameters['CodeRepoUrl'] = $codeRepoUrl;

        return $this;
    }

    /**
     * @param string $accessToken
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->requestParameters['AccessToken'] = $accessToken;
        $this->queryParameters['AccessToken'] = $accessToken;

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
     * @param string $username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->requestParameters['Username'] = $username;
        $this->queryParameters['Username'] = $username;

        return $this;
    }
}
