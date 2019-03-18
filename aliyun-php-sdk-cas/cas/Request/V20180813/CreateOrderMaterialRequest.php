<?php

namespace cas\Request\V20180813;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateOrderMaterial
 *
 * @method string getLeaderName()
 * @method string getCity()
 * @method string getCountryCode()
 * @method string getLeaderEmail()
 * @method string getCompanyAddress()
 * @method string getCompanyCode()
 * @method string getPersonEmail()
 * @method string getProvince()
 * @method string getDomainAuthType()
 * @method string getLeaderPhone()
 * @method string getSourceIp()
 * @method string getCsrContent()
 * @method string getLang()
 * @method string getPersonName()
 * @method string getPersonIdCardNumber()
 * @method string getOrderId()
 * @method string getLeaderTitle()
 * @method string getPersonTitle()
 * @method string getPostCode()
 * @method string getCreateCsr()
 * @method string getPersonPhone()
 * @method string getCompanyName()
 * @method string getCompanyPhone()
 * @method string getCompanyType()
 * @method string getDomain()
 * @method string getPersonDepartment()
 */
class CreateOrderMaterialRequest extends \RpcAcsRequest
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
            'cas',
            '2018-08-13',
            'CreateOrderMaterial',
            'cas_esign_fdd'
        );
    }

    /**
     * @param string $leaderName
     *
     * @return $this
     */
    public function setLeaderName($leaderName)
    {
        $this->requestParameters['LeaderName'] = $leaderName;
        $this->queryParameters['LeaderName'] = $leaderName;

        return $this;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->requestParameters['City'] = $city;
        $this->queryParameters['City'] = $city;

        return $this;
    }

    /**
     * @param string $countryCode
     *
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->requestParameters['CountryCode'] = $countryCode;
        $this->queryParameters['CountryCode'] = $countryCode;

        return $this;
    }

    /**
     * @param string $leaderEmail
     *
     * @return $this
     */
    public function setLeaderEmail($leaderEmail)
    {
        $this->requestParameters['LeaderEmail'] = $leaderEmail;
        $this->queryParameters['LeaderEmail'] = $leaderEmail;

        return $this;
    }

    /**
     * @param string $companyAddress
     *
     * @return $this
     */
    public function setCompanyAddress($companyAddress)
    {
        $this->requestParameters['CompanyAddress'] = $companyAddress;
        $this->queryParameters['CompanyAddress'] = $companyAddress;

        return $this;
    }

    /**
     * @param string $companyCode
     *
     * @return $this
     */
    public function setCompanyCode($companyCode)
    {
        $this->requestParameters['CompanyCode'] = $companyCode;
        $this->queryParameters['CompanyCode'] = $companyCode;

        return $this;
    }

    /**
     * @param string $personEmail
     *
     * @return $this
     */
    public function setPersonEmail($personEmail)
    {
        $this->requestParameters['PersonEmail'] = $personEmail;
        $this->queryParameters['PersonEmail'] = $personEmail;

        return $this;
    }

    /**
     * @param string $province
     *
     * @return $this
     */
    public function setProvince($province)
    {
        $this->requestParameters['Province'] = $province;
        $this->queryParameters['Province'] = $province;

        return $this;
    }

    /**
     * @param string $domainAuthType
     *
     * @return $this
     */
    public function setDomainAuthType($domainAuthType)
    {
        $this->requestParameters['DomainAuthType'] = $domainAuthType;
        $this->queryParameters['DomainAuthType'] = $domainAuthType;

        return $this;
    }

    /**
     * @param string $leaderPhone
     *
     * @return $this
     */
    public function setLeaderPhone($leaderPhone)
    {
        $this->requestParameters['LeaderPhone'] = $leaderPhone;
        $this->queryParameters['LeaderPhone'] = $leaderPhone;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $csrContent
     *
     * @return $this
     */
    public function setCsrContent($csrContent)
    {
        $this->requestParameters['CsrContent'] = $csrContent;
        $this->queryParameters['CsrContent'] = $csrContent;

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
     * @param string $personName
     *
     * @return $this
     */
    public function setPersonName($personName)
    {
        $this->requestParameters['PersonName'] = $personName;
        $this->queryParameters['PersonName'] = $personName;

        return $this;
    }

    /**
     * @param string $personIdCardNumber
     *
     * @return $this
     */
    public function setPersonIdCardNumber($personIdCardNumber)
    {
        $this->requestParameters['PersonIdCardNumber'] = $personIdCardNumber;
        $this->queryParameters['PersonIdCardNumber'] = $personIdCardNumber;

        return $this;
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->requestParameters['OrderId'] = $orderId;
        $this->queryParameters['OrderId'] = $orderId;

        return $this;
    }

    /**
     * @param string $leaderTitle
     *
     * @return $this
     */
    public function setLeaderTitle($leaderTitle)
    {
        $this->requestParameters['LeaderTitle'] = $leaderTitle;
        $this->queryParameters['LeaderTitle'] = $leaderTitle;

        return $this;
    }

    /**
     * @param string $personTitle
     *
     * @return $this
     */
    public function setPersonTitle($personTitle)
    {
        $this->requestParameters['PersonTitle'] = $personTitle;
        $this->queryParameters['PersonTitle'] = $personTitle;

        return $this;
    }

    /**
     * @param string $postCode
     *
     * @return $this
     */
    public function setPostCode($postCode)
    {
        $this->requestParameters['PostCode'] = $postCode;
        $this->queryParameters['PostCode'] = $postCode;

        return $this;
    }

    /**
     * @param string $createCsr
     *
     * @return $this
     */
    public function setCreateCsr($createCsr)
    {
        $this->requestParameters['CreateCsr'] = $createCsr;
        $this->queryParameters['CreateCsr'] = $createCsr;

        return $this;
    }

    /**
     * @param string $personPhone
     *
     * @return $this
     */
    public function setPersonPhone($personPhone)
    {
        $this->requestParameters['PersonPhone'] = $personPhone;
        $this->queryParameters['PersonPhone'] = $personPhone;

        return $this;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->requestParameters['CompanyName'] = $companyName;
        $this->queryParameters['CompanyName'] = $companyName;

        return $this;
    }

    /**
     * @param string $companyPhone
     *
     * @return $this
     */
    public function setCompanyPhone($companyPhone)
    {
        $this->requestParameters['CompanyPhone'] = $companyPhone;
        $this->queryParameters['CompanyPhone'] = $companyPhone;

        return $this;
    }

    /**
     * @param string $companyType
     *
     * @return $this
     */
    public function setCompanyType($companyType)
    {
        $this->requestParameters['CompanyType'] = $companyType;
        $this->queryParameters['CompanyType'] = $companyType;

        return $this;
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->requestParameters['Domain'] = $domain;
        $this->queryParameters['Domain'] = $domain;

        return $this;
    }

    /**
     * @param string $personDepartment
     *
     * @return $this
     */
    public function setPersonDepartment($personDepartment)
    {
        $this->requestParameters['PersonDepartment'] = $personDepartment;
        $this->queryParameters['PersonDepartment'] = $personDepartment;

        return $this;
    }
}
