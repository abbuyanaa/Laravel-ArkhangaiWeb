@extends('layout.master')

@section('content')

<div class="md-card">
	<div class="md-card-content">
		<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1">
				<div class="uk-overflow-container">
					<table class="uk-table uk-table-align-vertical" id="dt_individual_search">
						<thead>
							<tr>
								<th width="5%">№</th>
								<th width="15%">Нэр</th>
								<th width="15%">Цахим хаяг</th>
								<th width="15%">Утас</th>
								<th width="10%">Статус</th>
								<th>Он/сар/өдөр</th>
								<th>Үйлдэл</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($support_data as $row)
							<tr>
								<td><?php echo $i++; ?></td>
								<td class="uk-text-nowrap">{{$row->name}}</td>
								<td>{{$row->email}}</td>
								<td class="uk-text-nowrap">{{$row->phone}}</td>
								<td><?php
								if($row->visited == 0) {
									echo '<span class="uk-badge uk-badge-danger">Үзээгүй</span>';
								} else {
									echo '<span class="uk-badge uk-badge-success">Үзсэн</span>';
								} ?>
							</td>
							<td>{{$row->datetime}}</td>
							<td class="uk-text-nowrap">
								<a href="{{asset('/support-view/'.$row->id)}}"><i class="material-icons md-24">&#xE8F4;</i></a>
								<a href="{{asset('/support-delid/'.$row->id)}}" class="uk-margin-left" onclick="return confirm('Are you sure want to Delete?')"><i class="material-icons md-24">&#xE872;</i></a>
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
