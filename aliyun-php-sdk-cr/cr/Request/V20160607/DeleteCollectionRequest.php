<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteCollection
 *
 * @method string getCollectionId()
 */
class DeleteCollectionRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/collections/[CollectionId]';

    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'DeleteCollection',
            'cr'
        );
    }

    /**
     * @param string $collectionId
     *
     * @return $this
     */
    public function setCollectionId($collectionId)
    {
        $this->requestParameters['CollectionId'] = $collectionId;
        $this->pathParameters['CollectionId'] = $collectionId;

        return $this;
    }
}
