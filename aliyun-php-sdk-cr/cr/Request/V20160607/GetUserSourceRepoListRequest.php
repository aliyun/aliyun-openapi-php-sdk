<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetUserSourceRepoList
 *
 * @method string getSourceAccountId()
 */
class GetUserSourceRepoListRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/users/sourceAccount/[SourceAccountId]/repos';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetUserSourceRepoList',
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
