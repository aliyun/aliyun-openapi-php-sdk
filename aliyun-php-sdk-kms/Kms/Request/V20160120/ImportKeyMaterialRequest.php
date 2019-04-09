<?php

namespace Kms\Request\V20160120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ImportKeyMaterial
 *
 * @method string getImportToken()
 * @method string getEncryptedKeyMaterial()
 * @method string getKeyMaterialExpireUnix()
 * @method string getKeyId()
 */
class ImportKeyMaterialRequest extends \RpcAcsRequest
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
            'ImportKeyMaterial',
            'kms'
        );
    }

    /**
     * @param string $importToken
     *
     * @return $this
     */
    public function setImportToken($importToken)
    {
        $this->requestParameters['ImportToken'] = $importToken;
        $this->queryParameters['ImportToken'] = $importToken;

        return $this;
    }

    /**
     * @param string $encryptedKeyMaterial
     *
     * @return $this
     */
    public function setEncryptedKeyMaterial($encryptedKeyMaterial)
    {
        $this->requestParameters['EncryptedKeyMaterial'] = $encryptedKeyMaterial;
        $this->queryParameters['EncryptedKeyMaterial'] = $encryptedKeyMaterial;

        return $this;
    }

    /**
     * @param string $keyMaterialExpireUnix
     *
     * @return $this
     */
    public function setKeyMaterialExpireUnix($keyMaterialExpireUnix)
    {
        $this->requestParameters['KeyMaterialExpireUnix'] = $keyMaterialExpireUnix;
        $this->queryParameters['KeyMaterialExpireUnix'] = $keyMaterialExpireUnix;

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
}
