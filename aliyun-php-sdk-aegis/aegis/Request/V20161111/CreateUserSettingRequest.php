<?php

namespace aegis\Request\V20161111;

/**
 * Request of CreateUserSetting
 *
 * @method string getSourceIp()
 * @method string getAlertLevels()
 * @method string getInvalidWarningKeepDays()
 */
class CreateUserSettingRequest extends \RpcAcsRequest
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
            'CreateUserSetting',
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
     * @param string $alertLevels
     *
     * @return $this
     */
    public function setAlertLevels($alertLevels)
    {
        $this->requestParameters['AlertLevels'] = $alertLevels;
        $this->queryParameters['AlertLevels'] = $alertLevels;

        return $this;
    }

    /**
     * @param string $invalidWarningKeepDays
     *
     * @return $this
     */
    public function setInvalidWarningKeepDays($invalidWarningKeepDays)
    {
        $this->requestParameters['InvalidWarningKeepDays'] = $invalidWarningKeepDays;
        $this->queryParameters['InvalidWarningKeepDays'] = $invalidWarningKeepDays;

        return $this;
    }
}
