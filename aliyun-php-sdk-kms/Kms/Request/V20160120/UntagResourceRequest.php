<?php

namespace Kms\Request\V20160120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UntagResource
 *
 * @method string getTagKeys()
 * @method string getKeyId()
 */
class UntagResourceRequest extends \RpcAcsRequest
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
            'UntagResource',
            'kms'
        );
    }

    /**
     * @param string $tagKeys
     *
     * @return $this
     */
    public function setTagKeys($tagKeys)
    {
        $this->requestParameters['TagKeys'] = $tagKeys;
        $this->queryParameters['TagKeys'] = $tagKeys;

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
