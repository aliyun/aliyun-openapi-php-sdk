<?php

namespace afs\Request\V20180112;

/**
 * Request of UpdateConfigName
 *
 * @method string getSourceIp()
 * @method string getConfigName()
 * @method string getRefExtId()
 * @method string getLang()
 */
class UpdateConfigNameRequest extends \RpcAcsRequest
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
            'afs',
            '2018-01-12',
            'UpdateConfigName',
            'afs'
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
     * @param string $configName
     *
     * @return $this
     */
    public function setConfigName($configName)
    {
        $this->requestParameters['ConfigName'] = $configName;
        $this->queryParameters['ConfigName'] = $configName;

        return $this;
    }

    /**
     * @param string $refExtId
     *
     * @return $this
     */
    public function setRefExtId($refExtId)
    {
        $this->requestParameters['RefExtId'] = $refExtId;
        $this->queryParameters['RefExtId'] = $refExtId;

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
