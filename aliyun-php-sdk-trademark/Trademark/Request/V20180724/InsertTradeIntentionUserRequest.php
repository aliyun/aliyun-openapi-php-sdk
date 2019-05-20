<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of InsertTradeIntentionUser
 *
 * @method string getMobile()
 * @method string getPartnerCode()
 * @method string getClassification()
 * @method string getType()
 * @method string getRegisterNumber()
 * @method string getVcode()
 * @method string getUserName()
 */
class InsertTradeIntentionUserRequest extends \RpcAcsRequest
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
            'Trademark',
            '2018-07-24',
            'InsertTradeIntentionUser',
            'trademark'
        );
    }

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->requestParameters['Mobile'] = $mobile;
        $this->queryParameters['Mobile'] = $mobile;

        return $this;
    }

    /**
     * @param string $partnerCode
     *
     * @return $this
     */
    public function setPartnerCode($partnerCode)
    {
        $this->requestParameters['PartnerCode'] = $partnerCode;
        $this->queryParameters['PartnerCode'] = $partnerCode;

        return $this;
    }

    /**
     * @param string $classification
     *
     * @return $this
     */
    public function setClassification($classification)
    {
        $this->requestParameters['Classification'] = $classification;
        $this->queryParameters['Classification'] = $classification;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->requestParameters['Type'] = $type;
        $this->queryParameters['Type'] = $type;

        return $this;
    }

    /**
     * @param string $registerNumber
     *
     * @return $this
     */
    public function setRegisterNumber($registerNumber)
    {
        $this->requestParameters['RegisterNumber'] = $registerNumber;
        $this->queryParameters['RegisterNumber'] = $registerNumber;

        return $this;
    }

    /**
     * @param string $vcode
     *
     * @return $this
     */
    public function setVcode($vcode)
    {
        $this->requestParameters['Vcode'] = $vcode;
        $this->queryParameters['Vcode'] = $vcode;

        return $this;
    }

    /**
     * @param string $userName
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->requestParameters['UserName'] = $userName;
        $this->queryParameters['UserName'] = $userName;

        return $this;
    }
}
