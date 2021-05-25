<aside id="sidebar_main">
	<div class="sidebar_main_header">
		<div class="sidebar_logo">
			<a href="{{ asset('/') }}" class="sSidebar_hide sidebar_logo_large">
				<img class="logo_regular" src="{{asset('../assets/images/logo/odon.png')}}" alt="" height="100" width="200"/>
			</a>
		</div>
	</div>
	
	<div class="menu_section">
		<ul>
			<li class="Home" title="Dashboard">
				<a href="{{asset('/')}}">
					<span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
					<span class="menu_title">Нүүр хуудас</span>
				</a>
			</li>

			<li title="Тендер">
				<a href="{{asset('tenderlist')}}">
					<span class="menu_icon"><i class="material-icons">work</i></span>
					<span class="menu_title">Тендер</span>
				</a>
			</li>

			<li title="Тендер төрөл">
				<a href="{{asset('tendertorol-list')}}">
					<span class="menu_icon"><i class="material-icons">turned_in</i></span>
					<span class="menu_title">Тендер төрөл</span>
				</a>
			</li>

			<li title="Мэдээ">
				<a href="{{asset('news')}}">
					<span class="menu_icon"><i class="material-icons">language</i></span>
					<span class="menu_title">Мэдээ</span>
				</a>
			</li>

			<li title="Мэдээний төрөл">
				<a href="{{asset('newscat-list')}}">
					<span class="menu_icon"><i class="material-icons">local_offer</i></span>
					<span class="menu_title">Мэдээний төрөл</span>
				</a>
			</li>

			<li title="Mailbox">
				<a href="{{asset('support')}}">
					<span class="menu_icon"><i class="material-icons">feedback</i></span>
					<span class="menu_title">Санал хүсэлт</span>
				</a>
			</li>

			<li title="Mailbox">
				<a href="{{asset('votes')}}">
					<span class="menu_icon"><i class="material-icons">plus_one</i></span>
					<span class="menu_title">Санал асуулга</span>
				</a>
			</li>

			<li title="">
				<a href="{{asset('votes')}}">
					<span class="menu_icon"><i class="material-icons">plus_one</i></span>
					<span class="menu_title">Хууль тогтоомж</span>
				</a>
			</li>

		</ul>
	</div>
</aside>