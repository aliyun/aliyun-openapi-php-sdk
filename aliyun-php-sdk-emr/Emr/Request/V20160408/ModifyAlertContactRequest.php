<?php

namespace Emr\Request\V20160408;

/**
 * Request of ModifyAlertContact
 *
 * @method string getEmailVerificationCode()
 * @method string getResourceOwnerId()
 * @method string getPhoneNumberVerificationCode()
 * @method string getBizId()
 * @method string getName()
 * @method string getPhoneNumber()
 * @method string getEmail()
 */
class ModifyAlertContactRequest extends \RpcAcsRequest
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
            'ModifyAlertContact',
            'emr'
        );
    }

    /**
     * @param string $emailVerificationCode
     *
     * @return $this
     */
    public function setEmailVerificationCode($emailVerificationCode)
    {
        $this->requestParameters['EmailVerificationCode'] = $emailVerificationCode;
        $this->queryParameters['EmailVerificationCode'] = $emailVerificationCode;

        return $this;
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
     * @param string $phoneNumberVerificationCode
     *
     * @return $this
     */
    public function setPhoneNumberVerificationCode($phoneNumberVerificationCode)
    {
        $this->requestParameters['PhoneNumberVerificationCode'] = $phoneNumberVerificationCode;
        $this->queryParameters['PhoneNumberVerificationCode'] = $phoneNumberVerificationCode;

        return $this;
    }

    /**
     * @param string $bizId
     *
     * @return $this
     */
    public function setBizId($bizId)
    {
        $this->requestParameters['BizId'] = $bizId;
        $this->queryParameters['BizId'] = $bizId;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

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
