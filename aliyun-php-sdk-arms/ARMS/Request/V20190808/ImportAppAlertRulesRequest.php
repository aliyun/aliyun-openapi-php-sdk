<?php

namespace ARMS\Request\V20190808;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of ImportAppAlertRules
 *
 * @method string getIsAutoStart()
 * @method string getContactGroupIds()
 * @method string getPids()
 * @method string getTemplateAlertId()
 */
class ImportAppAlertRulesRequest extends \RpcAcsRequest
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
            'ARMS',
            '2019-08-08',
            'ImportAppAlertRules',
            'arms'
        );
    }

    /**
     * @param string $isAutoStart
     *
     * @return $this
     */
    public function setIsAutoStart($isAutoStart)
    {
        $this->requestParameters['IsAutoStart'] = $isAutoStart;
        $this->queryParameters['IsAutoStart'] = $isAutoStart;

        return $this;
    }

    /**
     * @param string $contactGroupIds
     *
     * @return $this
     */
    public function setContactGroupIds($contactGroupIds)
    {
        $this->requestParameters['ContactGroupIds'] = $contactGroupIds;
        $this->queryParameters['ContactGroupIds'] = $contactGroupIds;

        return $this;
    }

    /**
     * @param string $pids
     *
     * @return $this
     */
    public function setPids($pids)
    {
        $this->requestParameters['Pids'] = $pids;
        $this->queryParameters['Pids'] = $pids;

        return $this;
    }

    /**
     * @param string $templateAlertId
     *
     * @return $this
     */
    public function setTemplateAlertId($templateAlertId)
    {
        $this->requestParameters['TemplateAlertId'] = $templateAlertId;
        $this->queryParameters['TemplateAlertId'] = $templateAlertId;

        return $this;
    }
}
