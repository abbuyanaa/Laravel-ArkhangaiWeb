@extends('layout.master')

@section('content')

<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin="">
			<div class="uk-width-medium-8-10">
				<label for="product_search_name">Xайх</label>
				<input type="text" class="md-input" id="product_search_name">
			</div>
			<div class="uk-width-medium-1-10 uk-text-center">
				<a href="#" class="md-btn md-btn-primary uk-margin-small-top">Xайх</a>
			</div>
			<div class="uk-width-medium-1-10 uk-text-center">
				<a href="{{asset('/vote-nemeh')}}" class="md-btn md-btn-primary uk-margin-small-top">Нэмэх</a>
			</div>
		</div>
	</div>
</div>

<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1">
				<div class="uk-overflow-container">
					<table class="uk-table uk-table-align-vertical" id="dt_individual_search">
						<thead>
							<tr>
								<th width="5%">№</th>
								<th width="50%">Асуулт</th>
								<th width="10%">Үйлдэл</th>
							</tr>
						</thead>
						<tbody>
						<?php $i=1; ?>
							@foreach($vote_data as $row)
								<tr>
									<td wi><?php echo $i++; ?></td>
									<td>{{strip_tags($row->title)}}</td>
									<td class="uk-text-nowrap">
										<!-- <a href="" class="uk-margin-left"><i class="material-icons md-24">&#xE8F4;</i></a> -->
										<a href="{{asset('/vote-zasah/'.$row->id)}}" class="uk-margin-center"><i class="material-icons md-24">&#xE254;</i></a>
										<a href="{{asset('/vote-delid/'.$row->id)}}" class="uk-margin-right" onclick="return confirm('Are you sure want to Delete?')"><i class="material-icons md-24">&#xE872;</i></a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection
