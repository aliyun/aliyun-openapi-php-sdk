<?php

namespace Green\Request\V20161222;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ImageResult
 *
 * @method string gettaskid()
 */
class ImageResultRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/image/result/[taskid]';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Green',
            '2016-12-22',
            'ImageResult',
            'green'
        );
    }

    /**
     * @param string $taskid
     *
     * @return $this
     */
    public function settaskid($taskid)
    {
        $this->requestParameters['taskid'] = $taskid;
        $this->pathParameters['taskid'] = $taskid;

        return $this;
    }
}
