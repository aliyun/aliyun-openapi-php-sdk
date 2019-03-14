<?php

namespace Ram\Request\V20150501;

/**
 * Request of UploadPublicKey
 *
 * @method string getPublicKeySpec()
 * @method string getUserName()
 */
class UploadPublicKeyRequest extends \RpcAcsRequest
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
            'Ram',
            '2015-05-01',
            'UploadPublicKey',
            'ram'
        );
    }

    /**
     * @param string $publicKeySpec
     *
     * @return $this
     */
    public function setPublicKeySpec($publicKeySpec)
    {
        $this->requestParameters['PublicKeySpec'] = $publicKeySpec;
        $this->queryParameters['PublicKeySpec'] = $publicKeySpec;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->requestParameters['UserName'] = $userName;
        $this->queryParameters['UserName'] = $userName;

        return $this;
    }
}
