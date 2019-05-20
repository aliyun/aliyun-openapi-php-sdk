<?php

namespace Trademark\Request\V20180724;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateTrademarkOrder
 *
 * @method string getTmName()
 * @method string getRealUserName()
 * @method string getOrderData()
 * @method string getChannel()
 * @method string getPartnerCode()
 * @method string getPhoneNum()
 * @method string getType()
 * @method string getMaterialId()
 * @method string getUserId()
 * @method string getTmComment()
 * @method string getRegisterName()
 * @method string getTmNameType()
 * @method string getTmIcon()
 * @method string getUid()
 * @method string getIsBlackIcon()
 * @method string getRenewInfoId()
 * @method string getBizId()
 * @method string getRootCode()
 * @method string getLoaOssKey()
 * @method string getRegisterNumber()
 */
class CreateTrademarkOrderRequest extends \RpcAcsRequest
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
            'CreateTrademarkOrder',
            'trademark'
        );
    }

    /**
     * @param string $tmName
     *
     * @return $this
     */
    public function setTmName($tmName)
    {
        $this->requestParameters['TmName'] = $tmName;
        $this->queryParameters['TmName'] = $tmName;

        return $this;
    }

    /**
     * @param string $realUserName
     *
     * @return $this
     */
    public function setRealUserName($realUserName)
    {
        $this->requestParameters['RealUserName'] = $realUserName;
        $this->queryParameters['RealUserName'] = $realUserName;

        return $this;
    }

    /**
     * @param string $orderData
     *
     * @return $this
     */
    public function setOrderData($orderData)
    {
        $this->requestParameters['OrderData'] = $orderData;
        $this->queryParameters['OrderData'] = $orderData;

        return $this;
    }

    /**
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->requestParameters['Channel'] = $channel;
        $this->queryParameters['Channel'] = $channel;

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
     * @param string $materialId
     *
     * @return $this
     */
    public function setMaterialId($materialId)
    {
        $this->requestParameters['MaterialId'] = $materialId;
        $this->queryParameters['MaterialId'] = $materialId;

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
     * @param string $tmComment
     *
     * @return $this
     */
    public function setTmComment($tmComment)
    {
        $this->requestParameters['TmComment'] = $tmComment;
        $this->queryParameters['TmComment'] = $tmComment;

        return $this;
    }

    /**
     * @param string $registerName
     *
     * @return $this
     */
    public function setRegisterName($registerName)
    {
        $this->requestParameters['RegisterName'] = $registerName;
        $this->queryParameters['RegisterName'] = $registerName;

        return $this;
    }

    /**
     * @param string $tmNameType
     *
     * @return $this
     */
    public function setTmNameType($tmNameType)
    {
        $this->requestParameters['TmNameType'] = $tmNameType;
        $this->queryParameters['TmNameType'] = $tmNameType;

        return $this;
    }

    /**
     * @param string $tmIcon
     *
     * @return $this
     */
    public function setTmIcon($tmIcon)
    {
        $this->requestParameters['TmIcon'] = $tmIcon;
        $this->queryParameters['TmIcon'] = $tmIcon;

        return $this;
    }

    /**
     * @param string $uid
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->requestParameters['Uid'] = $uid;
        $this->queryParameters['Uid'] = $uid;

        return $this;
    }

    /**
     * @param string $isBlackIcon
     *
     * @return $this
     */
    public function setIsBlackIcon($isBlackIcon)
    {
        $this->requestParameters['IsBlackIcon'] = $isBlackIcon;
        $this->queryParameters['IsBlackIcon'] = $isBlackIcon;

        return $this;
    }

    /**
     * @param string $renewInfoId
     *
     * @return $this
     */
    public function setRenewInfoId($renewInfoId)
    {
        $this->requestParameters['RenewInfoId'] = $renewInfoId;
        $this->queryParameters['RenewInfoId'] = $renewInfoId;

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
     * @param string $rootCode
     *
     * @return $this
     */
    public function setRootCode($rootCode)
    {
        $this->requestParameters['RootCode'] = $rootCode;
        $this->queryParameters['RootCode'] = $rootCode;

        return $this;
    }

    /**
     * @param string $loaOssKey
     *
     * @return $this
     */
    public function setLoaOssKey($loaOssKey)
    {
        $this->requestParameters['LoaOssKey'] = $loaOssKey;
        $this->queryParameters['LoaOssKey'] = $loaOssKey;

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
}
