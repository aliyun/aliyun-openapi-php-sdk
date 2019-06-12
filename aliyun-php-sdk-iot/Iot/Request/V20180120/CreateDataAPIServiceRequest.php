<?php

namespace Iot\Request\V20180120;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateDataAPIService
 *
 * @method array getResponseParams()
 * @method string getOriginSql()
 * @method string getDisplayName()
 * @method string getApiPath()
 * @method array getRequestParams()
 * @method string getFolderId()
 * @method string getTemplateSql()
 * @method string getDesc()
 */
class CreateDataAPIServiceRequest extends \RpcAcsRequest
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
            'Iot',
            '2018-01-20',
            'CreateDataAPIService',
            'iot'
        );
    }

    /**
     * @param array $responseParam
     *
     * @return $this
     */
    public function setResponseParams(array $responseParam)
    {
        $this->requestParameters['ResponseParams'] = $responseParam;
        foreach ($responseParam as $depth1 => $depth1Value) {
            $this->queryParameters['ResponseParam.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->queryParameters['ResponseParam.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->queryParameters['ResponseParam.' . ($depth1 + 1) . '.Required'] = $depth1Value['Required'];
            $this->queryParameters['ResponseParam.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
            $this->queryParameters['ResponseParam.' . ($depth1 + 1) . '.Example'] = $depth1Value['Example'];
        }

        return $this;
    }

    /**
     * @param string $originSql
     *
     * @return $this
     */
    public function setOriginSql($originSql)
    {
        $this->requestParameters['OriginSql'] = $originSql;
        $this->queryParameters['OriginSql'] = $originSql;

        return $this;
    }

    /**
     * @param string $displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->requestParameters['DisplayName'] = $displayName;
        $this->queryParameters['DisplayName'] = $displayName;

        return $this;
    }

    /**
     * @param string $apiPath
     *
     * @return $this
     */
    public function setApiPath($apiPath)
    {
        $this->requestParameters['ApiPath'] = $apiPath;
        $this->queryParameters['ApiPath'] = $apiPath;

        return $this;
    }

    /**
     * @param array $requestParam
     *
     * @return $this
     */
    public function setRequestParams(array $requestParam)
    {
        $this->requestParameters['RequestParams'] = $requestParam;
        foreach ($requestParam as $depth1 => $depth1Value) {
            $this->queryParameters['RequestParam.' . ($depth1 + 1) . '.Name'] = $depth1Value['Name'];
            $this->queryParameters['RequestParam.' . ($depth1 + 1) . '.Type'] = $depth1Value['Type'];
            $this->queryParameters['RequestParam.' . ($depth1 + 1) . '.Required'] = $depth1Value['Required'];
            $this->queryParameters['RequestParam.' . ($depth1 + 1) . '.Desc'] = $depth1Value['Desc'];
            $this->queryParameters['RequestParam.' . ($depth1 + 1) . '.Example'] = $depth1Value['Example'];
        }

        return $this;
    }

    /**
     * @param string $folderId
     *
     * @return $this
     */
    public function setFolderId($folderId)
    {
        $this->requestParameters['FolderId'] = $folderId;
        $this->queryParameters['FolderId'] = $folderId;

        return $this;
    }

    /**
     * @param string $templateSql
     *
     * @return $this
     */
    public function setTemplateSql($templateSql)
    {
        $this->requestParameters['TemplateSql'] = $templateSql;
        $this->queryParameters['TemplateSql'] = $templateSql;

        return $this;
    }

    /**
     * @param string $desc
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->requestParameters['Desc'] = $desc;
        $this->queryParameters['Desc'] = $desc;

        return $this;
    }
}
