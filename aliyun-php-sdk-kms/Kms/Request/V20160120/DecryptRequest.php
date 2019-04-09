<?php

namespace Kms\Request\V20160120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of Decrypt
 *
 * @method string getEncryptionContext()
 * @method string getCiphertextBlob()
 */
class DecryptRequest extends \RpcAcsRequest
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
            'Decrypt',
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
     * @param string $ciphertextBlob
     *
     * @return $this
     */
    public function setCiphertextBlob($ciphertextBlob)
    {
        $this->requestParameters['CiphertextBlob'] = $ciphertextBlob;
        $this->queryParameters['CiphertextBlob'] = $ciphertextBlob;

        return $this;
    }
}
