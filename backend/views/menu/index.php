<?php

use common\models\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var common\models\search\MenuSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Menus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menu-index">
    <div class="row">
        <div class="col-md-8">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <div class="col-md-4">
            <?= Html::a('Create Menu', ['create'], ['class' => 'btn w-100 btn-success']) ?>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return $model->category->name_ru;
                }
            ],
            'title_ru',
            //'title_en',
            //'title_uz',
            //'short_ru',
            //'short_en',
            //'short_uz',
            [
                'attribute' => 'price',
                'value' => function ($model) {
                    return Yii::$app->formatter->asDecimal($model->price, 0);
                }
            ],
            [
                'attribute' => 'created',
                'value' => function ($model) {
                    return date('d.m.Y', $model->created);
                }
            ],
            'status',
            //'country',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Menu $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
