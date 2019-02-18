<?php

namespace Edas\Request\V20170801;

/**
 * Request of InsertApplication
 *
 * @method string getWebContainer()
 * @method string getEcuInfo()
 * @method string getBuildPackId()
 * @method string getHealthCheckURL()
 * @method string getReservedPortStr()
 * @method string getDescription()
 * @method string getCpu()
 * @method string getClusterId()
 * @method string getApplicationName()
 * @method string getJdk()
 * @method string getMem()
 * @method string getLogicalRegionId()
 * @method string getPackageType()
 */
class InsertApplicationRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/pop/v5/changeorder/co_create_app';

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
            'Edas',
            '2017-08-01',
            'InsertApplication'
        );
    }

    /**
     * @param string $webContainer
     *
     * @return $this
     */
    public function setWebContainer($webContainer)
    {
        $this->requestParameters['WebContainer'] = $webContainer;
        $this->queryParameters['WebContainer'] = $webContainer;

        return $this;
    }

    /**
     * @param string $ecuInfo
     *
     * @return $this
     */
    public function setEcuInfo($ecuInfo)
    {
        $this->requestParameters['EcuInfo'] = $ecuInfo;
        $this->queryParameters['EcuInfo'] = $ecuInfo;

        return $this;
    }

    /**
     * @param string $buildPackId
     *
     * @return $this
     */
    public function setBuildPackId($buildPackId)
    {
        $this->requestParameters['BuildPackId'] = $buildPackId;
        $this->queryParameters['BuildPackId'] = $buildPackId;

        return $this;
    }

    /**
     * @param string $healthCheckURL
     *
     * @return $this
     */
    public function setHealthCheckURL($healthCheckURL)
    {
        $this->requestParameters['HealthCheckURL'] = $healthCheckURL;
        $this->queryParameters['HealthCheckURL'] = $healthCheckURL;

        return $this;
    }

    /**
     * @param string $reservedPortStr
     *
     * @return $this
     */
    public function setReservedPortStr($reservedPortStr)
    {
        $this->requestParameters['ReservedPortStr'] = $reservedPortStr;
        $this->queryParameters['ReservedPortStr'] = $reservedPortStr;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $cpu
     *
     * @return $this
     */
    public function setCpu($cpu)
    {
        $this->requestParameters['Cpu'] = $cpu;
        $this->queryParameters['Cpu'] = $cpu;

        return $this;
    }

    /**
     * @param string $clusterId
     *
     * @return $this
     */
    public function setClusterId($clusterId)
    {
        $this->requestParameters['ClusterId'] = $clusterId;
        $this->queryParameters['ClusterId'] = $clusterId;

        return $this;
    }

    /**
     * @param string $applicationName
     *
     * @return $this
     */
    public function setApplicationName($applicationName)
    {
        $this->requestParameters['ApplicationName'] = $applicationName;
        $this->queryParameters['ApplicationName'] = $applicationName;

        return $this;
    }

    /**
     * @param string $jdk
     *
     * @return $this
     */
    public function setJdk($jdk)
    {
        $this->requestParameters['Jdk'] = $jdk;
        $this->queryParameters['Jdk'] = $jdk;

        return $this;
    }

    /**
     * @param string $mem
     *
     * @return $this
     */
    public function setMem($mem)
    {
        $this->requestParameters['Mem'] = $mem;
        $this->queryParameters['Mem'] = $mem;

        return $this;
    }

    /**
     * @param string $logicalRegionId
     *
     * @return $this
     */
    public function setLogicalRegionId($logicalRegionId)
    {
        $this->requestParameters['LogicalRegionId'] = $logicalRegionId;
        $this->queryParameters['LogicalRegionId'] = $logicalRegionId;

        return $this;
    }

    /**
     * @param string $packageType
     *
     * @return $this
     */
    public function setPackageType($packageType)
    {
        $this->requestParameters['PackageType'] = $packageType;
        $this->queryParameters['PackageType'] = $packageType;

        return $this;
    }
}
