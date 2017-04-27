<div class="top-info">
	<!-- 工长显示 -->
	@if (\Auth::user())
	<p>欢迎您：{{ \Auth::user()->name }} {{ \Auth::user()->transRole() }}&nbsp;&nbsp;| 
		<a href="{{ route('logout') }}"
		    onclick="event.preventDefault();
		             document.getElementById('logout-form').submit();">
		    Logout
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		    {{ csrf_field() }}
		</form>
	</p>
	@endif
</div>