<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveProbeDataSubscriber
 *
 * @method string getApiUrl()
 * @method string getParamGenScript()
 * @method string getName()
 * @method string getHttpMethod()
 * @method string getDescription()
 * @method string getId()
 * @method string getType()
 * @method array getResourceIdss()
 */
class SaveProbeDataSubscriberRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'SaveProbeDataSubscriber',
            'cloudwf'
        );
    }

    /**
     * @param string $apiUrl
     *
     * @return $this
     */
    public function setApiUrl($apiUrl)
    {
        $this->requestParameters['ApiUrl'] = $apiUrl;
        $this->queryParameters['ApiUrl'] = $apiUrl;

        return $this;
    }

    /**
     * @param string $paramGenScript
     *
     * @return $this
     */
    public function setParamGenScript($paramGenScript)
    {
        $this->requestParameters['ParamGenScript'] = $paramGenScript;
        $this->queryParameters['ParamGenScript'] = $paramGenScript;

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
     * @param string $httpMethod
     *
     * @return $this
     */
    public function setHttpMethod($httpMethod)
    {
        $this->requestParameters['HttpMethod'] = $httpMethod;
        $this->queryParameters['HttpMethod'] = $httpMethod;

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
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setResourceIdss(array $value)
    {
        $this->requestParameters['ResourceIdss'] = $value;
        foreach ($value as $i => $iValue) {
            $this->queryParameters['ResourceIds.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
