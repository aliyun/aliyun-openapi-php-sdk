<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateImageLib
 *
 * @method string getServiceModule()
 * @method string getScene()
 * @method string getSourceIp()
 * @method string getEnable()
 * @method string getBizTypes()
 * @method string getName()
 * @method string getCategory()
 */
class CreateImageLibRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'CreateImageLib',
            'green'
        );
    }

    /**
     * @param string $serviceModule
     *
     * @return $this
     */
    public function setServiceModule($serviceModule)
    {
        $this->requestParameters['ServiceModule'] = $serviceModule;
        $this->queryParameters['ServiceModule'] = $serviceModule;

        return $this;
    }

    /**
     * @param string $scene
     *
     * @return $this
     */
    public function setScene($scene)
    {
        $this->requestParameters['Scene'] = $scene;
        $this->queryParameters['Scene'] = $scene;

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
     * @param string $enable
     *
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->requestParameters['Enable'] = $enable;
        $this->queryParameters['Enable'] = $enable;

        return $this;
    }

    /**
     * @param string $bizTypes
     *
     * @return $this
     */
    public function setBizTypes($bizTypes)
    {
        $this->requestParameters['BizTypes'] = $bizTypes;
        $this->queryParameters['BizTypes'] = $bizTypes;

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
     * @param string $category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->requestParameters['Category'] = $category;
        $this->queryParameters['Category'] = $category;

        return $this;
    }
}
