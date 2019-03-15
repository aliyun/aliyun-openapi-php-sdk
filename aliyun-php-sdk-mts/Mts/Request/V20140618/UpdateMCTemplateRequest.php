<?php

namespace Mts\Request\V20140618;

/**
 * Request of UpdateMCTemplate
 *
 * @method string getPolitics()
 * @method string getResourceOwnerId()
 * @method string getContraband()
 * @method string getAd()
 * @method string getAbuse()
 * @method string getResourceOwnerAccount()
 * @method string getQrcode()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getTemplateId()
 * @method string getPorn()
 * @method string getTerrorism()
 * @method string getName()
 * @method string getLogo()
 * @method string getspam()
 * @method string getLive()
 */
class UpdateMCTemplateRequest extends \RpcAcsRequest
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
            'Mts',
            '2014-06-18',
            'UpdateMCTemplate',
            'mts'
        );
    }

    /**
     * @param string $politics
     *
     * @return $this
     */
    public function setPolitics($politics)
    {
        $this->requestParameters['Politics'] = $politics;
        $this->queryParameters['Politics'] = $politics;

        return $this;
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
     * @param string $contraband
     *
     * @return $this
     */
    public function setContraband($contraband)
    {
        $this->requestParameters['Contraband'] = $contraband;
        $this->queryParameters['Contraband'] = $contraband;

        return $this;
    }

    /**
     * @param string $ad
     *
     * @return $this
     */
    public function setAd($ad)
    {
        $this->requestParameters['Ad'] = $ad;
        $this->queryParameters['Ad'] = $ad;

        return $this;
    }

    /**
     * @param string $abuse
     *
     * @return $this
     */
    public function setAbuse($abuse)
    {
        $this->requestParameters['Abuse'] = $abuse;
        $this->queryParameters['Abuse'] = $abuse;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->requestParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->queryParameters['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $qrcode
     *
     * @return $this
     */
    public function setQrcode($qrcode)
    {
        $this->requestParameters['Qrcode'] = $qrcode;
        $this->queryParameters['Qrcode'] = $qrcode;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        $this->requestParameters['OwnerAccount'] = $ownerAccount;
        $this->queryParameters['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        $this->requestParameters['OwnerId'] = $ownerId;
        $this->queryParameters['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $templateId
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->requestParameters['TemplateId'] = $templateId;
        $this->queryParameters['TemplateId'] = $templateId;

        return $this;
    }

    /**
     * @param string $porn
     *
     * @return $this
     */
    public function setPorn($porn)
    {
        $this->requestParameters['Porn'] = $porn;
        $this->queryParameters['Porn'] = $porn;

        return $this;
    }

    /**
     * @param string $terrorism
     *
     * @return $this
     */
    public function setTerrorism($terrorism)
    {
        $this->requestParameters['Terrorism'] = $terrorism;
        $this->queryParameters['Terrorism'] = $terrorism;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->requestParameters['Name'] = $name;
        $this->queryParameters['Name'] = $name;

        return $this;
    }

    /**
     * @param string $logo
     *
     * @return $this
     */
    public function setLogo($logo)
    {
        $this->requestParameters['Logo'] = $logo;
        $this->queryParameters['Logo'] = $logo;

        return $this;
    }

    /**
     * @param string $spam
     *
     * @return $this
     */
    public function setspam($spam)
    {
        $this->requestParameters['spam'] = $spam;
        $this->queryParameters['spam'] = $spam;

        return $this;
    }

    /**
     * @param string $live
     *
     * @return $this
     */
    public function setLive($live)
    {
        $this->requestParameters['Live'] = $live;
        $this->queryParameters['Live'] = $live;

        return $this;
    }
}
