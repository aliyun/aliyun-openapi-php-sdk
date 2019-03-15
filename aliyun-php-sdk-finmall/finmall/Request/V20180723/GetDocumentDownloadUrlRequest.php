<?php

namespace finmall\Request\V20180723;

/**
 * Request of GetDocumentDownloadUrl
 *
 * @method string getBizType()
 * @method string getBizId()
 * @method string getDocumentId()
 * @method string getUserId()
 */
class GetDocumentDownloadUrlRequest extends \RpcAcsRequest
{

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'finmall',
            '2018-07-23',
            'GetDocumentDownloadUrl',
            'finmall'
        );
    }

    /**
     * @param string $bizType
     *
     * @return $this
     */
    public function setBizType($bizType)
    {
        $this->requestParameters['BizType'] = $bizType;
        $this->queryParameters['BizType'] = $bizType;

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
     * @param string $documentId
     *
     * @return $this
     */
    public function setDocumentId($documentId)
    {
        $this->requestParameters['DocumentId'] = $documentId;
        $this->queryParameters['DocumentId'] = $documentId;

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
}
