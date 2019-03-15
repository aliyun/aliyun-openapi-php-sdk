<?php

namespace finmall\Request\V20180723;

/**
 * Request of UpdateEnterpriseCustomInfo
 *
 * @method string getIdCardNumber()
 * @method string getAddress()
 * @method string getIdCardFrontPage()
 * @method string getPhoneNumber()
 * @method string getBusinessLicense()
 * @method string getIdCardBackPage()
 * @method string getLegalPersonName()
 * @method string getEnterpriseName()
 * @method string getUserId()
 * @method string getLoanSubject()
 * @method string getZhimaReturnUrl()
 * @method string getSmsIvToken()
 * @method string getBankCard()
 * @method string getEmail()
 */
class UpdateEnterpriseCustomInfoRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'UpdateEnterpriseCustomInfo',
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
     * @param string $idCardFrontPage
     *
     * @return $this
     */
    public function setIdCardFrontPage($idCardFrontPage)
    {
        $this->requestParameters['IdCardFrontPage'] = $idCardFrontPage;
        $this->queryParameters['IdCardFrontPage'] = $idCardFrontPage;

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
     * @param string $idCardBackPage
     *
     * @return $this
     */
    public function setIdCardBackPage($idCardBackPage)
    {
        $this->requestParameters['IdCardBackPage'] = $idCardBackPage;
        $this->queryParameters['IdCardBackPage'] = $idCardBackPage;

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
     * @param string $loanSubject
     *
     * @return $this
     */
    public function setLoanSubject($loanSubject)
    {
        $this->requestParameters['LoanSubject'] = $loanSubject;
        $this->queryParameters['LoanSubject'] = $loanSubject;

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
     * @param string $smsIvToken
     *
     * @return $this
     */
    public function setSmsIvToken($smsIvToken)
    {
        $this->requestParameters['SmsIvToken'] = $smsIvToken;
        $this->queryParameters['SmsIvToken'] = $smsIvToken;

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
}
