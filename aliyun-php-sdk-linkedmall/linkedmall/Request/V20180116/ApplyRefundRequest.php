<?php

namespace linkedmall\Request\V20180116;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ApplyRefund
 *
 * @method string getGoodsStatus()
 * @method string getSubLmOrderId()
 * @method string getThirdPartyUserId()
 * @method string getBizUid()
 * @method string getApplyRefundFee()
 * @method string getBizClaimType()
 * @method string getApplyReasonTextId()
 * @method string getBizId()
 * @method string getUseAnonymousTbAccount()
 * @method array getLeavePictureLists()
 * @method string getApplyRefundCount()
 * @method string getLeaveMessage()
 */
class ApplyRefundRequest extends \RpcAcsRequest
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
            'linkedmall',
            '2018-01-16',
            'ApplyRefund',
            'linkedmall'
        );
    }

    /**
     * @param string $goodsStatus
     *
     * @return $this
     */
    public function setGoodsStatus($goodsStatus)
    {
        $this->requestParameters['GoodsStatus'] = $goodsStatus;
        $this->queryParameters['GoodsStatus'] = $goodsStatus;

        return $this;
    }

    /**
     * @param string $subLmOrderId
     *
     * @return $this
     */
    public function setSubLmOrderId($subLmOrderId)
    {
        $this->requestParameters['SubLmOrderId'] = $subLmOrderId;
        $this->queryParameters['SubLmOrderId'] = $subLmOrderId;

        return $this;
    }

    /**
     * @param string $thirdPartyUserId
     *
     * @return $this
     */
    public function setThirdPartyUserId($thirdPartyUserId)
    {
        $this->requestParameters['ThirdPartyUserId'] = $thirdPartyUserId;
        $this->queryParameters['ThirdPartyUserId'] = $thirdPartyUserId;

        return $this;
    }

    /**
     * @param string $bizUid
     *
     * @return $this
     */
    public function setBizUid($bizUid)
    {
        $this->requestParameters['BizUid'] = $bizUid;
        $this->queryParameters['BizUid'] = $bizUid;

        return $this;
    }

    /**
     * @param string $applyRefundFee
     *
     * @return $this
     */
    public function setApplyRefundFee($applyRefundFee)
    {
        $this->requestParameters['ApplyRefundFee'] = $applyRefundFee;
        $this->queryParameters['ApplyRefundFee'] = $applyRefundFee;

        return $this;
    }

    /**
     * @param string $bizClaimType
     *
     * @return $this
     */
    public function setBizClaimType($bizClaimType)
    {
        $this->requestParameters['BizClaimType'] = $bizClaimType;
        $this->queryParameters['BizClaimType'] = $bizClaimType;

        return $this;
    }

    /**
     * @param string $applyReasonTextId
     *
     * @return $this
     */
    public function setApplyReasonTextId($applyReasonTextId)
    {
        $this->requestParameters['ApplyReasonTextId'] = $applyReasonTextId;
        $this->queryParameters['ApplyReasonTextId'] = $applyReasonTextId;

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
     * @param string $useAnonymousTbAccount
     *
     * @return $this
     */
    public function setUseAnonymousTbAccount($useAnonymousTbAccount)
    {
        $this->requestParameters['UseAnonymousTbAccount'] = $useAnonymousTbAccount;
        $this->queryParameters['UseAnonymousTbAccount'] = $useAnonymousTbAccount;

        return $this;
    }

    /**
     * @param array $leavePictureList
     *
     * @return $this
     */
    public function setLeavePictureLists(array $leavePictureList)
    {
        $this->requestParameters['LeavePictureLists'] = $leavePictureList;
        foreach ($leavePictureList as $depth1 => $depth1Value) {
            $this->queryParameters['LeavePictureList.' . ($depth1 + 1) . '.Picture'] = $depth1Value['Picture'];
            $this->queryParameters['LeavePictureList.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
        }

        return $this;
    }

    /**
     * @param string $applyRefundCount
     *
     * @return $this
     */
    public function setApplyRefundCount($applyRefundCount)
    {
        $this->requestParameters['ApplyRefundCount'] = $applyRefundCount;
        $this->queryParameters['ApplyRefundCount'] = $applyRefundCount;

        return $this;
    }

    /**
     * @param string $leaveMessage
     *
     * @return $this
     */
    public function setLeaveMessage($leaveMessage)
    {
        $this->requestParameters['LeaveMessage'] = $leaveMessage;
        $this->queryParameters['LeaveMessage'] = $leaveMessage;

        return $this;
    }
}
