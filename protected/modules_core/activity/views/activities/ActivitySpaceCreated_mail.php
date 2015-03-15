<?php $this->beginContent('application.modules_core.activity.views.activityLayoutMail', array('activity' => $activity, 'showSpace' => true)); ?>

<?php echo Yii::t('ActivityModule.views_activities_ActivitySpaceCreated', "%displayName% created the new space %spaceName%", array(
    '%displayName%' => '<a href="' . $user->getUrl() . '">'.CHtml::encode($user->displayName).'</a>',
    '%spaceName%' => '<a href="' . $workspace->getUrl() . '">'. CHtml::encode(Helpers::truncateText($workspace->name, 25)).'</a>'
)); ?>
<br/>

<?php $this->endContent(); ?>
