<?php
require_once 'utils.php';
use function Custom_Modal\Utility\{feature_absolute_dir, feature_dir};

add_shortcode('modal', function ($atts, $content = null) {
    // Custom Slider CSS
    wp_enqueue_style('custom_modal-style', feature_dir('custom_modal.css'), array (), filemtime(feature_absolute_dir('custom_modal.css')));

    $attr = shortcode_atts([
        'id' => 'modal'
    ], $atts);
    ob_start();
    ?>
    <div id="<?= $attr['id'] ?>" class="modal">
        <div class="modal-backdrop">
            <div class="modal-content">
                <div class="modal-head">
                    <button class="m-0" data-close="modal">&#10005;</button>
                </div>
                <div class="modal-body">
                    <?= do_shortcode($content) ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.onload = function() {
            document.querySelector("[data-toggle='#<?= $attr['id'] ?>']").addEventListener("click", function () {
                const target = this.getAttribute("data-toggle");
                console.log(target);
                document.getElementById("<?= $attr['id'] ?>").classList = "modal open";
            });
            
            document
            .getElementById("<?= $attr['id'] ?>").querySelector("[data-close]").addEventListener("click", function () {
                const target = this.getAttribute("data-toggle");
                document.getElementById("<?= $attr['id'] ?>").classList = "modal";
            })
        }
        </script>
    <?php
    $res = ob_get_contents();
    ob_end_clean();
    return $res;
});