<?php
/* @var $projects \common\models\Project[] */
?>

<?php foreach ($projects as $key => $project): ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?= $key + 1; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted"><?= $project->subtitle ?></p>
                                <img class="img-responsive img-centered" src="<?= $project->getImgUrl(); ?>" alt="">
                                <?= $project->description; ?>
                                <ul class="list-inline">
                                    <?= $project->date ? "<li>$project->date</li>" : null ?>
                                    <?= $project->date ? "<li>$project->client</li>" : null ?>
                                    <?= $project->date ? "<li>$project->category</li>" : null ?>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

