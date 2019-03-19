<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveApRadioSsidConfig
 *
 * @method string getNasid()
 * @method string getAuthPort()
 * @method string getHidden()
 * @method string getDynamicVlan()
 * @method string getAuthServer()
 * @method string getSecondaryAcctServer()
 * @method string getSsid()
 * @method string getCir()
 * @method string getMac()
 * @method string getSecondaryAcctSecret()
 * @method string getIeee80211w()
 * @method string getNetwork()
 * @method string getIsolate()
 * @method string getApAssetId()
 * @method string getEncKey()
 * @method string getMulticastForward()
 * @method string getEncryption()
 * @method string getWmm()
 * @method string getAuthCache()
 * @method string getDisabled()
 * @method string getId()
 * @method string getRadioIndex()
 * @method string getIgnoreWeakProbe()
 * @method string getMaxassoc()
 * @method string getAcctServer()
 * @method string getSecondaryAuthServer()
 * @method string getDaeClient()
 * @method string getDaeSecret()
 * @method string getDisassocLowAck()
 * @method string getSecondaryAuthPort()
 * @method string getAcctSecret()
 * @method string getDisassocWeakRssi()
 * @method string getSecondaryAcctPort()
 * @method string getDaePort()
 * @method string getSsidLb()
 * @method string getAcctPort()
 * @method string getMaxInactivity()
 * @method string getVlanDhcp()
 * @method string getInstantlyEffective()
 * @method string getShortPreamble()
 * @method string getAuthSecret()
 * @method string getSecondaryAuthSecret()
 * @method string getOwnip()
 */
class SaveApRadioSsidConfigRequest extends \RpcAcsRequest
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
            'SaveApRadioSsidConfig',
            'cloudwf'
        );
    }

    /**
     * @param string $nasid
     *
     * @return $this
     */
    public function setNasid($nasid)
    {
        $this->requestParameters['Nasid'] = $nasid;
        $this->queryParameters['Nasid'] = $nasid;

        return $this;
    }

    /**
     * @param string $authPort
     *
     * @return $this
     */
    public function setAuthPort($authPort)
    {
        $this->requestParameters['AuthPort'] = $authPort;
        $this->queryParameters['AuthPort'] = $authPort;

        return $this;
    }

    /**
     * @param string $hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->requestParameters['Hidden'] = $hidden;
        $this->queryParameters['Hidden'] = $hidden;

        return $this;
    }

    /**
     * @param string $dynamicVlan
     *
     * @return $this
     */
    public function setDynamicVlan($dynamicVlan)
    {
        $this->requestParameters['DynamicVlan'] = $dynamicVlan;
        $this->queryParameters['DynamicVlan'] = $dynamicVlan;

        return $this;
    }

    /**
     * @param string $authServer
     *
     * @return $this
     */
    public function setAuthServer($authServer)
    {
        $this->requestParameters['AuthServer'] = $authServer;
        $this->queryParameters['AuthServer'] = $authServer;

        return $this;
    }

    /**
     * @param string $secondaryAcctServer
     *
     * @return $this
     */
    public function setSecondaryAcctServer($secondaryAcctServer)
    {
        $this->requestParameters['SecondaryAcctServer'] = $secondaryAcctServer;
        $this->queryParameters['SecondaryAcctServer'] = $secondaryAcctServer;

        return $this;
    }

    /**
     * @param string $ssid
     *
     * @return $this
     */
    public function setSsid($ssid)
    {
        $this->requestParameters['Ssid'] = $ssid;
        $this->queryParameters['Ssid'] = $ssid;

        return $this;
    }

    /**
     * @param string $cir
     *
     * @return $this
     */
    public function setCir($cir)
    {
        $this->requestParameters['Cir'] = $cir;
        $this->queryParameters['Cir'] = $cir;

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
     * @param string $secondaryAcctSecret
     *
     * @return $this
     */
    public function setSecondaryAcctSecret($secondaryAcctSecret)
    {
        $this->requestParameters['SecondaryAcctSecret'] = $secondaryAcctSecret;
        $this->queryParameters['SecondaryAcctSecret'] = $secondaryAcctSecret;

        return $this;
    }

    /**
     * @param string $ieee80211w
     *
     * @return $this
     */
    public function setIeee80211w($ieee80211w)
    {
        $this->requestParameters['Ieee80211w'] = $ieee80211w;
        $this->queryParameters['Ieee80211w'] = $ieee80211w;

        return $this;
    }

    /**
     * @param string $network
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->requestParameters['Network'] = $network;
        $this->queryParameters['Network'] = $network;

        return $this;
    }

    /**
     * @param string $isolate
     *
     * @return $this
     */
    public function setIsolate($isolate)
    {
        $this->requestParameters['Isolate'] = $isolate;
        $this->queryParameters['Isolate'] = $isolate;

        return $this;
    }

    /**
     * @param string $apAssetId
     *
     * @return $this
     */
    public function setApAssetId($apAssetId)
    {
        $this->requestParameters['ApAssetId'] = $apAssetId;
        $this->queryParameters['ApAssetId'] = $apAssetId;

        return $this;
    }

    /**
     * @param string $encKey
     *
     * @return $this
     */
    public function setEncKey($encKey)
    {
        $this->requestParameters['EncKey'] = $encKey;
        $this->queryParameters['EncKey'] = $encKey;

        return $this;
    }

    /**
     * @param string $multicastForward
     *
     * @return $this
     */
    public function setMulticastForward($multicastForward)
    {
        $this->requestParameters['MulticastForward'] = $multicastForward;
        $this->queryParameters['MulticastForward'] = $multicastForward;

        return $this;
    }

    /**
     * @param string $encryption
     *
     * @return $this
     */
    public function setEncryption($encryption)
    {
        $this->requestParameters['Encryption'] = $encryption;
        $this->queryParameters['Encryption'] = $encryption;

        return $this;
    }

    /**
     * @param string $wmm
     *
     * @return $this
     */
    public function setWmm($wmm)
    {
        $this->requestParameters['Wmm'] = $wmm;
        $this->queryParameters['Wmm'] = $wmm;

        return $this;
    }

    /**
     * @param string $authCache
     *
     * @return $this
     */
    public function setAuthCache($authCache)
    {
        $this->requestParameters['AuthCache'] = $authCache;
        $this->queryParameters['AuthCache'] = $authCache;

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

    /**
     * @param string $ignoreWeakProbe
     *
     * @return $this
     */
    public function setIgnoreWeakProbe($ignoreWeakProbe)
    {
        $this->requestParameters['IgnoreWeakProbe'] = $ignoreWeakProbe;
        $this->queryParameters['IgnoreWeakProbe'] = $ignoreWeakProbe;

        return $this;
    }

    /**
     * @param string $maxassoc
     *
     * @return $this
     */
    public function setMaxassoc($maxassoc)
    {
        $this->requestParameters['Maxassoc'] = $maxassoc;
        $this->queryParameters['Maxassoc'] = $maxassoc;

        return $this;
    }

    /**
     * @param string $acctServer
     *
     * @return $this
     */
    public function setAcctServer($acctServer)
    {
        $this->requestParameters['AcctServer'] = $acctServer;
        $this->queryParameters['AcctServer'] = $acctServer;

        return $this;
    }

    /**
     * @param string $secondaryAuthServer
     *
     * @return $this
     */
    public function setSecondaryAuthServer($secondaryAuthServer)
    {
        $this->requestParameters['SecondaryAuthServer'] = $secondaryAuthServer;
        $this->queryParameters['SecondaryAuthServer'] = $secondaryAuthServer;

        return $this;
    }

    /**
     * @param string $daeClient
     *
     * @return $this
     */
    public function setDaeClient($daeClient)
    {
        $this->requestParameters['DaeClient'] = $daeClient;
        $this->queryParameters['DaeClient'] = $daeClient;

        return $this;
    }

    /**
     * @param string $daeSecret
     *
     * @return $this
     */
    public function setDaeSecret($daeSecret)
    {
        $this->requestParameters['DaeSecret'] = $daeSecret;
        $this->queryParameters['DaeSecret'] = $daeSecret;

        return $this;
    }

    /**
     * @param string $disassocLowAck
     *
     * @return $this
     */
    public function setDisassocLowAck($disassocLowAck)
    {
        $this->requestParameters['DisassocLowAck'] = $disassocLowAck;
        $this->queryParameters['DisassocLowAck'] = $disassocLowAck;

        return $this;
    }

    /**
     * @param string $secondaryAuthPort
     *
     * @return $this
     */
    public function setSecondaryAuthPort($secondaryAuthPort)
    {
        $this->requestParameters['SecondaryAuthPort'] = $secondaryAuthPort;
        $this->queryParameters['SecondaryAuthPort'] = $secondaryAuthPort;

        return $this;
    }

    /**
     * @param string $acctSecret
     *
     * @return $this
     */
    public function setAcctSecret($acctSecret)
    {
        $this->requestParameters['AcctSecret'] = $acctSecret;
        $this->queryParameters['AcctSecret'] = $acctSecret;

        return $this;
    }

    /**
     * @param string $disassocWeakRssi
     *
     * @return $this
     */
    public function setDisassocWeakRssi($disassocWeakRssi)
    {
        $this->requestParameters['DisassocWeakRssi'] = $disassocWeakRssi;
        $this->queryParameters['DisassocWeakRssi'] = $disassocWeakRssi;

        return $this;
    }

    /**
     * @param string $secondaryAcctPort
     *
     * @return $this
     */
    public function setSecondaryAcctPort($secondaryAcctPort)
    {
        $this->requestParameters['SecondaryAcctPort'] = $secondaryAcctPort;
        $this->queryParameters['SecondaryAcctPort'] = $secondaryAcctPort;

        return $this;
    }

    /**
     * @param string $daePort
     *
     * @return $this
     */
    public function setDaePort($daePort)
    {
        $this->requestParameters['DaePort'] = $daePort;
        $this->queryParameters['DaePort'] = $daePort;

        return $this;
    }

    /**
     * @param string $ssidLb
     *
     * @return $this
     */
    public function setSsidLb($ssidLb)
    {
        $this->requestParameters['SsidLb'] = $ssidLb;
        $this->queryParameters['SsidLb'] = $ssidLb;

        return $this;
    }

    /**
     * @param string $acctPort
     *
     * @return $this
     */
    public function setAcctPort($acctPort)
    {
        $this->requestParameters['AcctPort'] = $acctPort;
        $this->queryParameters['AcctPort'] = $acctPort;

        return $this;
    }

    /**
     * @param string $maxInactivity
     *
     * @return $this
     */
    public function setMaxInactivity($maxInactivity)
    {
        $this->requestParameters['MaxInactivity'] = $maxInactivity;
        $this->queryParameters['MaxInactivity'] = $maxInactivity;

        return $this;
    }

    /**
     * @param string $vlanDhcp
     *
     * @return $this
     */
    public function setVlanDhcp($vlanDhcp)
    {
        $this->requestParameters['VlanDhcp'] = $vlanDhcp;
        $this->queryParameters['VlanDhcp'] = $vlanDhcp;

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
     * @param string $shortPreamble
     *
     * @return $this
     */
    public function setShortPreamble($shortPreamble)
    {
        $this->requestParameters['ShortPreamble'] = $shortPreamble;
        $this->queryParameters['ShortPreamble'] = $shortPreamble;

        return $this;
    }

    /**
     * @param string $authSecret
     *
     * @return $this
     */
    public function setAuthSecret($authSecret)
    {
        $this->requestParameters['AuthSecret'] = $authSecret;
        $this->queryParameters['AuthSecret'] = $authSecret;

        return $this;
    }

    /**
     * @param string $secondaryAuthSecret
     *
     * @return $this
     */
    public function setSecondaryAuthSecret($secondaryAuthSecret)
    {
        $this->requestParameters['SecondaryAuthSecret'] = $secondaryAuthSecret;
        $this->queryParameters['SecondaryAuthSecret'] = $secondaryAuthSecret;

        return $this;
    }

    /**
     * @param string $ownip
     *
     * @return $this
     */
    public function setOwnip($ownip)
    {
        $this->requestParameters['Ownip'] = $ownip;
        $this->queryParameters['Ownip'] = $ownip;

        return $this;
    }
}
