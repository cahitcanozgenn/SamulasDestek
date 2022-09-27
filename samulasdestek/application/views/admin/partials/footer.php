<!-- jQuery 3 -->
<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/jquery-ui/jquery-ui.min.js"></script>
	
<script>
// jQuery UI sortable for the todo list
$('.todo-list').sortable({
	placeholder         : 'sort-highlight',
	handle              : '.handle',
	forcePlaceholderSize: true,
	zIndex              : 999999
});
</script>

<script>
function sira_kayit(me, kid) {
	//console.log(kid);
	//console.log($(me).parent().parent().prev());
	
	const arr = [];
	$(me).parent().parent().prev().find('li').each(function(i){
		//console.log($(this).data("id"));
		arr.push($(this).data("id"));
	});
	
	console.log(arr);
	
	var xhr = new XMLHttpRequest();
	console.log('/sort/' + JSON.stringify(arr));
	xhr.open("GET", '/sort/' + JSON.stringify(arr));
	xhr.onreadystatechange = function() {
		if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
			console.log(xhr.responseText);
		}
	}
	xhr.send();
		
}

</script>

		  <!-- /.content -->
		</div>
		<!-- /.container -->
	</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container text-center">
      <strong>Copyright &copy; 2022 <a href="https://samulas.com.tr/">SAMULAŞ A.Ş.</a> | <a href="https://samulas.com.tr/destek/">SamulaşDestek</a> | <a href="https://tr.linkedin.com/in/cahit-can-%C3%B6zgen-07ab241b6">Developed by Cahit Can ÖZGEN</a></strong>
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

</body>
<!-- page script -->
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?=base_url('assets/admin/js/spur.js')?>"></script>
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