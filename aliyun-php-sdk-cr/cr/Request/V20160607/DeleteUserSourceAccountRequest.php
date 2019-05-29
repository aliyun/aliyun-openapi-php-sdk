<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DeleteUserSourceAccount
 *
 * @method string getSourceAccountId()
 */
class DeleteUserSourceAccountRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/users/sourceAccount/[SourceAccountId]';

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
            'DeleteUserSourceAccount',
            'cr'
        );
    }

    /**
     * @param string $sourceAccountId
     *
     * @return $this
     */
    public function setSourceAccountId($sourceAccountId)
    {
        $this->requestParameters['SourceAccountId'] = $sourceAccountId;
        $this->pathParameters['SourceAccountId'] = $sourceAccountId;

        return $this;
    }
}
