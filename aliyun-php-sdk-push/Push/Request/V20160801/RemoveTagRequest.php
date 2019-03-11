<?php

namespace Push\Request\V20160801;

/**
 * Request of RemoveTag
 *
 * @method string getTagName()
 * @method string getAppKey()
 */
class RemoveTagRequest extends \RpcAcsRequest
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
            'RemoveTag'
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
}
