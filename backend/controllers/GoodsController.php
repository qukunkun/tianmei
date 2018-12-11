<?php

namespace backend\controllers;

use Yii;
use app\models\Y;
use app\models\Goods;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Category;

/**
 * GoodsController implements the CRUD actions for Goods model.
 */
class GoodsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST','GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Goods models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Goods::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Goods model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Goods model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $post_data = Y::Q()->post();
        if( !empty($post_data)){
            $model = new Goods();
            $model->category_id = $post_data['category_id'];
            $model->goods_code = $post_data['goods_code'];
            $model->goods_name = $post_data['goods_name'];
            $model->goods_number = $post_data['goods_number'];

            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        $tree = $this->getTree();
        $data['category_info'] = $this->getSelect($tree);

        return $this->render('create', [
            'data'=> $data,
        ]);
    }

    //获取下拉结构
    public function getSelect($data, $parent_id=0, &$sel_arr=array()){
        foreach( $data as $key=>$value){
            $kong = '';
            for($i=0;$i<$value['level'];$i++){
                $kong .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
            }
            $label = $kong;
            $sel_arr[$value['id']] = array(
                'id'=>$value['id'],
                'description'=>$label.$value['description'],
                'parent_id' => $value['parent_id'],
                'level'=>$value['level']
            );
            if(!empty($value['children'])){
                self::getSelect($value['children'],$value['parent_id'],$sel_arr);
            }
        }
        return $sel_arr;
    }

    //获取树
    public function getTree(){
        $level = 0; //初始级别
        $CategoryModels = new Category();
        $category_info = $CategoryModels::find()->select(['id','description', 'parent_id'])->asArray()->all();
        return $this->generateTree($category_info, 0, $level);
    }

    //生成树
    private function generateTree($data, $pid=0, $level){
        $tree = [];
        $level++;
        if ($data && is_array($data)) {
            foreach($data as $v) {
                if($v['parent_id'] == $pid) {
                    $tree[] = [
                        'id' => $v['id'],
                        'description' => $v['description'],
                        'parent_id' => $v['parent_id'],
                        'level' => $level,
                        'children' => self::generateTree($data, $v['id'],$level),
                    ];
                }
            }
        }
        return $tree;
    }

    /**
     * Updates an existing Goods model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Goods model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Goods model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Goods the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Goods::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
