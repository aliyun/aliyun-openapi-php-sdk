<?php

namespace Kms\Request\V20160120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ScheduleKeyDeletion
 *
 * @method string getPendingWindowInDays()
 * @method string getKeyId()
 */
class ScheduleKeyDeletionRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

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
            'Kms',
            '2016-01-20',
            'ScheduleKeyDeletion',
            'kms'
        );
    }

    /**
     * @param string $pendingWindowInDays
     *
     * @return $this
     */
    public function setPendingWindowInDays($pendingWindowInDays)
    {
        $this->requestParameters['PendingWindowInDays'] = $pendingWindowInDays;
        $this->queryParameters['PendingWindowInDays'] = $pendingWindowInDays;

        return $this;
    }

    /**
     * @param string $keyId
     *
     * @return $this
     */
    public function setKeyId($keyId)
    {
        $this->requestParameters['KeyId'] = $keyId;
        $this->queryParameters['KeyId'] = $keyId;

        return $this;
    }
}
