<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[UserImages]].
 *
 * @see UserImages
 */
class UserImagesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UserImages[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserImages|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
