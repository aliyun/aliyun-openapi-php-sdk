<?php

namespace ARMS\Request\V20190808;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateRetcodeApp
 *
 * @method string getRetcodeAppName()
 * @method string getRetcodeAppType()
 */
class CreateRetcodeAppRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-08-08',
            'CreateRetcodeApp',
            'arms'
        );
    }

    /**
     * @param string $retcodeAppName
     *
     * @return $this
     */
    public function setRetcodeAppName($retcodeAppName)
    {
        $this->requestParameters['RetcodeAppName'] = $retcodeAppName;
        $this->queryParameters['RetcodeAppName'] = $retcodeAppName;

        return $this;
    }

    /**
     * @param string $retcodeAppType
     *
     * @return $this
     */
    public function setRetcodeAppType($retcodeAppType)
    {
        $this->requestParameters['RetcodeAppType'] = $retcodeAppType;
        $this->queryParameters['RetcodeAppType'] = $retcodeAppType;

        return $this;
    }
}
