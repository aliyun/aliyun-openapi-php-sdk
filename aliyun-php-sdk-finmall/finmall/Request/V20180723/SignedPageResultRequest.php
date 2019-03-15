<?php

namespace finmall\Request\V20180723;

/**
 * Request of SignedPageResult
 *
 * @method string getDownloadUrl()
 * @method string getDigest()
 * @method string getViewUrl()
 * @method string getResultCode()
 * @method string getTransactionId()
 * @method string getResultDesc()
 * @method string getTimestamp()
 */
class SignedPageResultRequest extends \RpcAcsRequest
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
            'SignedPageResult',
            'finmall'
        );
    }

    /**
     * @param string $downloadUrl
     *
     * @return $this
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->requestParameters['DownloadUrl'] = $downloadUrl;
        $this->queryParameters['DownloadUrl'] = $downloadUrl;

        return $this;
    }

    /**
     * @param string $digest
     *
     * @return $this
     */
    public function setDigest($digest)
    {
        $this->requestParameters['Digest'] = $digest;
        $this->queryParameters['Digest'] = $digest;

        return $this;
    }

    /**
     * @param string $viewUrl
     *
     * @return $this
     */
    public function setViewUrl($viewUrl)
    {
        $this->requestParameters['ViewUrl'] = $viewUrl;
        $this->queryParameters['ViewUrl'] = $viewUrl;

        return $this;
    }

    /**
     * @param string $resultCode
     *
     * @return $this
     */
    public function setResultCode($resultCode)
    {
        $this->requestParameters['ResultCode'] = $resultCode;
        $this->queryParameters['ResultCode'] = $resultCode;

        return $this;
    }

    /**
     * @param string $transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->requestParameters['TransactionId'] = $transactionId;
        $this->queryParameters['TransactionId'] = $transactionId;

        return $this;
    }

    /**
     * @param string $resultDesc
     *
     * @return $this
     */
    public function setResultDesc($resultDesc)
    {
        $this->requestParameters['ResultDesc'] = $resultDesc;
        $this->queryParameters['ResultDesc'] = $resultDesc;

        return $this;
    }

    /**
     * @param string $timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->requestParameters['Timestamp'] = $timestamp;
        $this->queryParameters['Timestamp'] = $timestamp;

        return $this;
    }
}
