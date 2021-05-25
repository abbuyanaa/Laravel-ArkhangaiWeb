<header id="header_main">
	<div class="header_main_content">
		<nav class="uk-navbar">
			<div class="uk-navbar-flip">
				<ul class="uk-navbar-nav user_actions">
					<li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
						<a href="#" class="user_action_image"><img class="md-user-image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/1024px-Circle-icons-profile.svg.png" alt=""/></a>
						<div class="uk-dropdown uk-dropdown-small">
							<ul class="uk-nav js-uk-prevent">
								<li><a href="{{ asset('/logout') }}">Системээс гарах</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>