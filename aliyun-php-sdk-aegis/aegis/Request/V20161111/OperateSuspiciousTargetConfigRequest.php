<?php

namespace aegis\Request\V20161111;

/**
 * Request of OperateSuspiciousTargetConfig
 *
 * @method string getTargetOperations()
 * @method string getSourceIp()
 * @method string getTargetType()
 * @method string getLang()
 * @method string getType()
 */
class OperateSuspiciousTargetConfigRequest extends \RpcAcsRequest
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
            'OperateSuspiciousTargetConfig',
            'vipaegis'
        );
    }

    /**
     * @param string $targetOperations
     *
     * @return $this
     */
    public function setTargetOperations($targetOperations)
    {
        $this->requestParameters['TargetOperations'] = $targetOperations;
        $this->queryParameters['TargetOperations'] = $targetOperations;

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
     * @param string $targetType
     *
     * @return $this
     */
    public function setTargetType($targetType)
    {
        $this->requestParameters['TargetType'] = $targetType;
        $this->queryParameters['TargetType'] = $targetType;

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
}
