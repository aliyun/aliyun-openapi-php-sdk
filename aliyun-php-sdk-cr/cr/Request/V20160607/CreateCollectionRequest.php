<?php

namespace cr\Request\V20160607;

/**
 * Request of CreateCollection
 *
 */
class CreateCollectionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/collections';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'CreateCollection',
            'cr'
        );
    }
}
