	@if (\Auth::user())
<div class="top-info">
	<!-- 工长显示 -->
	<p>欢迎您：{{ \Auth::user()->name }} {{ \Auth::user()->transRole() }}&nbsp;&nbsp;| 
		<a  style="color: #000;" href="{{ route('logout') }}"
		    onclick="event.preventDefault();
		             document.getElementById('logout-form').submit();">
		    退出
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		    {{ csrf_field() }}
		</form>
	</p>
</div>
	@endif