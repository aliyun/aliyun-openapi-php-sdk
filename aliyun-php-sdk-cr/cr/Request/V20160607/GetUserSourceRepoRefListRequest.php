<?php

namespace cr\Request\V20160607;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetUserSourceRepoRefList
 *
 * @method string getSourceAccountId()
 * @method string getSourceRepoName()
 * @method string getSourceRepoNamespace()
 */
class GetUserSourceRepoRefListRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/users/sourceAccount/[SourceAccountId]/repos/[SourceRepoNamespace]/[SourceRepoName]/refs';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetUserSourceRepoRefList',
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

    /**
     * @param string $sourceRepoName
     *
     * @return $this
     */
    public function setSourceRepoName($sourceRepoName)
    {
        $this->requestParameters['SourceRepoName'] = $sourceRepoName;
        $this->pathParameters['SourceRepoName'] = $sourceRepoName;

        return $this;
    }

    /**
     * @param string $sourceRepoNamespace
     *
     * @return $this
     */
    public function setSourceRepoNamespace($sourceRepoNamespace)
    {
        $this->requestParameters['SourceRepoNamespace'] = $sourceRepoNamespace;
        $this->pathParameters['SourceRepoNamespace'] = $sourceRepoNamespace;

        return $this;
    }
}
