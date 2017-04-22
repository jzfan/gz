<script type="text/javascript">
function addInput(input)
{
	let name = $(input).attr('name');
	// console.log($(input));
	let newInput = `
		 <div class="input-group m-bot15">
		   <span class="input-group-addon">1</span>
		      <input class="form-control" name='${name}' value='' onclick='addInput(this)'>
		</div>
		`;
	let div = $(input).closest('.input-group');
	if( $(div).next().length == 0) {
		$(div).after(newInput);
	}
}
</script>