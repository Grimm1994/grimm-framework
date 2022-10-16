<?php
/**
 * @var $model \app\models\User
 * @var $this \grimm1994\grimmCore\View
 */

$this->title = 'Login';
?>
    <h1 class="mb-5">Login</h1>
<?php $form = \grimm1994\grimmCore\form\Form::begin('', 'post'); ?>
<?php echo $form->inputField($model, 'email') ?>
<?php echo $form->inputField($model, 'password')->passwordField() ?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php \grimm1994\grimmCore\form\Form::end() ?>