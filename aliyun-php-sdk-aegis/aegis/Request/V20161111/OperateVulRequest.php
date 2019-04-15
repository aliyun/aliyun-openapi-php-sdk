<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of OperateVul
 *
 * @method string getReason()
 * @method string getSourceIp()
 * @method string getOperateType()
 * @method string getType()
 * @method string getInfo()
 */
class OperateVulRequest extends \RpcAcsRequest
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
            'OperateVul',
            'vipaegis'
        );
    }

    /**
     * @param string $reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->requestParameters['Reason'] = $reason;
        $this->queryParameters['Reason'] = $reason;

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
     * @param string $operateType
     *
     * @return $this
     */
    public function setOperateType($operateType)
    {
        $this->requestParameters['OperateType'] = $operateType;
        $this->queryParameters['OperateType'] = $operateType;

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
     * @param string $info
     *
     * @return $this
     */
    public function setInfo($info)
    {
        $this->requestParameters['Info'] = $info;
        $this->queryParameters['Info'] = $info;

        return $this;
    }
}
