<?php

namespace Kms\Request\V20160120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetParametersForImport
 *
 * @method string getKeyId()
 * @method string getWrappingAlgorithm()
 * @method string getWrappingKeySpec()
 */
class GetParametersForImportRequest extends \RpcAcsRequest
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
            'GetParametersForImport',
            'kms'
        );
    }

    /**
     * @param string $keyId
     *
     * @return $this
     */
    public function setKeyId($keyId)
    {
        $this->requestParameters['KeyId'] = $keyId;
        $this->queryParameters['KeyId'] = $keyId;

        return $this;
    }

    /**
     * @param string $wrappingAlgorithm
     *
     * @return $this
     */
    public function setWrappingAlgorithm($wrappingAlgorithm)
    {
        $this->requestParameters['WrappingAlgorithm'] = $wrappingAlgorithm;
        $this->queryParameters['WrappingAlgorithm'] = $wrappingAlgorithm;

        return $this;
    }

    /**
     * @param string $wrappingKeySpec
     *
     * @return $this
     */
    public function setWrappingKeySpec($wrappingKeySpec)
    {
        $this->requestParameters['WrappingKeySpec'] = $wrappingKeySpec;
        $this->queryParameters['WrappingKeySpec'] = $wrappingKeySpec;

        return $this;
    }
}
