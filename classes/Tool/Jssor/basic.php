<script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: 1 };
        var jssor1_slider = new $JssorSlider$("jssor_1", options);
    });
</script>
<div id="jssor_1" style="position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
    <div data-u="slides" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
        <?php foreach($images as $image): ?>
            <div><img data-u="image" src="<?= $image ?>" /></div>
        <?php endforeach; ?>
    </div>
</div>