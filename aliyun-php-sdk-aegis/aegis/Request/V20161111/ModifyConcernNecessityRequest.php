<?php

namespace aegis\Request\V20161111;

/**
 * Request of ModifyConcernNecessity
 *
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getConcernNecessity()
 */
class ModifyConcernNecessityRequest extends \RpcAcsRequest
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
            'ModifyConcernNecessity',
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
     * @param string $concernNecessity
     *
     * @return $this
     */
    public function setConcernNecessity($concernNecessity)
    {
        $this->requestParameters['ConcernNecessity'] = $concernNecessity;
        $this->queryParameters['ConcernNecessity'] = $concernNecessity;

        return $this;
    }
}
