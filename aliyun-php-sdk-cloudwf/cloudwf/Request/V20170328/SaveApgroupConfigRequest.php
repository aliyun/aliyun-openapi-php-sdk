<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveApgroupConfig
 *
 * @method string getCountry()
 * @method string getLogLevel()
 * @method string getName()
 * @method string getEchoInt()
 * @method string getScan()
 * @method string getDescription()
 * @method string getId()
 * @method string getDai()
 * @method string getLogIp()
 */
class SaveApgroupConfigRequest extends \RpcAcsRequest
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
            'SaveApgroupConfig',
            'cloudwf'
        );
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->requestParameters['Country'] = $country;
        $this->queryParameters['Country'] = $country;

        return $this;
    }

    /**
     * @param string $logLevel
     *
     * @return $this
     */
    public function setLogLevel($logLevel)
    {
        $this->requestParameters['LogLevel'] = $logLevel;
        $this->queryParameters['LogLevel'] = $logLevel;

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
     * @param string $echoInt
     *
     * @return $this
     */
    public function setEchoInt($echoInt)
    {
        $this->requestParameters['EchoInt'] = $echoInt;
        $this->queryParameters['EchoInt'] = $echoInt;

        return $this;
    }

    /**
     * @param string $scan
     *
     * @return $this
     */
    public function setScan($scan)
    {
        $this->requestParameters['Scan'] = $scan;
        $this->queryParameters['Scan'] = $scan;

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
     * @param string $dai
     *
     * @return $this
     */
    public function setDai($dai)
    {
        $this->requestParameters['Dai'] = $dai;
        $this->queryParameters['Dai'] = $dai;

        return $this;
    }

    /**
     * @param string $logIp
     *
     * @return $this
     */
    public function setLogIp($logIp)
    {
        $this->requestParameters['LogIp'] = $logIp;
        $this->queryParameters['LogIp'] = $logIp;

        return $this;
    }
}
