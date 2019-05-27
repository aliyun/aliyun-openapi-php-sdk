<?php

namespace Sddp\Request\V20190103;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateConfig
 *
 * @method string getCode()
 * @method string getSourceIp()
 * @method string getFeatureType()
 * @method string getDescription()
 * @method string getConfigList()
 * @method string getLang()
 * @method string getValue()
 */
class CreateConfigRequest extends \RpcAcsRequest
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
            'Sddp',
            '2019-01-03',
            'CreateConfig',
            'sddp'
        );
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->requestParameters['Code'] = $code;
        $this->queryParameters['Code'] = $code;

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
     * @param string $featureType
     *
     * @return $this
     */
    public function setFeatureType($featureType)
    {
        $this->requestParameters['FeatureType'] = $featureType;
        $this->queryParameters['FeatureType'] = $featureType;

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
     * @param string $configList
     *
     * @return $this
     */
    public function setConfigList($configList)
    {
        $this->requestParameters['ConfigList'] = $configList;
        $this->queryParameters['ConfigList'] = $configList;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->requestParameters['Value'] = $value;
        $this->queryParameters['Value'] = $value;

        return $this;
    }
}
