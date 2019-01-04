<?php

namespace NAS\Request\V20170626;

/**
 * Request of CPFSDescribeFileSystems
 *
 * @method string getFsId()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class CPFSDescribeFileSystemsRequest extends \RpcAcsRequest
{

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
            'NAS',
            '2017-06-26',
            'CPFSDescribeFileSystems',
            'nas'
        );
    }

    /**
     * @param string $fsId
     *
     * @return $this
     */
    public function setFsId($fsId)
    {
        $this->requestParameters['FsId'] = $fsId;
        $this->queryParameters['FsId'] = $fsId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->requestParameters['PageNumber'] = $pageNumber;
        $this->queryParameters['PageNumber'] = $pageNumber;

        return $this;
    }
}
