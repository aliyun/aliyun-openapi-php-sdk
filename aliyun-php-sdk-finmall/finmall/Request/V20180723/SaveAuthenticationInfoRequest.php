<?php

namespace finmall\Request\V20180723;

/**
 * Request of SaveAuthenticationInfo
 *
 * @method string getIdCardNumber()
 * @method string getAddress()
 * @method string getEmployeeEmail()
 * @method string getEmployeePhoneNumber()
 * @method string getPhoneNumber()
 * @method string getBusinessLicense()
 * @method string getLegalPersonName()
 * @method string getEnterpriseName()
 * @method string getAuthenticateType()
 * @method string getUserId()
 * @method string getZhimaReturnUrl()
 * @method string getBankCard()
 * @method string getEmail()
 * @method string getEmployeeName()
 * @method string getEmployeeIdCardNumber()
 */
class SaveAuthenticationInfoRequest extends \RpcAcsRequest
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
            'finmall',
            '2018-07-23',
            'SaveAuthenticationInfo',
            'finmall'
        );
    }

    /**
     * @param string $idCardNumber
     *
     * @return $this
     */
    public function setIdCardNumber($idCardNumber)
    {
        $this->requestParameters['IdCardNumber'] = $idCardNumber;
        $this->queryParameters['IdCardNumber'] = $idCardNumber;

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
     * @param string $employeeEmail
     *
     * @return $this
     */
    public function setEmployeeEmail($employeeEmail)
    {
        $this->requestParameters['EmployeeEmail'] = $employeeEmail;
        $this->queryParameters['EmployeeEmail'] = $employeeEmail;

        return $this;
    }

    /**
     * @param string $employeePhoneNumber
     *
     * @return $this
     */
    public function setEmployeePhoneNumber($employeePhoneNumber)
    {
        $this->requestParameters['EmployeePhoneNumber'] = $employeePhoneNumber;
        $this->queryParameters['EmployeePhoneNumber'] = $employeePhoneNumber;

        return $this;
    }

    /**
     * @param string $phoneNumber
     *
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->requestParameters['PhoneNumber'] = $phoneNumber;
        $this->queryParameters['PhoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * @param string $businessLicense
     *
     * @return $this
     */
    public function setBusinessLicense($businessLicense)
    {
        $this->requestParameters['BusinessLicense'] = $businessLicense;
        $this->queryParameters['BusinessLicense'] = $businessLicense;

        return $this;
    }

    /**
     * @param string $legalPersonName
     *
     * @return $this
     */
    public function setLegalPersonName($legalPersonName)
    {
        $this->requestParameters['LegalPersonName'] = $legalPersonName;
        $this->queryParameters['LegalPersonName'] = $legalPersonName;

        return $this;
    }

    /**
     * @param string $enterpriseName
     *
     * @return $this
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->requestParameters['EnterpriseName'] = $enterpriseName;
        $this->queryParameters['EnterpriseName'] = $enterpriseName;

        return $this;
    }

    /**
     * @param string $authenticateType
     *
     * @return $this
     */
    public function setAuthenticateType($authenticateType)
    {
        $this->requestParameters['AuthenticateType'] = $authenticateType;
        $this->queryParameters['AuthenticateType'] = $authenticateType;

        return $this;
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->requestParameters['UserId'] = $userId;
        $this->queryParameters['UserId'] = $userId;

        return $this;
    }

    /**
     * @param string $zhimaReturnUrl
     *
     * @return $this
     */
    public function setZhimaReturnUrl($zhimaReturnUrl)
    {
        $this->requestParameters['ZhimaReturnUrl'] = $zhimaReturnUrl;
        $this->queryParameters['ZhimaReturnUrl'] = $zhimaReturnUrl;

        return $this;
    }

    /**
     * @param string $bankCard
     *
     * @return $this
     */
    public function setBankCard($bankCard)
    {
        $this->requestParameters['BankCard'] = $bankCard;
        $this->queryParameters['BankCard'] = $bankCard;

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
     * @param string $employeeName
     *
     * @return $this
     */
    public function setEmployeeName($employeeName)
    {
        $this->requestParameters['EmployeeName'] = $employeeName;
        $this->queryParameters['EmployeeName'] = $employeeName;

        return $this;
    }

    /**
     * @param string $employeeIdCardNumber
     *
     * @return $this
     */
    public function setEmployeeIdCardNumber($employeeIdCardNumber)
    {
        $this->requestParameters['EmployeeIdCardNumber'] = $employeeIdCardNumber;
        $this->queryParameters['EmployeeIdCardNumber'] = $employeeIdCardNumber;

        return $this;
    }
}
