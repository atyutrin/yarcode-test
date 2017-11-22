<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $contactForm \frontend\models\ContactForm */
/* @var $form yii\widgets\ActiveForm */
?>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php $form = ActiveForm::begin(['action' => 'site/contact',
                                                 'options' => ['id' => 'contactForm',
                                                               'name' => 'sentMessage',
                                                               'placeholdersFromLabels' => true,
                                                                ]]); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($contactForm, 'name')
                                         ->label(false)
                                         ->textInput(['placeholder' => $contactForm->getAttributeLabel('name')]);
                                ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($contactForm, 'email')
                                         ->label(false)
                                         ->textInput(['placeholder' => $contactForm->getAttributeLabel('email')]);
                                ?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($contactForm, 'phone')
                                         ->label(false)
                                         ->textInput(['placeholder' => $contactForm->getAttributeLabel('phone')]);
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?= $form->field($contactForm, 'message')
                                         ->label(false)
                                         ->textarea(['placeholder' => $contactForm->getAttributeLabel('phone')]);
                                ?>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <?= Html::submitButton('Send Message', ['class' => 'btn btn-xl', 'id' => 'submit'])  ?>
                        </div>
                    </div>
                <?php $form = ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</section>