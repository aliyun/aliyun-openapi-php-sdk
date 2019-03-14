<?php

namespace cr\Request\V20160607;

/**
 * Request of GetRepoBatch
 *
 * @method string getRepoIds()
 */
class GetRepoBatchRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/batchsearch';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'GetRepoBatch',
            'cr'
        );
    }

    /**
     * @param string $repoIds
     *
     * @return $this
     */
    public function setRepoIds($repoIds)
    {
        $this->requestParameters['RepoIds'] = $repoIds;
        $this->queryParameters['RepoIds'] = $repoIds;

        return $this;
    }
}
