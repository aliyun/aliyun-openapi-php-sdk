<?php

namespace Dysmsapi\Request\V20170525;

/**
 * Class SendSmsRequest
 *
 * @author    Alibaba Cloud SDK <sdk-team@alibabacloud.com>
 * @copyright 2019 Alibaba Group
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 *
 * @link      https://github.com/aliyun/aliyun-openapi-php-sdk
 *
 * @method string getSmsUpExtendCode()
 * @method string getResourceOwnerId()
 * @method string getSignName()
 * @method string getResourceOwnerAccount()
 * @method string getPhoneNumbers()
 * @method string getOutId()
 * @method string getOwnerId()
 * @method string getTemplateCode()
 * @method string getTemplateParam()
 */
class SendSmsRequest extends \RpcAcsRequest
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
            'SendSms',
            'dysmsapi',
            'openAPI'
        );
    }

    /**
     * @param string $smsUpExtendCode
     *
     * @return $this
     */
    public function setSmsUpExtendCode($smsUpExtendCode)
    {
        $this->requestParameters['SmsUpExtendCode'] = $smsUpExtendCode;
        $this->queryParameters['SmsUpExtendCode'] = $smsUpExtendCode;
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
     * @param string $signName
     *
     * @return $this
     */
    public function setSignName($signName)
    {
        $this->requestParameters['SignName'] = $signName;
        $this->queryParameters['SignName'] = $signName;
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
     * @param string $phoneNumbers
     *
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->requestParameters['PhoneNumbers'] = $phoneNumbers;
        $this->queryParameters['PhoneNumbers'] = $phoneNumbers;
        return $this;
    }

    /**
     * @param string $outId
     *
     * @return $this
     */
    public function setOutId($outId)
    {
        $this->requestParameters['OutId'] = $outId;
        $this->queryParameters['OutId'] = $outId;
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
     * @param string $templateParam
     *
     * @return $this
     */
    public function setTemplateParam($templateParam)
    {
        $this->requestParameters['TemplateParam'] = $templateParam;
        $this->queryParameters['TemplateParam'] = $templateParam;
        return $this;
    }

}
