<?php

namespace Emr\Request\V20160408;

/**
 * Request of CreateUserPassword
 *
 * @method string getResourceOwnerId()
 * @method string getPassword()
 * @method string getClusterId()
 * @method array getUserInfos()
 */
class CreateUserPasswordRequest extends \RpcAcsRequest
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
            'Emr',
            '2016-04-08',
            'CreateUserPassword',
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
     * @param string $password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->requestParameters['Password'] = $password;
        $this->queryParameters['Password'] = $password;

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
     * @param array $userInfos
     *
     * @return $this
     */
    public function setUserInfos(array $userInfos)
    {
        $this->requestParameters['UserInfos'] = $userInfos;
        foreach ($userInfos as $i => $iValue) {
            $this->queryParameters['UserInfo.' . ($i + 1) . '.Type'] = $userInfos[$i]['Type'];
            $this->queryParameters['UserInfo.' . ($i + 1) . '.GroupName'] = $userInfos[$i]['GroupName'];
            $this->queryParameters['UserInfo.' . ($i + 1) . '.UserId'] = $userInfos[$i]['UserId'];
            $this->queryParameters['UserInfo.' . ($i + 1) . '.UserName'] = $userInfos[$i]['UserName'];
        }

        return $this;
    }
}
