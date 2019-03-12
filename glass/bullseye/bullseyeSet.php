<div id="render-target"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/riot/3.7.2/riot.min.js"></script>
<script src="<?=strstr(CLASSROOT.'BullseyeGlassClass.js','/mobile');?>"></script>
<script src="<?=strstr(DBROOT.'store.js','/mobile');?>"></script>
<script src="views/renderer.js"></script>
<script src="views/glass.js"></script>


<script>
    riot.mount('div#render-target', 'renderer', {
        store: glassStore,
        type: '<?=$GlassType;?>'
    })
</script>