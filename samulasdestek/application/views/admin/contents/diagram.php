<script type="text/javascript">
  var jsondata = '<?=$json?>';
  navigator.clipboard.writeText(jsondata);
</script>

<iframe id="diagram" src="https://jsoncrack.com/editor" width="100%" height="100vh"></iframe>

<style media="screen">
  iframe{
    width: 100%;
    height:100vh;
    overflow: auto;
  }
  .bos{
    width:100%;
    display:block;
  }
</style>
