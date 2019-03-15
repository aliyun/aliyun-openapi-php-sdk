<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of ListRegisteredTags
 *
 * @method string getStoreName()
 * @method array getLangs()
 */
class ListRegisteredTagsRequest extends \RpcAcsRequest
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
            'ListRegisteredTags',
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
     * @param array $langs
     *
     * @return $this
     */
    public function setLangs(array $langs)
    {
        $this->requestParameters['Langs'] = $langs;
        foreach ($langs as $i => $iValue) {
            $this->queryParameters['Lang.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
