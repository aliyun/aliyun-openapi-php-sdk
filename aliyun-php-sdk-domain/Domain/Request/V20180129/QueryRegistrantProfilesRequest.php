<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of QueryRegistrantProfiles
 *
 * @method string getRegistrantOrganization()
 * @method string getUserClientIp()
 * @method string getRegistrantProfileId()
 * @method string getPageSize()
 * @method string getRegistrantType()
 * @method string getRegistrantProfileType()
 * @method string getRealNameStatus()
 * @method string getLang()
 * @method string getPageNum()
 * @method string getDefaultRegistrantProfile()
 * @method string getEmail()
 * @method string getZhRegistrantOrganization()
 */
class QueryRegistrantProfilesRequest extends \RpcAcsRequest
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
            'QueryRegistrantProfiles'
        );
    }

    /**
     * @param string $registrantOrganization
     *
     * @return $this
     */
    public function setRegistrantOrganization($registrantOrganization)
    {
        $this->requestParameters['RegistrantOrganization'] = $registrantOrganization;
        $this->queryParameters['RegistrantOrganization'] = $registrantOrganization;

        return $this;
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
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function setRegistrantProfileId($registrantProfileId)
    {
        $this->requestParameters['RegistrantProfileId'] = $registrantProfileId;
        $this->queryParameters['RegistrantProfileId'] = $registrantProfileId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->requestParameters['PageSize'] = $pageSize;
        $this->queryParameters['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $registrantType
     *
     * @return $this
     */
    public function setRegistrantType($registrantType)
    {
        $this->requestParameters['RegistrantType'] = $registrantType;
        $this->queryParameters['RegistrantType'] = $registrantType;

        return $this;
    }

    /**
     * @param string $registrantProfileType
     *
     * @return $this
     */
    public function setRegistrantProfileType($registrantProfileType)
    {
        $this->requestParameters['RegistrantProfileType'] = $registrantProfileType;
        $this->queryParameters['RegistrantProfileType'] = $registrantProfileType;

        return $this;
    }

    /**
     * @param string $realNameStatus
     *
     * @return $this
     */
    public function setRealNameStatus($realNameStatus)
    {
        $this->requestParameters['RealNameStatus'] = $realNameStatus;
        $this->queryParameters['RealNameStatus'] = $realNameStatus;

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
     * @param string $pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->requestParameters['PageNum'] = $pageNum;
        $this->queryParameters['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $defaultRegistrantProfile
     *
     * @return $this
     */
    public function setDefaultRegistrantProfile($defaultRegistrantProfile)
    {
        $this->requestParameters['DefaultRegistrantProfile'] = $defaultRegistrantProfile;
        $this->queryParameters['DefaultRegistrantProfile'] = $defaultRegistrantProfile;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->requestParameters['Email'] = $email;
        $this->queryParameters['Email'] = $email;

        return $this;
    }

    /**
     * @param string $zhRegistrantOrganization
     *
     * @return $this
     */
    public function setZhRegistrantOrganization($zhRegistrantOrganization)
    {
        $this->requestParameters['ZhRegistrantOrganization'] = $zhRegistrantOrganization;
        $this->queryParameters['ZhRegistrantOrganization'] = $zhRegistrantOrganization;

        return $this;
    }
}
