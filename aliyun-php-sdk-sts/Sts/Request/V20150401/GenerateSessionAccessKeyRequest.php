<?php

namespace Sts\Request\V20150401;

/**
 * Request of GenerateSessionAccessKey
 *
 * @method string getDurationSeconds()
 */
class GenerateSessionAccessKeyRequest extends \RpcAcsRequest
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
            'Sts',
            '2015-04-01',
            'GenerateSessionAccessKey',
            'sts'
        );
    }

    /**
     * @param string $durationSeconds
     *
     * @return $this
     */
    public function setDurationSeconds($durationSeconds)
    {
        $this->requestParameters['DurationSeconds'] = $durationSeconds;
        $this->queryParameters['DurationSeconds'] = $durationSeconds;

        return $this;
    }
}
