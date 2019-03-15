<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of RegisterTag
 *
 * @method string getStoreName()
 * @method string getText()
 * @method string getTagKey()
 * @method string getLang()
 */
class RegisterTagRequest extends \RpcAcsRequest
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
            'CloudPhoto',
            '2017-07-11',
            'RegisterTag',
            'cloudphoto'
        );
    }

    /**
     * @param string $storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->requestParameters['StoreName'] = $storeName;
        $this->queryParameters['StoreName'] = $storeName;

        return $this;
    }

    /**
     * @param string $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->requestParameters['Text'] = $text;
        $this->queryParameters['Text'] = $text;

        return $this;
    }

    /**
     * @param string $tagKey
     *
     * @return $this
     */
    public function setTagKey($tagKey)
    {
        $this->requestParameters['TagKey'] = $tagKey;
        $this->queryParameters['TagKey'] = $tagKey;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
