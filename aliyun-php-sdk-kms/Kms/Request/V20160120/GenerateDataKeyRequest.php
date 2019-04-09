<?php

namespace Kms\Request\V20160120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GenerateDataKey
 *
 * @method string getEncryptionContext()
 * @method string getKeyId()
 * @method string getKeySpec()
 * @method string getNumberOfBytes()
 */
class GenerateDataKeyRequest extends \RpcAcsRequest
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
            'GenerateDataKey',
            'kms'
        );
    }

    /**
     * @param string $encryptionContext
     *
     * @return $this
     */
    public function setEncryptionContext($encryptionContext)
    {
        $this->requestParameters['EncryptionContext'] = $encryptionContext;
        $this->queryParameters['EncryptionContext'] = $encryptionContext;

        return $this;
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
     * @param string $keySpec
     *
     * @return $this
     */
    public function setKeySpec($keySpec)
    {
        $this->requestParameters['KeySpec'] = $keySpec;
        $this->queryParameters['KeySpec'] = $keySpec;

        return $this;
    }

    /**
     * @param string $numberOfBytes
     *
     * @return $this
     */
    public function setNumberOfBytes($numberOfBytes)
    {
        $this->requestParameters['NumberOfBytes'] = $numberOfBytes;
        $this->queryParameters['NumberOfBytes'] = $numberOfBytes;

        return $this;
    }
}
