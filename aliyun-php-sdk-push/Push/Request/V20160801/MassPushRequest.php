<?php

namespace Push\Request\V20160801;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of MassPush
 *
 * @method array getPushTasks()
 * @method string getAppKey()
 */
class MassPushRequest extends \RpcAcsRequest
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
            'MassPush',
            'cps'
        );
    }

    /**
     * @param array $pushTask
     *
     * @return $this
     */
	public function setPushTasks(array $pushTask)
	{
	    $this->requestParameters['PushTasks'] = $pushTask;
		foreach ($pushTask as $depth1 => $depth1Value) {
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidNotificationBarType'] = $depth1Value['AndroidNotificationBarType'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidExtParameters'] = $depth1Value['AndroidExtParameters'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSBadge'] = $depth1Value['IOSBadge'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSBadgeAutoIncrement'] = $depth1Value['IOSBadgeAutoIncrement'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidOpenType'] = $depth1Value['AndroidOpenType'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.Title'] = $depth1Value['Title'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.Body'] = $depth1Value['Body'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.DeviceType'] = $depth1Value['DeviceType'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.PushTime'] = $depth1Value['PushTime'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.SendSpeed'] = $depth1Value['SendSpeed'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidPopupActivity'] = $depth1Value['AndroidPopupActivity'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSRemindBody'] = $depth1Value['IOSRemindBody'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSExtParameters'] = $depth1Value['IOSExtParameters'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidNotifyType'] = $depth1Value['AndroidNotifyType'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidPopupTitle'] = $depth1Value['AndroidPopupTitle'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSMusic'] = $depth1Value['IOSMusic'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSApnsEnv'] = $depth1Value['IOSApnsEnv'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSMutableContent'] = $depth1Value['IOSMutableContent'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidNotificationBarPriority'] = $depth1Value['AndroidNotificationBarPriority'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.ExpireTime'] = $depth1Value['ExpireTime'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidPopupBody'] = $depth1Value['AndroidPopupBody'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSNotificationCategory'] = $depth1Value['IOSNotificationCategory'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.StoreOffline'] = $depth1Value['StoreOffline'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSSilentNotification'] = $depth1Value['IOSSilentNotification'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.JobKey'] = $depth1Value['JobKey'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.Target'] = $depth1Value['Target'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidOpenUrl'] = $depth1Value['AndroidOpenUrl'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidNotificationChannel'] = $depth1Value['AndroidNotificationChannel'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidRemind'] = $depth1Value['AndroidRemind'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidActivity'] = $depth1Value['AndroidActivity'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiNotifyBody'] = $depth1Value['AndroidXiaoMiNotifyBody'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSSubtitle'] = $depth1Value['IOSSubtitle'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.iOSRemind'] = $depth1Value['IOSRemind'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.TargetValue'] = $depth1Value['TargetValue'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidMusic'] = $depth1Value['AndroidMusic'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiActivity'] = $depth1Value['AndroidXiaoMiActivity'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.AndroidXiaoMiNotifyTitle'] = $depth1Value['AndroidXiaoMiNotifyTitle'];
			$this->queryParameters['PushTask.' . ($depth1 + 1) . '.PushType'] = $depth1Value['PushType'];
		}

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
}
