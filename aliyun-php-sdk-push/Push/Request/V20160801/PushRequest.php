<?php

namespace Push\Request\V20160801;

/**
 * Request of Push
 *
 * @method string getAndroidNotificationBarType()
 * @method string getSmsSendPolicy()
 * @method string getAndroidExtParameters()
 * @method string getiOSBadge()
 * @method string getiOSBadgeAutoIncrement()
 * @method string getAndroidOpenType()
 * @method string getTitle()
 * @method string getBody()
 * @method string getDeviceType()
 * @method string getPushTime()
 * @method string getSmsDelaySecs()
 * @method string getSendSpeed()
 * @method string getAndroidPopupActivity()
 * @method string getiOSRemindBody()
 * @method string getiOSExtParameters()
 * @method string getAndroidNotifyType()
 * @method string getAndroidPopupTitle()
 * @method string getiOSMusic()
 * @method string getiOSApnsEnv()
 * @method string getiOSMutableContent()
 * @method string getAndroidNotificationBarPriority()
 * @method string getExpireTime()
 * @method string getSmsTemplateName()
 * @method string getAndroidPopupBody()
 * @method string getiOSNotificationCategory()
 * @method string getStoreOffline()
 * @method string getiOSSilentNotification()
 * @method string getSmsParams()
 * @method string getJobKey()
 * @method string getTarget()
 * @method string getAndroidOpenUrl()
 * @method string getAndroidNotificationChannel()
 * @method string getAndroidRemind()
 * @method string getAndroidActivity()
 * @method string getAndroidXiaoMiNotifyBody()
 * @method string getiOSSubtitle()
 * @method string getSmsSignName()
 * @method string getiOSRemind()
 * @method string getAppKey()
 * @method string getTargetValue()
 * @method string getAndroidMusic()
 * @method string getAndroidXiaoMiActivity()
 * @method string getAndroidXiaoMiNotifyTitle()
 * @method string getPushType()
 */
class PushRequest extends \RpcAcsRequest
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
            'Push',
            '2016-08-01',
            'Push'
        );
    }

    /**
     * @param string $androidNotificationBarType
     *
     * @return $this
     */
    public function setAndroidNotificationBarType($androidNotificationBarType)
    {
        $this->requestParameters['AndroidNotificationBarType'] = $androidNotificationBarType;
        $this->queryParameters['AndroidNotificationBarType'] = $androidNotificationBarType;

        return $this;
    }

    /**
     * @param string $smsSendPolicy
     *
     * @return $this
     */
    public function setSmsSendPolicy($smsSendPolicy)
    {
        $this->requestParameters['SmsSendPolicy'] = $smsSendPolicy;
        $this->queryParameters['SmsSendPolicy'] = $smsSendPolicy;

        return $this;
    }

    /**
     * @param string $androidExtParameters
     *
     * @return $this
     */
    public function setAndroidExtParameters($androidExtParameters)
    {
        $this->requestParameters['AndroidExtParameters'] = $androidExtParameters;
        $this->queryParameters['AndroidExtParameters'] = $androidExtParameters;

        return $this;
    }

    /**
     * @param string $iOSBadge
     *
     * @return $this
     */
    public function setiOSBadge($iOSBadge)
    {
        $this->requestParameters['iOSBadge'] = $iOSBadge;
        $this->queryParameters['iOSBadge'] = $iOSBadge;

        return $this;
    }

    /**
     * @param string $iOSBadgeAutoIncrement
     *
     * @return $this
     */
    public function setiOSBadgeAutoIncrement($iOSBadgeAutoIncrement)
    {
        $this->requestParameters['iOSBadgeAutoIncrement'] = $iOSBadgeAutoIncrement;
        $this->queryParameters['iOSBadgeAutoIncrement'] = $iOSBadgeAutoIncrement;

        return $this;
    }

    /**
     * @param string $androidOpenType
     *
     * @return $this
     */
    public function setAndroidOpenType($androidOpenType)
    {
        $this->requestParameters['AndroidOpenType'] = $androidOpenType;
        $this->queryParameters['AndroidOpenType'] = $androidOpenType;

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
     * @param string $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->requestParameters['Body'] = $body;
        $this->queryParameters['Body'] = $body;

        return $this;
    }

    /**
     * @param string $deviceType
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->requestParameters['DeviceType'] = $deviceType;
        $this->queryParameters['DeviceType'] = $deviceType;

        return $this;
    }

    /**
     * @param string $pushTime
     *
     * @return $this
     */
    public function setPushTime($pushTime)
    {
        $this->requestParameters['PushTime'] = $pushTime;
        $this->queryParameters['PushTime'] = $pushTime;

        return $this;
    }

    /**
     * @param string $smsDelaySecs
     *
     * @return $this
     */
    public function setSmsDelaySecs($smsDelaySecs)
    {
        $this->requestParameters['SmsDelaySecs'] = $smsDelaySecs;
        $this->queryParameters['SmsDelaySecs'] = $smsDelaySecs;

        return $this;
    }

    /**
     * @param string $sendSpeed
     *
     * @return $this
     */
    public function setSendSpeed($sendSpeed)
    {
        $this->requestParameters['SendSpeed'] = $sendSpeed;
        $this->queryParameters['SendSpeed'] = $sendSpeed;

        return $this;
    }

    /**
     * @param string $androidPopupActivity
     *
     * @return $this
     */
    public function setAndroidPopupActivity($androidPopupActivity)
    {
        $this->requestParameters['AndroidPopupActivity'] = $androidPopupActivity;
        $this->queryParameters['AndroidPopupActivity'] = $androidPopupActivity;

        return $this;
    }

    /**
     * @param string $iOSRemindBody
     *
     * @return $this
     */
    public function setiOSRemindBody($iOSRemindBody)
    {
        $this->requestParameters['iOSRemindBody'] = $iOSRemindBody;
        $this->queryParameters['iOSRemindBody'] = $iOSRemindBody;

        return $this;
    }

    /**
     * @param string $iOSExtParameters
     *
     * @return $this
     */
    public function setiOSExtParameters($iOSExtParameters)
    {
        $this->requestParameters['iOSExtParameters'] = $iOSExtParameters;
        $this->queryParameters['iOSExtParameters'] = $iOSExtParameters;

        return $this;
    }

    /**
     * @param string $androidNotifyType
     *
     * @return $this
     */
    public function setAndroidNotifyType($androidNotifyType)
    {
        $this->requestParameters['AndroidNotifyType'] = $androidNotifyType;
        $this->queryParameters['AndroidNotifyType'] = $androidNotifyType;

        return $this;
    }

    /**
     * @param string $androidPopupTitle
     *
     * @return $this
     */
    public function setAndroidPopupTitle($androidPopupTitle)
    {
        $this->requestParameters['AndroidPopupTitle'] = $androidPopupTitle;
        $this->queryParameters['AndroidPopupTitle'] = $androidPopupTitle;

        return $this;
    }

    /**
     * @param string $iOSMusic
     *
     * @return $this
     */
    public function setiOSMusic($iOSMusic)
    {
        $this->requestParameters['iOSMusic'] = $iOSMusic;
        $this->queryParameters['iOSMusic'] = $iOSMusic;

        return $this;
    }

    /**
     * @param string $iOSApnsEnv
     *
     * @return $this
     */
    public function setiOSApnsEnv($iOSApnsEnv)
    {
        $this->requestParameters['iOSApnsEnv'] = $iOSApnsEnv;
        $this->queryParameters['iOSApnsEnv'] = $iOSApnsEnv;

        return $this;
    }

    /**
     * @param string $iOSMutableContent
     *
     * @return $this
     */
    public function setiOSMutableContent($iOSMutableContent)
    {
        $this->requestParameters['iOSMutableContent'] = $iOSMutableContent;
        $this->queryParameters['iOSMutableContent'] = $iOSMutableContent;

        return $this;
    }

    /**
     * @param string $androidNotificationBarPriority
     *
     * @return $this
     */
    public function setAndroidNotificationBarPriority($androidNotificationBarPriority)
    {
        $this->requestParameters['AndroidNotificationBarPriority'] = $androidNotificationBarPriority;
        $this->queryParameters['AndroidNotificationBarPriority'] = $androidNotificationBarPriority;

        return $this;
    }

    /**
     * @param string $expireTime
     *
     * @return $this
     */
    public function setExpireTime($expireTime)
    {
        $this->requestParameters['ExpireTime'] = $expireTime;
        $this->queryParameters['ExpireTime'] = $expireTime;

        return $this;
    }

    /**
     * @param string $smsTemplateName
     *
     * @return $this
     */
    public function setSmsTemplateName($smsTemplateName)
    {
        $this->requestParameters['SmsTemplateName'] = $smsTemplateName;
        $this->queryParameters['SmsTemplateName'] = $smsTemplateName;

        return $this;
    }

    /**
     * @param string $androidPopupBody
     *
     * @return $this
     */
    public function setAndroidPopupBody($androidPopupBody)
    {
        $this->requestParameters['AndroidPopupBody'] = $androidPopupBody;
        $this->queryParameters['AndroidPopupBody'] = $androidPopupBody;

        return $this;
    }

    /**
     * @param string $iOSNotificationCategory
     *
     * @return $this
     */
    public function setiOSNotificationCategory($iOSNotificationCategory)
    {
        $this->requestParameters['iOSNotificationCategory'] = $iOSNotificationCategory;
        $this->queryParameters['iOSNotificationCategory'] = $iOSNotificationCategory;

        return $this;
    }

    /**
     * @param string $storeOffline
     *
     * @return $this
     */
    public function setStoreOffline($storeOffline)
    {
        $this->requestParameters['StoreOffline'] = $storeOffline;
        $this->queryParameters['StoreOffline'] = $storeOffline;

        return $this;
    }

    /**
     * @param string $iOSSilentNotification
     *
     * @return $this
     */
    public function setiOSSilentNotification($iOSSilentNotification)
    {
        $this->requestParameters['iOSSilentNotification'] = $iOSSilentNotification;
        $this->queryParameters['iOSSilentNotification'] = $iOSSilentNotification;

        return $this;
    }

    /**
     * @param string $smsParams
     *
     * @return $this
     */
    public function setSmsParams($smsParams)
    {
        $this->requestParameters['SmsParams'] = $smsParams;
        $this->queryParameters['SmsParams'] = $smsParams;

        return $this;
    }

    /**
     * @param string $jobKey
     *
     * @return $this
     */
    public function setJobKey($jobKey)
    {
        $this->requestParameters['JobKey'] = $jobKey;
        $this->queryParameters['JobKey'] = $jobKey;

        return $this;
    }

    /**
     * @param string $target
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->requestParameters['Target'] = $target;
        $this->queryParameters['Target'] = $target;

        return $this;
    }

    /**
     * @param string $androidOpenUrl
     *
     * @return $this
     */
    public function setAndroidOpenUrl($androidOpenUrl)
    {
        $this->requestParameters['AndroidOpenUrl'] = $androidOpenUrl;
        $this->queryParameters['AndroidOpenUrl'] = $androidOpenUrl;

        return $this;
    }

    /**
     * @param string $androidNotificationChannel
     *
     * @return $this
     */
    public function setAndroidNotificationChannel($androidNotificationChannel)
    {
        $this->requestParameters['AndroidNotificationChannel'] = $androidNotificationChannel;
        $this->queryParameters['AndroidNotificationChannel'] = $androidNotificationChannel;

        return $this;
    }

    /**
     * @param string $androidRemind
     *
     * @return $this
     */
    public function setAndroidRemind($androidRemind)
    {
        $this->requestParameters['AndroidRemind'] = $androidRemind;
        $this->queryParameters['AndroidRemind'] = $androidRemind;

        return $this;
    }

    /**
     * @param string $androidActivity
     *
     * @return $this
     */
    public function setAndroidActivity($androidActivity)
    {
        $this->requestParameters['AndroidActivity'] = $androidActivity;
        $this->queryParameters['AndroidActivity'] = $androidActivity;

        return $this;
    }

    /**
     * @param string $androidXiaoMiNotifyBody
     *
     * @return $this
     */
    public function setAndroidXiaoMiNotifyBody($androidXiaoMiNotifyBody)
    {
        $this->requestParameters['AndroidXiaoMiNotifyBody'] = $androidXiaoMiNotifyBody;
        $this->queryParameters['AndroidXiaoMiNotifyBody'] = $androidXiaoMiNotifyBody;

        return $this;
    }

    /**
     * @param string $iOSSubtitle
     *
     * @return $this
     */
    public function setiOSSubtitle($iOSSubtitle)
    {
        $this->requestParameters['iOSSubtitle'] = $iOSSubtitle;
        $this->queryParameters['iOSSubtitle'] = $iOSSubtitle;

        return $this;
    }

    /**
     * @param string $smsSignName
     *
     * @return $this
     */
    public function setSmsSignName($smsSignName)
    {
        $this->requestParameters['SmsSignName'] = $smsSignName;
        $this->queryParameters['SmsSignName'] = $smsSignName;

        return $this;
    }

    /**
     * @param string $iOSRemind
     *
     * @return $this
     */
    public function setiOSRemind($iOSRemind)
    {
        $this->requestParameters['iOSRemind'] = $iOSRemind;
        $this->queryParameters['iOSRemind'] = $iOSRemind;

        return $this;
    }

    /**
     * @param string $appKey
     *
     * @return $this
     */
    public function setAppKey($appKey)
    {
        $this->requestParameters['AppKey'] = $appKey;
        $this->queryParameters['AppKey'] = $appKey;

        return $this;
    }

    /**
     * @param string $targetValue
     *
     * @return $this
     */
    public function setTargetValue($targetValue)
    {
        $this->requestParameters['TargetValue'] = $targetValue;
        $this->queryParameters['TargetValue'] = $targetValue;

        return $this;
    }

    /**
     * @param string $androidMusic
     *
     * @return $this
     */
    public function setAndroidMusic($androidMusic)
    {
        $this->requestParameters['AndroidMusic'] = $androidMusic;
        $this->queryParameters['AndroidMusic'] = $androidMusic;

        return $this;
    }

    /**
     * @param string $androidXiaoMiActivity
     *
     * @return $this
     */
    public function setAndroidXiaoMiActivity($androidXiaoMiActivity)
    {
        $this->requestParameters['AndroidXiaoMiActivity'] = $androidXiaoMiActivity;
        $this->queryParameters['AndroidXiaoMiActivity'] = $androidXiaoMiActivity;

        return $this;
    }

    /**
     * @param string $androidXiaoMiNotifyTitle
     *
     * @return $this
     */
    public function setAndroidXiaoMiNotifyTitle($androidXiaoMiNotifyTitle)
    {
        $this->requestParameters['AndroidXiaoMiNotifyTitle'] = $androidXiaoMiNotifyTitle;
        $this->queryParameters['AndroidXiaoMiNotifyTitle'] = $androidXiaoMiNotifyTitle;

        return $this;
    }

    /**
     * @param string $pushType
     *
     * @return $this
     */
    public function setPushType($pushType)
    {
        $this->requestParameters['PushType'] = $pushType;
        $this->queryParameters['PushType'] = $pushType;

        return $this;
    }
}
