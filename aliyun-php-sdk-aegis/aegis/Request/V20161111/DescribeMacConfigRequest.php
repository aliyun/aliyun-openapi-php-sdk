<?php

namespace aegis\Request\V20161111;

/**
 * Request of DescribeMacConfig
 *
 * @method string getResourceOwnerId()
 * @method string getTypes()
 * @method string getSourceIp()
 * @method string getExtern()
 * @method string getType()
 * @method string getConfig()
 * @method string getTarget()
 */
class DescribeMacConfigRequest extends \RpcAcsRequest
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
            'DescribeMacConfig',
            'vipaegis'
        );
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->requestParameters['ResourceOwnerId'] = $resourceOwnerId;
        $this->queryParameters['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->requestParameters['Types'] = $types;
        $this->queryParameters['Types'] = $types;

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
     * @param string $extern
     *
     * @return $this
     */
    public function setExtern($extern)
    {
        $this->requestParameters['Extern'] = $extern;
        $this->queryParameters['Extern'] = $extern;

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
     * @param string $config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->requestParameters['Config'] = $config;
        $this->queryParameters['Config'] = $config;

        return $this;
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->requestParameters['Target'] = $target;
        $this->queryParameters['Target'] = $target;

        return $this;
    }
}
