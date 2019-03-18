<?php

namespace afs\Request\V20180112;

/**
 * Request of SetEarlyWarning
 *
 * @method string getTimeEnd()
 * @method string getWarnOpen()
 * @method string getSourceIp()
 * @method string getChannel()
 * @method string getTitle()
 * @method string getTimeOpen()
 * @method string getTimeBegin()
 * @method string getFrequency()
 */
class SetEarlyWarningRequest extends \RpcAcsRequest
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
            'SetEarlyWarning',
            'afs'
        );
    }

    /**
     * @param string $timeEnd
     *
     * @return $this
     */
    public function setTimeEnd($timeEnd)
    {
        $this->requestParameters['TimeEnd'] = $timeEnd;
        $this->queryParameters['TimeEnd'] = $timeEnd;

        return $this;
    }

    /**
     * @param string $warnOpen
     *
     * @return $this
     */
    public function setWarnOpen($warnOpen)
    {
        $this->requestParameters['WarnOpen'] = $warnOpen;
        $this->queryParameters['WarnOpen'] = $warnOpen;

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
     * @param string $channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->requestParameters['Channel'] = $channel;
        $this->queryParameters['Channel'] = $channel;

        return $this;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->requestParameters['Title'] = $title;
        $this->queryParameters['Title'] = $title;

        return $this;
    }

    /**
     * @param string $timeOpen
     *
     * @return $this
     */
    public function setTimeOpen($timeOpen)
    {
        $this->requestParameters['TimeOpen'] = $timeOpen;
        $this->queryParameters['TimeOpen'] = $timeOpen;

        return $this;
    }

    /**
     * @param string $timeBegin
     *
     * @return $this
     */
    public function setTimeBegin($timeBegin)
    {
        $this->requestParameters['TimeBegin'] = $timeBegin;
        $this->queryParameters['TimeBegin'] = $timeBegin;

        return $this;
    }

    /**
     * @param string $frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $this->requestParameters['Frequency'] = $frequency;
        $this->queryParameters['Frequency'] = $frequency;

        return $this;
    }
}
