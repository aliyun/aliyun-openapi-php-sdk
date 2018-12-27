<?php
/**
 * Created by PhpStorm.
 * User: zhangw
 * Date: 2017/12/19
 * Time: 下午6:39
 */

namespace UnitTest\Ft;

class TestRoaApiRequest extends \RoaAcsRequest
{
    public function __construct()
    {
        parent::__construct("Ft", "2016-01-02", "TestRoaApi");
        $this->setUriPattern("/web/cloudapi");
        $this->setMethod("GET");
    }

    /**
     * @var
     */
    private $queryParam;

    /**
     * @var
     */
    private $bodyParam;

    /**
     * @var
     */
    private $headerParam;

    /**
     * @return mixed
     */
    public function getQueryParam()
    {
        return $this->queryParam;
    }

    /**
     * @param $queryParam
     */
    public function setQueryParam($queryParam)
    {
        $this->queryParam                    = $queryParam;
        $this->queryParameters["QueryParam"] = $queryParam;
    }

    /**
     * @return mixed
     */
    public function getBodyParam()
    {
        return $this->bodyParam;
    }

    /**
     * @param $bodyParam
     */
    public function setBodyParam($bodyParam)
    {
        $this->bodyParam                    = $bodyParam;
        $this->queryParameters["BodyParam"] = $bodyParam;
    }

    /**
     * @return mixed
     */
    public function getHeaderParam()
    {
        return $this->headerParam;
    }

    /**
     * @param $headerParam
     */
    public function setHeaderParam($headerParam)
    {
        $this->headerParam                = $headerParam;
        $this->headerParam["HeaderParam"] = $headerParam;
    }
}