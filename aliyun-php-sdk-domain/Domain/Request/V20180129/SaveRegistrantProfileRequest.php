<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveRegistrantProfile
 *
 * @method string getCountry()
 * @method string getAddress()
 * @method string getTelArea()
 * @method string getCity()
 * @method string getRegistrantProfileId()
 * @method string getZhAddress()
 * @method string getRegistrantType()
 * @method string getRegistrantProfileType()
 * @method string getTelephone()
 * @method string getDefaultRegistrantProfile()
 * @method string getZhCity()
 * @method string getZhProvince()
 * @method string getRegistrantOrganization()
 * @method string getTelExt()
 * @method string getProvince()
 * @method string getZhRegistrantName()
 * @method string getPostalCode()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getEmail()
 * @method string getRegistrantName()
 * @method string getZhRegistrantOrganization()
 */
class SaveRegistrantProfileRequest extends \RpcAcsRequest
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
            'SaveRegistrantProfile'
        );
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->requestParameters['Country'] = $country;
        $this->queryParameters['Country'] = $country;

        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->requestParameters['Address'] = $address;
        $this->queryParameters['Address'] = $address;

        return $this;
    }

    /**
     * @param string $telArea
     *
     * @return $this
     */
    public function setTelArea($telArea)
    {
        $this->requestParameters['TelArea'] = $telArea;
        $this->queryParameters['TelArea'] = $telArea;

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
     * @param string $zhAddress
     *
     * @return $this
     */
    public function setZhAddress($zhAddress)
    {
        $this->requestParameters['ZhAddress'] = $zhAddress;
        $this->queryParameters['ZhAddress'] = $zhAddress;

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
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->requestParameters['Telephone'] = $telephone;
        $this->queryParameters['Telephone'] = $telephone;

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
     * @param string $zhCity
     *
     * @return $this
     */
    public function setZhCity($zhCity)
    {
        $this->requestParameters['ZhCity'] = $zhCity;
        $this->queryParameters['ZhCity'] = $zhCity;

        return $this;
    }

    /**
     * @param string $zhProvince
     *
     * @return $this
     */
    public function setZhProvince($zhProvince)
    {
        $this->requestParameters['ZhProvince'] = $zhProvince;
        $this->queryParameters['ZhProvince'] = $zhProvince;

        return $this;
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
     * @param string $telExt
     *
     * @return $this
     */
    public function setTelExt($telExt)
    {
        $this->requestParameters['TelExt'] = $telExt;
        $this->queryParameters['TelExt'] = $telExt;

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
     * @param string $zhRegistrantName
     *
     * @return $this
     */
    public function setZhRegistrantName($zhRegistrantName)
    {
        $this->requestParameters['ZhRegistrantName'] = $zhRegistrantName;
        $this->queryParameters['ZhRegistrantName'] = $zhRegistrantName;

        return $this;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->requestParameters['PostalCode'] = $postalCode;
        $this->queryParameters['PostalCode'] = $postalCode;

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
     * @param string $registrantName
     *
     * @return $this
     */
    public function setRegistrantName($registrantName)
    {
        $this->requestParameters['RegistrantName'] = $registrantName;
        $this->queryParameters['RegistrantName'] = $registrantName;

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
