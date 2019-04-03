<?php

namespace Sas\Request\V20181203;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeSuspEventDetail
 *
 * @method string getSuspiciousEventId()
 * @method string getSourceIp()
 * @method string getFrom()
 * @method string getLang()
 */
class DescribeSuspEventDetailRequest extends \RpcAcsRequest
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
            'Sas',
            '2018-12-03',
            'DescribeSuspEventDetail',
            'sas'
        );
    }

    /**
     * @param string $suspiciousEventId
     *
     * @return $this
     */
    public function setSuspiciousEventId($suspiciousEventId)
    {
        $this->requestParameters['SuspiciousEventId'] = $suspiciousEventId;
        $this->queryParameters['SuspiciousEventId'] = $suspiciousEventId;

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
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->requestParameters['From'] = $from;
        $this->queryParameters['From'] = $from;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
