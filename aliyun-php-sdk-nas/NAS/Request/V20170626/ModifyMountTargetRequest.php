<?php

namespace NAS\Request\V20170626;

/**
 * Request of ModifyMountTarget
 *
 * @method string getMountTargetDomain()
 * @method string getAccessGroupName()
 * @method string getFileSystemId()
 * @method string getStatus()
 */
class ModifyMountTargetRequest extends \RpcAcsRequest
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
            'ModifyMountTarget',
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
     * @param string $accessGroupName
     *
     * @return $this
     */
    public function setAccessGroupName($accessGroupName)
    {
        $this->requestParameters['AccessGroupName'] = $accessGroupName;
        $this->queryParameters['AccessGroupName'] = $accessGroupName;

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

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->requestParameters['Status'] = $status;
        $this->queryParameters['Status'] = $status;

        return $this;
    }
}
