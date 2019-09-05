<?php

namespace foas\Request\V20181111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of CreateCellClusterOrder
 *
 * @method string getperiod()
 * @method string getslaveNum()
 * @method string getslaveSpec()
 * @method string getregion()
 * @method string getmasterNum()
 * @method string getmasterSpec()
 * @method string getpayModel()
 */
class CreateCellClusterOrderRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $uriPattern = '/api/v2/realtime-compute/cell/buy';

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
            'foas',
            '2018-11-11',
            'CreateCellClusterOrder',
            'foas'
        );
    }

    /**
     * @param string $period
     *
     * @return $this
     */
    public function setperiod($period)
    {
        $this->requestParameters['period'] = $period;
        $this->queryParameters['period'] = $period;

        return $this;
    }

    /**
     * @param string $slaveNum
     *
     * @return $this
     */
    public function setslaveNum($slaveNum)
    {
        $this->requestParameters['slaveNum'] = $slaveNum;
        $this->queryParameters['slaveNum'] = $slaveNum;

        return $this;
    }

    /**
     * @param string $slaveSpec
     *
     * @return $this
     */
    public function setslaveSpec($slaveSpec)
    {
        $this->requestParameters['slaveSpec'] = $slaveSpec;
        $this->queryParameters['slaveSpec'] = $slaveSpec;

        return $this;
    }

    /**
     * @param string $region
     *
     * @return $this
     */
    public function setregion($region)
    {
        $this->requestParameters['region'] = $region;
        $this->queryParameters['region'] = $region;

        return $this;
    }

    /**
     * @param string $masterNum
     *
     * @return $this
     */
    public function setmasterNum($masterNum)
    {
        $this->requestParameters['masterNum'] = $masterNum;
        $this->queryParameters['masterNum'] = $masterNum;

        return $this;
    }

    /**
     * @param string $masterSpec
     *
     * @return $this
     */
    public function setmasterSpec($masterSpec)
    {
        $this->requestParameters['masterSpec'] = $masterSpec;
        $this->queryParameters['masterSpec'] = $masterSpec;

        return $this;
    }

    /**
     * @param string $payModel
     *
     * @return $this
     */
    public function setpayModel($payModel)
    {
        $this->requestParameters['payModel'] = $payModel;
        $this->queryParameters['payModel'] = $payModel;

        return $this;
    }
}
