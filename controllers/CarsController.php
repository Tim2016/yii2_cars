<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

use yii\data\Pagination;
use app\models\Cars;

class CarsController extends Controller
{
    /**
     * Displays Cars page.
     *
     * @return string
     */

    public function actionIndex()
    {
        $query = Cars::find();
        // выводим содержимое бд из таблицы 
        // return $this->render('cars', ['query' => $query]);

        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);

        // одиночный запрос ?
        $cars = $query->orderBy('manufacturer')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('index',[
            'cars' => $cars,
            'pagination' => $pagination,
        ]);
    }
}
