<?php
/**
 * @var $model \app\models\User
 * @var $this \grimm1994\grimmCore\View
 */

$this->title = 'Register';
?>

    <h1>Create an account</h1>
<?php $form = \grimm1994\grimmCore\form\Form::begin('', 'post'); ?>
    <div class="row">
        <div class="col">
            <?php echo $form->inputField($model, 'first_name') ?>
        </div>
        <div class="col">
            <?php echo $form->inputField($model, 'last_name') ?>
        </div>
    </div>
<?php echo $form->inputField($model, 'email') ?>
<?php echo $form->inputField($model, 'password')->passwordField() ?>
<?php echo $form->inputField($model, 'password_confirm')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php \grimm1994\grimmCore\form\Form::end() ?>