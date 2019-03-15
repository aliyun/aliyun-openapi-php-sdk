<?php

namespace pvtz\Request\V20180101;

/**
 * Request of AddZoneRecord
 *
 * @method string getRr()
 * @method string getUserClientIp()
 * @method string getZoneId()
 * @method string getLang()
 * @method string getType()
 * @method string getPriority()
 * @method string getTtl()
 * @method string getValue()
 */
class AddZoneRecordRequest extends \RpcAcsRequest
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
            'pvtz',
            '2018-01-01',
            'AddZoneRecord',
            'pvtz'
        );
    }

    /**
     * @param string $rr
     *
     * @return $this
     */
    public function setRr($rr)
    {
        $this->requestParameters['Rr'] = $rr;
        $this->queryParameters['Rr'] = $rr;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $zoneId
     *
     * @return $this
     */
    public function setZoneId($zoneId)
    {
        $this->requestParameters['ZoneId'] = $zoneId;
        $this->queryParameters['ZoneId'] = $zoneId;

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

    /**
     * @param string $priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->requestParameters['Priority'] = $priority;
        $this->queryParameters['Priority'] = $priority;

        return $this;
    }

    /**
     * @param string $ttl
     *
     * @return $this
     */
    public function setTtl($ttl)
    {
        $this->requestParameters['Ttl'] = $ttl;
        $this->queryParameters['Ttl'] = $ttl;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->requestParameters['Value'] = $value;
        $this->queryParameters['Value'] = $value;

        return $this;
    }
}
