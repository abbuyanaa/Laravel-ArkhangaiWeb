@extends('layout.master')

@section('content')

<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin="">
			<div class="uk-width-medium-8-10">
				<label for="product_search_name">Хайх</label>
				<input type="text" class="md-input" id="product_search_name">
			</div>
			<div class="uk-width-medium-1-10 uk-text-center">
				<a href="#" class="md-btn md-btn-primary uk-margin-small-top">Хайх</a>
			</div>
			<div class="uk-width-medium-1-10 uk-text-center">
				<a href="{{asset('/tender-nemeh')}}" class="md-btn md-btn-primary uk-margin-small-top">Нэмэх</a>
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
						<thead>p
							<tr>
								<th width="5%">№</th>
								<th width="20%">Гарчиг</th>
								<th width="40%">Дэлгэрэнгүй</th>
								<th width="20%">Төрөл</th>
								<th width="10%">Файл</th>
								<th width="10%">Үзсэн</th>
								<th width="10%">Үйлдэл</th>
							</tr>
						</thead>
						<tbody>
						@foreach($tender_data as $row)
							<tr>
								<td>{{ $row->id }}</td>
								<td><?php echo ucfirst(substr($row->title, 0, 30)); ?></td>
								<td class="uk-text-large uk-text-nowrap">{{ str_limit(strip_tags($row->body), 50) }}</td>
								<td>{{ $row->name }}</td>
								<td><a href="{{asset('/'.$row->file)}}" target="_blank">Файл</a></td>
								<td>{{$row->view}}</td>
								<td class="uk-text-nowrap">
									<a href="{{asset('tender-zasah/'.$row->id)}}"><i class="material-icons md-24">&#xE254;</i></a>
									<a href="{{asset('tender-delid/'.$row->id)}}" class="uk-margin-left" onclick="return confirm('Are you sure want to Delete?')"><i class="material-icons md-24">&#xE872;</i></a>
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
