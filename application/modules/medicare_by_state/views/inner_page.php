<div class="container form-section wider-area">
            <div class="row">
                <div class="col-12">
                    <a href="<?= bs() ?>" class="text-dark open-sans small">Home</a>
                    <span class="text-black-50 ml-2">/</span>
                    <small class="open-sans ml-2 text-black-50 small"><?=$cms_content[0]->title?></small>

                    <h1 class="text-blue mt-3 mb-4"><?=$cms_content[0]->title?></h1>

                    <?= $cms_content[0]->comment?>
                    <br>
                </div>
            </div>
        </div>