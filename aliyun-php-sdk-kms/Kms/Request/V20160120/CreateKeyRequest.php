<?php

namespace Kms\Request\V20160120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateKey
 *
 * @method string getKeyUsage()
 * @method string getOrigin()
 * @method string getDescription()
 */
class CreateKeyRequest extends \RpcAcsRequest
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
            'Kms',
            '2016-01-20',
            'CreateKey',
            'kms'
        );
    }

    /**
     * @param string $keyUsage
     *
     * @return $this
     */
    public function setKeyUsage($keyUsage)
    {
        $this->requestParameters['KeyUsage'] = $keyUsage;
        $this->queryParameters['KeyUsage'] = $keyUsage;

        return $this;
    }

    /**
     * @param string $origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->requestParameters['Origin'] = $origin;
        $this->queryParameters['Origin'] = $origin;

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
}
