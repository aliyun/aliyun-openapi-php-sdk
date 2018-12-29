<?php

namespace Dysmsapi\Request\V20170525;

/**
 * Class SendBatchSmsRequest
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2019 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/aliyun-openapi-php-sdk
 *
 * @method string getTemplateParamJson()
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getSmsUpExtendCodeJson()
 * @method string getOwnerId()
 * @method string getSignNameJson()
 * @method string getTemplateCode()
 * @method string getPhoneNumberJson()
 */
class SendBatchSmsRequest extends \RpcAcsRequest
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
            'Dysmsapi',
            '2017-05-25',
            'SendBatchSms',
            'dysmsapi',
            'openAPI'
        );
    }

    /**
     * @param string $templateParamJson
     *
     * @return $this
     */
    public function setTemplateParamJson($templateParamJson)
    {
        $this->requestParameters['TemplateParamJson'] = $templateParamJson;
        $this->queryParameters['TemplateParamJson'] = $templateParamJson;
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
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        return $this;
    }

    /**
     * @param string $smsUpExtendCodeJson
     *
     * @return $this
     */
    public function setSmsUpExtendCodeJson($smsUpExtendCodeJson)
    {
        $this->requestParameters['SmsUpExtendCodeJson'] = $smsUpExtendCodeJson;
        $this->queryParameters['SmsUpExtendCodeJson'] = $smsUpExtendCodeJson;
        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;
        return $this;
    }

    /**
     * @param string $signNameJson
     *
     * @return $this
     */
    public function setSignNameJson($signNameJson)
    {
        $this->requestParameters['SignNameJson'] = $signNameJson;
        $this->queryParameters['SignNameJson'] = $signNameJson;
        return $this;
    }

    /**
     * @param string $templateCode
     *
     * @return $this
     */
    public function setTemplateCode($templateCode)
    {
        $this->requestParameters['TemplateCode'] = $templateCode;
        $this->queryParameters['TemplateCode'] = $templateCode;
        return $this;
    }

    /**
     * @param string $phoneNumberJson
     *
     * @return $this
     */
    public function setPhoneNumberJson($phoneNumberJson)
    {
        $this->requestParameters['PhoneNumberJson'] = $phoneNumberJson;
        $this->queryParameters['PhoneNumberJson'] = $phoneNumberJson;
        return $this;
    }

}
