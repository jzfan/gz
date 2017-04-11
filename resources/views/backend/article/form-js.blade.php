<script type="text/javascript">
	$('.summernote').summernote({
	  height: 200,
	  lang: 'zh-CN',
	  toolbar: [
	  	['style', ['style']],
	  	['font', ['bold']],
	  	['para', ['ul', 'ol', 'paragraph']],
	  	['table', ['table']],
	  	['insert', ['link', 'picture']],
	  	['view', ['fullscreen', 'codeview']]
	  ]
	});
	$('#dp1').datepicker({
	    format: 'yyyy-mm-dd'
	});
	$(".tagsinput").tagsInput();
</script>