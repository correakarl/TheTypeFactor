<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-back">

</div>
<div class="site-login">

<div class="row-primary auth-title" style="">
    <h2>Bienvenido</h2>
</div>

<div class="auth-box">

    <div class="auth-tabs">
        <div id="tabLog" class="login-tab show">
            <h3>Inicia Sesión</h3>
            <button id="form1">></button>
        </div>
        <div id="tabReg" class="register-tab">
            <h3>Registrate</h3>
            <button id="form2"><</button>
        </div>
    </div>

    

    <div class="auth-forms">
        <div class="auth-icon">
            <i class="fa-solid fa-door-closed"></i>
        </div>
        
        <div id="cont1" class="login-form active">
            <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{input}\n{error}",
                
                'inputOptions' => ['class' => 'auth-control'],
                'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
            ],
            ]); ?>
                <i class="fa-solid fa-user"></i>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <i class="fa-solid fa-key"></i>
                <?= $form->field($model, 'password')->passwordInput( ) ?>

                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"\">{error}</div>",
                ]) ?>

                <div class="form-group">
                    <div class="">
                        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>

            <?php ActiveForm::end(); ?>
        </div>

        <div id="cont2" class="register-form">
            
        </div>
    </div>

</div>

    <div class="" style="color:#fff; text-align: center;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>
