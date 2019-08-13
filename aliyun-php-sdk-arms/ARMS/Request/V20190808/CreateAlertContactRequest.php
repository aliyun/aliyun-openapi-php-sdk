<?php

namespace ARMS\Request\V20190808;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateAlertContact
 *
 * @method string getContactName()
 * @method string getPhoneNum()
 * @method string getDingRobotWebhookUrl()
 * @method string getEmail()
 * @method string getSystemNoc()
 */
class CreateAlertContactRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-08-08',
            'CreateAlertContact',
            'arms'
        );
    }

    /**
     * @param string $contactName
     *
     * @return $this
     */
    public function setContactName($contactName)
    {
        $this->requestParameters['ContactName'] = $contactName;
        $this->queryParameters['ContactName'] = $contactName;

        return $this;
    }

    /**
     * @param string $phoneNum
     *
     * @return $this
     */
    public function setPhoneNum($phoneNum)
    {
        $this->requestParameters['PhoneNum'] = $phoneNum;
        $this->queryParameters['PhoneNum'] = $phoneNum;

        return $this;
    }

    /**
     * @param string $dingRobotWebhookUrl
     *
     * @return $this
     */
    public function setDingRobotWebhookUrl($dingRobotWebhookUrl)
    {
        $this->requestParameters['DingRobotWebhookUrl'] = $dingRobotWebhookUrl;
        $this->queryParameters['DingRobotWebhookUrl'] = $dingRobotWebhookUrl;

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
     * @param string $systemNoc
     *
     * @return $this
     */
    public function setSystemNoc($systemNoc)
    {
        $this->requestParameters['SystemNoc'] = $systemNoc;
        $this->queryParameters['SystemNoc'] = $systemNoc;

        return $this;
    }
}
