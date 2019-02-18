<?php

namespace Edas\Request\V20170801;

/**
 * Request of AuthorizeResourceGroup
 *
 * @method string getResourceGroupIds()
 * @method string getTargetUserId()
 */
class AuthorizeResourceGroupRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/account/authorize_res_group';

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
            'Edas',
            '2017-08-01',
            'AuthorizeResourceGroup'
        );
    }

    /**
     * @param string $resourceGroupIds
     *
     * @return $this
     */
    public function setResourceGroupIds($resourceGroupIds)
    {
        $this->requestParameters['ResourceGroupIds'] = $resourceGroupIds;
        $this->queryParameters['ResourceGroupIds'] = $resourceGroupIds;

        return $this;
    }

    /**
     * @param string $targetUserId
     *
     * @return $this
     */
    public function setTargetUserId($targetUserId)
    {
        $this->requestParameters['TargetUserId'] = $targetUserId;
        $this->queryParameters['TargetUserId'] = $targetUserId;

        return $this;
    }
}
