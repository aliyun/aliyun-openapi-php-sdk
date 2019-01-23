<?php

namespace CloudAPI\Request\V20160714;

/**
 * Request of CreateIntranetDomain
 *
 * @method string getDeleteInternetDomain()
 * @method string getSecurityToken()
 * @method string getGroupId()
 */
class CreateIntranetDomainRequest extends \RpcAcsRequest
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
            'CloudAPI',
            '2016-07-14',
            'CreateIntranetDomain',
            'apigateway'
        );
    }

    /**
     * @param string $deleteInternetDomain
     *
     * @return $this
     */
    public function setDeleteInternetDomain($deleteInternetDomain)
    {
        $this->requestParameters['DeleteInternetDomain'] = $deleteInternetDomain;
        $this->queryParameters['DeleteInternetDomain'] = $deleteInternetDomain;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function setSecurityToken($securityToken)
    {
        $this->requestParameters['SecurityToken'] = $securityToken;
        $this->queryParameters['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->requestParameters['GroupId'] = $groupId;
        $this->queryParameters['GroupId'] = $groupId;

        return $this;
    }
}
