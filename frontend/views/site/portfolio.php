<?php
/* @var $projects \common\models\Project[] */
?>
<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Portfolio</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($projects as $key => $project): ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal<?= $key + 1 ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?= $project->getImgUrl(); ?>" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?= $project->title; ?></h4>
                        <p class="text-muted"><?= $project->subtitle; ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
