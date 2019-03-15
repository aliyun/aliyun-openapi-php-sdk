<?php

namespace CloudPhoto\Request\V20170711;

/**
 * Request of ListPhotoStores
 *
 */
class ListPhotoStoresRequest extends \RpcAcsRequest
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
            'ListPhotoStores',
            'cloudphoto'
        );
    }
}
