<?php

use yii\helpers\Html;
use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teachers';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
$mysqli = new mysqli("localhost", "root", "", "examination");
if (isset($_POST["import"])) {


    echo $filename = $_FILES["file"]["tmp_name"];


    if ($_FILES["file"]["size"] > 0) {

        $file = fopen($filename, "r");

        $flag = true;
        while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {
            if ($flag) {
                $flag = false;
                continue;
            }
            $sql = "INSERT into teacher (`t_name`) 
            values('$emapData[0]')";
            //we are using mysql_query function. it returns a resource on true else False on error
            $result = $mysqli->query($sql);
            if (!$result) {
                echo "<script type=\"text/javascript\">
                    alert(\"Invalid File:Please Upload CSV File.\");
                    window.location = \"index.php\"
                </script>";
            }
        }
        // while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE) {

        //     //It wiil insert a row to our subject table from our csv file`

        // }
        fclose($file);
        //throws a message if data successfully imported to mysql database from excel file
        echo "<script type=\"text/javascript\">
    						alert(\"CSV File has been successfully Imported.\");
    						window.location = \"index.php\"
    					</script>";



        //close of connection
        $mysqli->close();
    }
}
?>

<div class="teacher-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Add Teacher', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <br>


    <div class="outer-container">
        <form action="" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>" />
            <label>Choose Excel
                File</label> <input type="file" name="file" id="file">
            <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
        </form>

    </div>
    <div id="response" class="<?php if (!empty($type)) {
                                    echo $type . " display-block";
                                } ?>"><?php if (!empty($message)) {
                                            echo $message;
                                        } ?></div>


    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            't_id',
            't_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>