<?php

namespace NAS\Request\V20170626;

/**
 * Request of CPFSModifyFileSystem
 *
 * @method string getBandwidth()
 * @method string getFsId()
 * @method string getFsDesc()
 * @method string getCapacity()
 */
class CPFSModifyFileSystemRequest extends \RpcAcsRequest
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
            'CPFSModifyFileSystem',
            'nas'
        );
    }

    /**
     * @param string $bandwidth
     *
     * @return $this
     */
    public function setBandwidth($bandwidth)
    {
        $this->requestParameters['Bandwidth'] = $bandwidth;
        $this->queryParameters['Bandwidth'] = $bandwidth;

        return $this;
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
     * @param string $fsDesc
     *
     * @return $this
     */
    public function setFsDesc($fsDesc)
    {
        $this->requestParameters['FsDesc'] = $fsDesc;
        $this->queryParameters['FsDesc'] = $fsDesc;

        return $this;
    }

    /**
     * @param string $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->requestParameters['Capacity'] = $capacity;
        $this->queryParameters['Capacity'] = $capacity;

        return $this;
    }
}
