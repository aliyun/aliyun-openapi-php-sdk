<?php

namespace CloudAPI\Request\V20160714;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ModifyApi
 *
 * @method string getWebSocketApiType()
 * @method string getErrorCodeSamples()
 * @method string getAppCodeAuthType()
 * @method string getDescription()
 * @method string getDisableInternet()
 * @method string getConstantParameters()
 * @method string getAuthType()
 * @method string getAllowSignatureMethod()
 * @method string getServiceParameters()
 * @method string getFailResultSample()
 * @method string getSystemParameters()
 * @method string getServiceParametersMap()
 * @method string getSecurityToken()
 * @method string getOpenIdConnectConfig()
 * @method string getRequestParameters()
 * @method string getResultDescriptions()
 * @method string getVisibility()
 * @method string getGroupId()
 * @method string getServiceConfig()
 * @method string getResultType()
 * @method string getApiName()
 * @method string getResultSample()
 * @method string getForceNonceCheck()
 * @method string getRequestConfig()
 * @method string getResultBodyModel()
 * @method string getApiId()
 */
class ModifyApiRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'ModifyApi',
            'apigateway'
        );
    }

    /**
     * @param string $webSocketApiType
     *
     * @return $this
     */
    public function setWebSocketApiType($webSocketApiType)
    {
        $this->requestParameters['WebSocketApiType'] = $webSocketApiType;
        $this->queryParameters['WebSocketApiType'] = $webSocketApiType;

        return $this;
    }

    /**
     * @param string $errorCodeSamples
     *
     * @return $this
     */
    public function setErrorCodeSamples($errorCodeSamples)
    {
        $this->requestParameters['ErrorCodeSamples'] = $errorCodeSamples;
        $this->queryParameters['ErrorCodeSamples'] = $errorCodeSamples;

        return $this;
    }

    /**
     * @param string $appCodeAuthType
     *
     * @return $this
     */
    public function setAppCodeAuthType($appCodeAuthType)
    {
        $this->requestParameters['AppCodeAuthType'] = $appCodeAuthType;
        $this->queryParameters['AppCodeAuthType'] = $appCodeAuthType;

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
     * @param string $disableInternet
     *
     * @return $this
     */
    public function setDisableInternet($disableInternet)
    {
        $this->requestParameters['DisableInternet'] = $disableInternet;
        $this->queryParameters['DisableInternet'] = $disableInternet;

        return $this;
    }

    /**
     * @param string $constantParameters
     *
     * @return $this
     */
    public function setConstantParameters($constantParameters)
    {
        $this->requestParameters['ConstantParameters'] = $constantParameters;
        $this->queryParameters['ConstantParameters'] = $constantParameters;

        return $this;
    }

    /**
     * @param string $authType
     *
     * @return $this
     */
    public function setAuthType($authType)
    {
        $this->requestParameters['AuthType'] = $authType;
        $this->queryParameters['AuthType'] = $authType;

        return $this;
    }

    /**
     * @param string $allowSignatureMethod
     *
     * @return $this
     */
    public function setAllowSignatureMethod($allowSignatureMethod)
    {
        $this->requestParameters['AllowSignatureMethod'] = $allowSignatureMethod;
        $this->queryParameters['AllowSignatureMethod'] = $allowSignatureMethod;

        return $this;
    }

    /**
     * @param string $serviceParameters
     *
     * @return $this
     */
    public function setServiceParameters($serviceParameters)
    {
        $this->requestParameters['ServiceParameters'] = $serviceParameters;
        $this->queryParameters['ServiceParameters'] = $serviceParameters;

        return $this;
    }

    /**
     * @param string $failResultSample
     *
     * @return $this
     */
    public function setFailResultSample($failResultSample)
    {
        $this->requestParameters['FailResultSample'] = $failResultSample;
        $this->queryParameters['FailResultSample'] = $failResultSample;

        return $this;
    }

    /**
     * @param string $systemParameters
     *
     * @return $this
     */
    public function setSystemParameters($systemParameters)
    {
        $this->requestParameters['SystemParameters'] = $systemParameters;
        $this->queryParameters['SystemParameters'] = $systemParameters;

        return $this;
    }

    /**
     * @param string $serviceParametersMap
     *
     * @return $this
     */
    public function setServiceParametersMap($serviceParametersMap)
    {
        $this->requestParameters['ServiceParametersMap'] = $serviceParametersMap;
        $this->queryParameters['ServiceParametersMap'] = $serviceParametersMap;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $openIdConnectConfig
     *
     * @return $this
     */
    public function setOpenIdConnectConfig($openIdConnectConfig)
    {
        $this->requestParameters['OpenIdConnectConfig'] = $openIdConnectConfig;
        $this->queryParameters['OpenIdConnectConfig'] = $openIdConnectConfig;

        return $this;
    }

    /**
     * @param string $requestParameters
     *
     * @return $this
     */
    public function setRequestParameters($requestParameters)
    {
        $this->requestParameters['RequestParameters'] = $requestParameters;
        $this->queryParameters['RequestParameters'] = $requestParameters;

        return $this;
    }

    /**
     * @param string $resultDescriptions
     *
     * @return $this
     */
    public function setResultDescriptions($resultDescriptions)
    {
        $this->requestParameters['ResultDescriptions'] = $resultDescriptions;
        $this->queryParameters['ResultDescriptions'] = $resultDescriptions;

        return $this;
    }

    /**
     * @param string $visibility
     *
     * @return $this
     */
    public function setVisibility($visibility)
    {
        $this->requestParameters['Visibility'] = $visibility;
        $this->queryParameters['Visibility'] = $visibility;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }

    /**
     * @param string $serviceConfig
     *
     * @return $this
     */
    public function setServiceConfig($serviceConfig)
    {
        $this->requestParameters['ServiceConfig'] = $serviceConfig;
        $this->queryParameters['ServiceConfig'] = $serviceConfig;

        return $this;
    }

    /**
     * @param string $resultType
     *
     * @return $this
     */
    public function setResultType($resultType)
    {
        $this->requestParameters['ResultType'] = $resultType;
        $this->queryParameters['ResultType'] = $resultType;

        return $this;
    }

    /**
     * @param string $apiName
     *
     * @return $this
     */
    public function setApiName($apiName)
    {
        $this->requestParameters['ApiName'] = $apiName;
        $this->queryParameters['ApiName'] = $apiName;

        return $this;
    }

    /**
     * @param string $resultSample
     *
     * @return $this
     */
    public function setResultSample($resultSample)
    {
        $this->requestParameters['ResultSample'] = $resultSample;
        $this->queryParameters['ResultSample'] = $resultSample;

        return $this;
    }

    /**
     * @param string $forceNonceCheck
     *
     * @return $this
     */
    public function setForceNonceCheck($forceNonceCheck)
    {
        $this->requestParameters['ForceNonceCheck'] = $forceNonceCheck;
        $this->queryParameters['ForceNonceCheck'] = $forceNonceCheck;

        return $this;
    }

    /**
     * @param string $requestConfig
     *
     * @return $this
     */
    public function setRequestConfig($requestConfig)
    {
        $this->requestParameters['RequestConfig'] = $requestConfig;
        $this->queryParameters['RequestConfig'] = $requestConfig;

        return $this;
    }

    /**
     * @param string $resultBodyModel
     *
     * @return $this
     */
    public function setResultBodyModel($resultBodyModel)
    {
        $this->requestParameters['ResultBodyModel'] = $resultBodyModel;
        $this->queryParameters['ResultBodyModel'] = $resultBodyModel;

        return $this;
    }

    /**
     * @param string $apiId
     *
     * @return $this
     */
    public function setApiId($apiId)
    {
        $this->requestParameters['ApiId'] = $apiId;
        $this->queryParameters['ApiId'] = $apiId;

        return $this;
    }
}
