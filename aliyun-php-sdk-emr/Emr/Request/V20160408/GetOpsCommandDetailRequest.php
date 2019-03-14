<?php

namespace Emr\Request\V20160408;

/**
 * Request of GetOpsCommandDetail
 *
 * @method string getResourceOwnerId()
 * @method string getOpsCommandName()
 */
class GetOpsCommandDetailRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Emr',
            '2016-04-08',
            'GetOpsCommandDetail',
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
}
