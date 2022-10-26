<footer class="footer">Letqr.com için hazırlanmış detaylı dökümantasyon sayfaları</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script src="<?=base_url('assets/')?>scribbler.js"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if ($alert): ?>
  <script type="text/javascript">
  Swal.fire({
title: '<?=$alert['status']?>',
text: '<?=$alert['content']?>',
icon: '<?=$alert['status']?>'
});
  </script>
<?php endif; ?>
</body>
</html>