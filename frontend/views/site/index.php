<?php

/* @var $this yii\web\View */
/* @var $projects \common\models\Project[] */
/* @var $aboutRecords \common\models\About[] */
/* @var $contactForm \frontend\models\ContactForm */
$this->title = 'Тестовое задание Junior Yii2 Developer';
?>
<?= $this->render('services'); ?>
<?php if($projects): ?>
    <?= $this->render('portfolio', ['projects' => $projects]); ?>
<?php endif; ?>

<?php if($aboutRecords): ?>
    <?= $this->render('about', ['aboutRecords' => $aboutRecords]); ?>
<?php endif; ?>

<?= $this->render('team'); ?>

<?= $this->render('clients'); ?>

<?= $this->render('contact', ['contactForm' => $contactForm]); ?>

<?php if($projects): ?>
    <?= $this->render('projects-modal', ['projects' => $projects]); ?>
<?php endif; ?>
