	@if (\Auth::user())
<div class="top-info">
	<!-- 工长显示 -->
	<p>欢迎您：{{ \Auth::user()->name }} {{ \Auth::user()->transRole() }} 
		<span>
			<a style="color: #fff;" 
				@if (\Auth::user()->isAdmin()) href="/admin-console">控制台
				@else href='/me'> 会员中心
				@endif
				</a>
		</span> &nbsp;&nbsp;| 
		<a  style="color: #fff;" href="{{ route('logout') }}"
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