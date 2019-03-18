<?php

namespace ImageSearch\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SearchItem
 *
 * @method string getinstanceName()
 */
class SearchItemRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/item/search';

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
            'ImageSearch',
            '2018-01-20',
            'SearchItem',
            'imagesearch'
        );
    }

    /**
     * @param string $instanceName
     *
     * @return $this
     */
    public function setinstanceName($instanceName)
    {
        $this->requestParameters['instanceName'] = $instanceName;
        $this->queryParameters['instanceName'] = $instanceName;

        return $this;
    }
}
