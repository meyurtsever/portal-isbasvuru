<?php

namespace kouosl\isbasvuru\models;

use Yii;

/**
 * This is the model class for table "notice_category".
 *
 * @property int $notice_id
 * @property string $category
 *
 * @property ApplicantInfo[] $applicantInfos
 * @property InitializeNotice $initializeNotice
 */
class Noticecat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notice_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category'], 'required'],
            [['category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'notice_id' => 'Notice ID',
            'category' => 'Category',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApplicantInfos()
    {
        return $this->hasMany(ApplicantInfo::className(), ['notice_id' => 'notice_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInitializeNotice()
    {
        return $this->hasOne(InitializeNotice::className(), ['id' => 'notice_id']);
    }
}
