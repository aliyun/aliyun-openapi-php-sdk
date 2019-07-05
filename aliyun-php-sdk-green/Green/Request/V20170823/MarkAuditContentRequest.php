<?php

namespace Green\Request\V20170823;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of MarkAuditContent
 *
 * @method string getAuditIllegalReasons()
 * @method string getSourceIp()
 * @method string getAuditResult()
 * @method string getIds()
 */
class MarkAuditContentRequest extends \RpcAcsRequest
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
            'Green',
            '2017-08-23',
            'MarkAuditContent',
            'green'
        );
    }

    /**
     * @param string $auditIllegalReasons
     *
     * @return $this
     */
    public function setAuditIllegalReasons($auditIllegalReasons)
    {
        $this->requestParameters['AuditIllegalReasons'] = $auditIllegalReasons;
        $this->queryParameters['AuditIllegalReasons'] = $auditIllegalReasons;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $auditResult
     *
     * @return $this
     */
    public function setAuditResult($auditResult)
    {
        $this->requestParameters['AuditResult'] = $auditResult;
        $this->queryParameters['AuditResult'] = $auditResult;

        return $this;
    }

    /**
     * @param string $ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->requestParameters['Ids'] = $ids;
        $this->queryParameters['Ids'] = $ids;

        return $this;
    }
}
