<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryDomainGroupList
 *
 * @method string getUserClientIp()
 * @method string getDomainGroupName()
 * @method string getLang()
 * @method string getShowDeletingGroup()
 */
class QueryDomainGroupListRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-01-29',
            'QueryDomainGroupList'
        );
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $domainGroupName
     *
     * @return $this
     */
    public function setDomainGroupName($domainGroupName)
    {
        $this->requestParameters['DomainGroupName'] = $domainGroupName;
        $this->queryParameters['DomainGroupName'] = $domainGroupName;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }

    /**
     * @param string $showDeletingGroup
     *
     * @return $this
     */
    public function setShowDeletingGroup($showDeletingGroup)
    {
        $this->requestParameters['ShowDeletingGroup'] = $showDeletingGroup;
        $this->queryParameters['ShowDeletingGroup'] = $showDeletingGroup;

        return $this;
    }
}
