<?php

namespace Domain\Request\V20180129;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveSingleTaskForSaveArtExtension
 *
 * @method string getReference()
 * @method string getFeatures()
 * @method string getInscriptionsAndMarkings()
 * @method string getSubject()
 * @method string getDomainName()
 * @method string getMaker()
 * @method string getObjectType()
 * @method string getTitle()
 * @method string getLang()
 * @method string getMaterialsAndTechniques()
 * @method string getDateOrPeriod()
 * @method string getDimensions()
 */
class SaveSingleTaskForSaveArtExtensionRequest extends \RpcAcsRequest
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
            'Domain',
            '2018-01-29',
            'SaveSingleTaskForSaveArtExtension'
        );
    }

    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->requestParameters['Reference'] = $reference;
        $this->queryParameters['Reference'] = $reference;

        return $this;
    }

    /**
     * @param string $features
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $this->requestParameters['Features'] = $features;
        $this->queryParameters['Features'] = $features;

        return $this;
    }

    /**
     * @param string $inscriptionsAndMarkings
     *
     * @return $this
     */
    public function setInscriptionsAndMarkings($inscriptionsAndMarkings)
    {
        $this->requestParameters['InscriptionsAndMarkings'] = $inscriptionsAndMarkings;
        $this->queryParameters['InscriptionsAndMarkings'] = $inscriptionsAndMarkings;

        return $this;
    }

    /**
     * @param string $subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->requestParameters['Subject'] = $subject;
        $this->queryParameters['Subject'] = $subject;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        $this->requestParameters['DomainName'] = $domainName;
        $this->queryParameters['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $maker
     *
     * @return $this
     */
    public function setMaker($maker)
    {
        $this->requestParameters['Maker'] = $maker;
        $this->queryParameters['Maker'] = $maker;

        return $this;
    }

    /**
     * @param string $objectType
     *
     * @return $this
     */
    public function setObjectType($objectType)
    {
        $this->requestParameters['ObjectType'] = $objectType;
        $this->queryParameters['ObjectType'] = $objectType;

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
     * @param string $materialsAndTechniques
     *
     * @return $this
     */
    public function setMaterialsAndTechniques($materialsAndTechniques)
    {
        $this->requestParameters['MaterialsAndTechniques'] = $materialsAndTechniques;
        $this->queryParameters['MaterialsAndTechniques'] = $materialsAndTechniques;

        return $this;
    }

    /**
     * @param string $dateOrPeriod
     *
     * @return $this
     */
    public function setDateOrPeriod($dateOrPeriod)
    {
        $this->requestParameters['DateOrPeriod'] = $dateOrPeriod;
        $this->queryParameters['DateOrPeriod'] = $dateOrPeriod;

        return $this;
    }

    /**
     * @param string $dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->requestParameters['Dimensions'] = $dimensions;
        $this->queryParameters['Dimensions'] = $dimensions;

        return $this;
    }
}
