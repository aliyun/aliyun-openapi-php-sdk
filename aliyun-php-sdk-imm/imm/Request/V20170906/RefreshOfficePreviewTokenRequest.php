<?php

namespace imm\Request\V20170906;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of RefreshOfficePreviewToken
 *
 * @method string getProject()
 * @method string getAccessToken()
 * @method string getRefreshToken()
 */
class RefreshOfficePreviewTokenRequest extends \RpcAcsRequest
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
            'imm',
            '2017-09-06',
            'RefreshOfficePreviewToken',
            'imm'
        );
    }

    /**
     * @param string $project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->requestParameters['Project'] = $project;
        $this->queryParameters['Project'] = $project;

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
     * @param string $refreshToken
     *
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->requestParameters['RefreshToken'] = $refreshToken;
        $this->queryParameters['RefreshToken'] = $refreshToken;

        return $this;
    }
}
