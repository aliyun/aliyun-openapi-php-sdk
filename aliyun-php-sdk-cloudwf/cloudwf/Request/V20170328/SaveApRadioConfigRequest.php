<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveApRadioConfig
 *
 * @method string getRequireMode()
 * @method string getHtmode()
 * @method string getFrag()
 * @method string getMinrate()
 * @method string getMcastRate()
 * @method string getProbereq()
 * @method string getChannel()
 * @method string getShortgi()
 * @method string getHwmode()
 * @method string getUapsd()
 * @method string getBeaconInt()
 * @method string getMac()
 * @method string getRts()
 * @method string getTxpower()
 * @method string getNoscan()
 * @method string getBcastRate()
 * @method string getDisabled()
 * @method string getInstantlyEffective()
 * @method string getId()
 * @method string getRadioIndex()
 */
class SaveApRadioConfigRequest extends \RpcAcsRequest
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
            'cloudwf',
            '2017-03-28',
            'SaveApRadioConfig',
            'cloudwf'
        );
    }

    /**
     * @param string $requireMode
     *
     * @return $this
     */
    public function setRequireMode($requireMode)
    {
        $this->requestParameters['RequireMode'] = $requireMode;
        $this->queryParameters['RequireMode'] = $requireMode;

        return $this;
    }

    /**
     * @param string $htmode
     *
     * @return $this
     */
    public function setHtmode($htmode)
    {
        $this->requestParameters['Htmode'] = $htmode;
        $this->queryParameters['Htmode'] = $htmode;

        return $this;
    }

    /**
     * @param string $frag
     *
     * @return $this
     */
    public function setFrag($frag)
    {
        $this->requestParameters['Frag'] = $frag;
        $this->queryParameters['Frag'] = $frag;

        return $this;
    }

    /**
     * @param string $minrate
     *
     * @return $this
     */
    public function setMinrate($minrate)
    {
        $this->requestParameters['Minrate'] = $minrate;
        $this->queryParameters['Minrate'] = $minrate;

        return $this;
    }

    /**
     * @param string $mcastRate
     *
     * @return $this
     */
    public function setMcastRate($mcastRate)
    {
        $this->requestParameters['McastRate'] = $mcastRate;
        $this->queryParameters['McastRate'] = $mcastRate;

        return $this;
    }

    /**
     * @param string $probereq
     *
     * @return $this
     */
    public function setProbereq($probereq)
    {
        $this->requestParameters['Probereq'] = $probereq;
        $this->queryParameters['Probereq'] = $probereq;

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
     * @param string $shortgi
     *
     * @return $this
     */
    public function setShortgi($shortgi)
    {
        $this->requestParameters['Shortgi'] = $shortgi;
        $this->queryParameters['Shortgi'] = $shortgi;

        return $this;
    }

    /**
     * @param string $hwmode
     *
     * @return $this
     */
    public function setHwmode($hwmode)
    {
        $this->requestParameters['Hwmode'] = $hwmode;
        $this->queryParameters['Hwmode'] = $hwmode;

        return $this;
    }

    /**
     * @param string $uapsd
     *
     * @return $this
     */
    public function setUapsd($uapsd)
    {
        $this->requestParameters['Uapsd'] = $uapsd;
        $this->queryParameters['Uapsd'] = $uapsd;

        return $this;
    }

    /**
     * @param string $beaconInt
     *
     * @return $this
     */
    public function setBeaconInt($beaconInt)
    {
        $this->requestParameters['BeaconInt'] = $beaconInt;
        $this->queryParameters['BeaconInt'] = $beaconInt;

        return $this;
    }

    /**
     * @param string $mac
     *
     * @return $this
     */
    public function setMac($mac)
    {
        $this->requestParameters['Mac'] = $mac;
        $this->queryParameters['Mac'] = $mac;

        return $this;
    }

    /**
     * @param string $rts
     *
     * @return $this
     */
    public function setRts($rts)
    {
        $this->requestParameters['Rts'] = $rts;
        $this->queryParameters['Rts'] = $rts;

        return $this;
    }

    /**
     * @param string $txpower
     *
     * @return $this
     */
    public function setTxpower($txpower)
    {
        $this->requestParameters['Txpower'] = $txpower;
        $this->queryParameters['Txpower'] = $txpower;

        return $this;
    }

    /**
     * @param string $noscan
     *
     * @return $this
     */
    public function setNoscan($noscan)
    {
        $this->requestParameters['Noscan'] = $noscan;
        $this->queryParameters['Noscan'] = $noscan;

        return $this;
    }

    /**
     * @param string $bcastRate
     *
     * @return $this
     */
    public function setBcastRate($bcastRate)
    {
        $this->requestParameters['BcastRate'] = $bcastRate;
        $this->queryParameters['BcastRate'] = $bcastRate;

        return $this;
    }

    /**
     * @param string $disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->requestParameters['Disabled'] = $disabled;
        $this->queryParameters['Disabled'] = $disabled;

        return $this;
    }

    /**
     * @param string $instantlyEffective
     *
     * @return $this
     */
    public function setInstantlyEffective($instantlyEffective)
    {
        $this->requestParameters['InstantlyEffective'] = $instantlyEffective;
        $this->queryParameters['InstantlyEffective'] = $instantlyEffective;

        return $this;
    }

    /**
     * @param string $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->requestParameters['Id'] = $id;
        $this->queryParameters['Id'] = $id;

        return $this;
    }

    /**
     * @param string $radioIndex
     *
     * @return $this
     */
    public function setRadioIndex($radioIndex)
    {
        $this->requestParameters['RadioIndex'] = $radioIndex;
        $this->queryParameters['RadioIndex'] = $radioIndex;

        return $this;
    }
}
