<!-- Common Block -->
<section class="common-block">
    <div class="container">
        <div class="breadcrumbs-block">
            <ul>
                <li><a href="<?= bs() ?>">Home</a></li>
                <li class="active"><span><?=$cms_content[0]->title?></span></li>
            </ul>
        </div>
        <div class="common-subblock">
            <h1><?=$cms_content[0]->title?></h1>
            <p> <?= $cms_content[0]->comment?></p>
        </div>
    </div>
</section>        