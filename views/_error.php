<?php
/**
 * @var $exception Exception
 * @var $this \grimm1994\grimmCore\View
 */

$this->title = $exception->getCode() ?> - <?php echo $exception->getMessage();
?>

<h3><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h3>
