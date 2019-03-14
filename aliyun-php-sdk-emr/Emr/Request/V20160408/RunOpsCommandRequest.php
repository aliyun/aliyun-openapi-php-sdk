<?php

namespace Emr\Request\V20160408;

/**
 * Request of RunOpsCommand
 *
 * @method string getResourceOwnerId()
 * @method string getOpsCommandName()
 * @method string getComment()
 * @method string getCustomParams()
 * @method string getClusterId()
 * @method array getHostIdLists()
 * @method string getDimension()
 */
class RunOpsCommandRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'RunOpsCommand',
            'emr'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $opsCommandName
     *
     * @return $this
     */
    public function setOpsCommandName($opsCommandName)
    {
        $this->requestParameters['OpsCommandName'] = $opsCommandName;
        $this->queryParameters['OpsCommandName'] = $opsCommandName;

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->requestParameters['Comment'] = $comment;
        $this->queryParameters['Comment'] = $comment;

        return $this;
    }

    /**
     * @param string $customParams
     *
     * @return $this
     */
    public function setCustomParams($customParams)
    {
        $this->requestParameters['CustomParams'] = $customParams;
        $this->queryParameters['CustomParams'] = $customParams;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param array $hostIdLists
     *
     * @return $this
     */
    public function setHostIdLists(array $hostIdLists)
    {
        $this->requestParameters['HostIdLists'] = $hostIdLists;
        foreach ($hostIdLists as $i => $iValue) {
            $this->queryParameters['HostIdList.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $dimension
     *
     * @return $this
     */
    public function setDimension($dimension)
    {
        $this->requestParameters['Dimension'] = $dimension;
        $this->queryParameters['Dimension'] = $dimension;

        return $this;
    }
}
