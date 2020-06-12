<?php

namespace Airec\Request\V20181012;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ListInstance
 *
 * @method string getsize()
 * @method string getpage()
 */
class ListInstanceRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/openapi/instances';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Airec',
            '2018-10-12',
            'ListInstance',
            'airec'
        );
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function setsize($size)
    {
        $this->requestParameters['size'] = $size;
        $this->queryParameters['size'] = $size;

        return $this;
    }

    /**
     * @param string $page
     *
     * @return $this
     */
    public function setpage($page)
    {
        $this->requestParameters['page'] = $page;
        $this->queryParameters['page'] = $page;

        return $this;
    }
}
