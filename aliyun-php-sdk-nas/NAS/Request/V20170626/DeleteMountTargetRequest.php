<?php

namespace NAS\Request\V20170626;

/**
 * Request of DeleteMountTarget
 *
 * @method string getMountTargetDomain()
 * @method string getFileSystemId()
 */
class DeleteMountTargetRequest extends \RpcAcsRequest
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
            'DeleteMountTarget',
            'nas'
        );
    }

    /**
     * @param string $mountTargetDomain
     *
     * @return $this
     */
    public function setMountTargetDomain($mountTargetDomain)
    {
        $this->requestParameters['MountTargetDomain'] = $mountTargetDomain;
        $this->queryParameters['MountTargetDomain'] = $mountTargetDomain;

        return $this;
    }

    /**
     * @param string $fileSystemId
     *
     * @return $this
     */
    public function setFileSystemId($fileSystemId)
    {
        $this->requestParameters['FileSystemId'] = $fileSystemId;
        $this->queryParameters['FileSystemId'] = $fileSystemId;

        return $this;
    }
}
