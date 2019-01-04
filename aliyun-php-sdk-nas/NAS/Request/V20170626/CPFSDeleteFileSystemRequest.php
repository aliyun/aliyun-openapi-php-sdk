<?php

namespace NAS\Request\V20170626;

/**
 * Request of CPFSDeleteFileSystem
 *
 * @method string getFsId()
 */
class CPFSDeleteFileSystemRequest extends \RpcAcsRequest
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
            'CPFSDeleteFileSystem',
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
}
