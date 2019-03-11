<?php

namespace Push\Request\V20160801;

/**
 * Request of UnbindTag
 *
 * @method string getTagName()
 * @method string getClientKey()
 * @method string getAppKey()
 * @method string getKeyType()
 */
class UnbindTagRequest extends \RpcAcsRequest
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
            'Push',
            '2016-08-01',
            'UnbindTag'
        );
    }

    /**
     * @param string $tagName
     *
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->requestParameters['TagName'] = $tagName;
        $this->queryParameters['TagName'] = $tagName;

        return $this;
    }

    /**
     * @param string $clientKey
     *
     * @return $this
     */
    public function setClientKey($clientKey)
    {
        $this->requestParameters['ClientKey'] = $clientKey;
        $this->queryParameters['ClientKey'] = $clientKey;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->requestParameters['AppKey'] = $appKey;
        $this->queryParameters['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $keyType
     *
     * @return $this
     */
    public function setKeyType($keyType)
    {
        $this->requestParameters['KeyType'] = $keyType;
        $this->queryParameters['KeyType'] = $keyType;

        return $this;
    }
}
