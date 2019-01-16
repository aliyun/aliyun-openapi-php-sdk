<?php

namespace CCC\Request\V20170705;

/**
 * Request of Encrypt
 *
 * @method string getPublicKey()
 * @method array getPlainTexts()
 */
class EncryptRequest extends \RpcAcsRequest
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
            'CCC',
            '2017-07-05',
            'Encrypt'
        );
    }

    /**
     * @param string $publicKey
     *
     * @return $this
     */
    public function setPublicKey($publicKey)
    {
        $this->requestParameters['PublicKey'] = $publicKey;
        $this->queryParameters['PublicKey'] = $publicKey;

        return $this;
    }

    /**
     * @param array $plainTexts
     *
     * @return $this
     */
    public function setPlainTexts(array $plainTexts)
    {
        $this->requestParameters['PlainTexts'] = $plainTexts;
        foreach ($plainTexts as $i => $iValue) {
            $this->queryParameters['PlainText.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
