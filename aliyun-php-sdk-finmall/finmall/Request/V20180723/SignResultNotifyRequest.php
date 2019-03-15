<?php

namespace finmall\Request\V20180723;

/**
 * Request of SignResultNotify
 *
 * @method string getDocId()
 * @method string getDocContent()
 * @method string getSign()
 * @method string getResultCode()
 * @method string getTime()
 * @method string getTransactionId()
 * @method string getResultDesc()
 */
class SignResultNotifyRequest extends \RpcAcsRequest
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
            'SignResultNotify',
            'finmall'
        );
    }

    /**
     * @param string $docId
     *
     * @return $this
     */
    public function setDocId($docId)
    {
        $this->requestParameters['DocId'] = $docId;
        $this->queryParameters['DocId'] = $docId;

        return $this;
    }

    /**
     * @param string $docContent
     *
     * @return $this
     */
    public function setDocContent($docContent)
    {
        $this->requestParameters['DocContent'] = $docContent;
        $this->queryParameters['DocContent'] = $docContent;

        return $this;
    }

    /**
     * @param string $sign
     *
     * @return $this
     */
    public function setSign($sign)
    {
        $this->requestParameters['Sign'] = $sign;
        $this->queryParameters['Sign'] = $sign;

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
     * @param string $time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->requestParameters['Time'] = $time;
        $this->queryParameters['Time'] = $time;

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
}
