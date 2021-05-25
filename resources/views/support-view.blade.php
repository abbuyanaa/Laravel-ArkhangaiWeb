@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-12 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">
				<h2 class="heading_b">Санал хүсэлт</h2>
				@foreach($support_data as $row)
				<div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
					<div class="uk-width-xLarge-12 uk-width-large-12">
						<div class="md-card">
							<div class="md-card-content large-padding">
								<div class="uk-grid uk-grid-divider uk-grid-medium">
									<div class="uk-width-large-1-2">
										<div class="uk-grid uk-grid-small">
											<div class="uk-width-large-1-3">
												<span class="uk-text-muted uk-text-small">Нэр</span>
											</div>
											<div class="uk-width-large-2-3">
												<span class="uk-text-large uk-text-middle">{{$row->name}}</span>
											</div>
										</div>
										<hr class="uk-grid-divider">
										<div class="uk-grid uk-grid-small">
											<div class="uk-width-large-1-3">
												<span class="uk-text-muted uk-text-small">Цахим хаяг</span>
											</div>
											<div class="uk-width-large-2-3">
												<span class="uk-text-large uk-text-middle">{{$row->email}}</span>
											</div>
										</div>
										<hr class="uk-grid-divider">
										<div class="uk-grid uk-grid-small">
											<div class="uk-width-large-1-3">
												<span class="uk-text-muted uk-text-small">Утас</span>
											</div>
											<div class="uk-width-large-2-3">
												{{$row->phone}}
											</div>
										</div>
										<hr class="uk-grid-divider uk-hidden-large">
									</div>
									<div class="uk-width-large-1-2">
										<p>
											<span class="uk-text-muted uk-text-small uk-display-block uk-margin-small-bottom">Зурвас</span>
											{{$row->body}}
										</p>
									</div>
								</div>
							</div>
						</div>
						<a href="{{asset('support')}}" class="md-btn md-btn-primary uk-margin-small-top">Буцах</a>
					</div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</div>

@endsection
