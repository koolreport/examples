<?php
    $description = file_get_contents($example["meta"]["Description"][1]);
    $description = str_replace('<','&lt;',$description);
?>

<div class="card" style='margin-top:100px;'>
    <div class="card-header"><h5>Description</h5></div>
    <div class="card-body">
        <span class='markdown' style='display:none;'><?php echo $description; ?></span>
    </div>
</div>
<script>
    var converter = new showdown.Converter();
    $('span.markdown').each(function(index,span){
        var md = $(span).text();
        var html = converter.makeHtml(md.trim());
        $(span).parent().html(html);
    });
</script>
