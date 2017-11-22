<?php

/* @var $this yii\web\View */
/* @var $projects \common\models\Project[] */
/* @var $aboutRecords \common\models\About[] */
/* @var $contactForm \frontend\models\ContactForm */
$this->title = 'Frontend';
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

<?= $this->render('projects-modal', ['projects' => $projects]); ?>
