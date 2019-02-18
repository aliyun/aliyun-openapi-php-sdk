<?php

namespace Edas\Request\V20170801;

/**
 * Request of InsertClusterMember
 *
 * @method string getpassword()
 * @method string getinstanceIds()
 * @method string getclusterId()
 */
class InsertClusterMemberRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/resource/cluster_member';

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
            'InsertClusterMember'
        );
    }

    /**
     * @param string $password
     *
     * @return $this
     */
    public function setpassword($password)
    {
        $this->requestParameters['password'] = $password;
        $this->queryParameters['password'] = $password;

        return $this;
    }

    /**
     * @param string $instanceIds
     *
     * @return $this
     */
    public function setinstanceIds($instanceIds)
    {
        $this->requestParameters['instanceIds'] = $instanceIds;
        $this->queryParameters['instanceIds'] = $instanceIds;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setclusterId($clusterId)
    {
        $this->requestParameters['clusterId'] = $clusterId;
        $this->queryParameters['clusterId'] = $clusterId;

        return $this;
    }
}
