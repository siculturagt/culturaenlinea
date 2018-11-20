</section>

<footer id="main-footer">

<section id="logos_bdglz">
  <div class="container-footer">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 col-sm-12">
        <a target="_blank" href="http://mcd.gob.gt"><div class="lgo lgo-1"></div></a>
        <a target="_blank" href="http://www.conap.gob.gt"><div class="lgo lgo-2"></div></a>
        <a target="_blank" href="http://mcd.gob.gt/tag/idaeh/"><div class="lgo lgo-3"></div></a>
        <a target="_blank" href="http://almg.org.gt"><div class="lgo lgo-4"></div></a>
        <a target="_blank" href="http://www.ign.gob.gt"><div class="lgo lgo-5"></div></a>
        <a target="_blank" href="http://conader.com.gt"><div class="lgo lgo-7"></div></a>
      </div>
    </div>
  </div>
</section>

</footer>
<?php $this->part('templates'); ?>
<?php $this->bodyEnd(); ?>
<iframe id="require-authentication" src="" style="display:none; position:fixed; top:0%; left:0%; width:100%; height:100%; z-index:100000"></iframe>

<?php if ($this->isEditable()): ?>
    <div id="editbox-human-crop" class="js-editbox" title="<?php \MapasCulturais\i::esc_attr_e("Recortar imagem");?>">
        <img id="human-crop-image"/>
    </div>

<?php endif; ?>
</body>
</html>
