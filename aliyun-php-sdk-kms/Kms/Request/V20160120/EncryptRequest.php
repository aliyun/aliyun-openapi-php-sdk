<?php

namespace Kms\Request\V20160120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of Encrypt
 *
 * @method string getEncryptionContext()
 * @method string getKeyId()
 * @method string getPlaintext()
 */
class EncryptRequest extends \RpcAcsRequest
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
            'Encrypt',
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
     * @param string $plaintext
     *
     * @return $this
     */
    public function setPlaintext($plaintext)
    {
        $this->requestParameters['Plaintext'] = $plaintext;
        $this->queryParameters['Plaintext'] = $plaintext;

        return $this;
    }
}
