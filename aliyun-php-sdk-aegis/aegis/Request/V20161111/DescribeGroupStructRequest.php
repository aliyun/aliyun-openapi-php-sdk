<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of DescribeGroupStruct
 *
 * @method string getSourceIp()
 * @method string gettagIdList()
 * @method string getremark()
 */
class DescribeGroupStructRequest extends \RpcAcsRequest
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
            'aegis',
            '2016-11-11',
            'DescribeGroupStruct',
            'vipaegis'
        );
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
     * @param string $tagIdList
     *
     * @return $this
     */
    public function settagIdList($tagIdList)
    {
        $this->requestParameters['tagIdList'] = $tagIdList;
        $this->queryParameters['tagIdList'] = $tagIdList;

        return $this;
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function setremark($remark)
    {
        $this->requestParameters['remark'] = $remark;
        $this->queryParameters['remark'] = $remark;

        return $this;
    }
}
