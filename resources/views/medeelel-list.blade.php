@extends('layout.master')

@section('content')

<div class="md-card">
	<div class="md-card-content">
		<h3>Хүний нөөцийн ил тод байдал</h3>
		<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1">
				<div class="uk-overflow-container">
					<table class="uk-table uk-table-align-vertical">
						<thead>
							<tr>
								<th width="5%">№</th>
								<th width="50%">Гарчиг</th>
								<th width="10%">Засах</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($hunii_noots_select as $row)
								<tr>
									<td><?php echo $i++; ?></td>
									<td class="uk-text-large uk-text-nowrap">{{$row->title}}</td>
									<td class="uk-text-nowrap">
										<a href="{{asset('/huniinoots-zasah/'.$row->id)}}"><i class="material-icons md-24">&#xE254;</i></a>
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

<div class="md-card">
	<div class="md-card-content">
		<h3>Төсөв, санхүүгийн ил тод байдал</h3>
		<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1">
				<div class="uk-overflow-container">
					<table class="uk-table uk-table-align-vertical">
						<thead>
							<tr>
								<th width="5%">№</th>
								<th width="50%">Гарчиг</th>
								<th width="10%">Засах</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($tosow_sankhuu_select as $row)
								<tr>
									<td><?php echo $i++; ?></td>
									<td class="uk-text-large uk-text-nowrap">{{$row->title}}</td>
									<td class="uk-text-nowrap">
										<a href="{{asset('/tosowsankhuu-zasah/'.$row->id)}}"><i class="material-icons md-24">&#xE254;</i></a>
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

<div class="md-card">
	<div class="md-card-content">
		<h3>Үйл ажиллагааны ил тод байдал</h3>
		<div class="uk-grid" data-uk-grid-margin>
			<div class="uk-width-1-1">
				<div class="uk-overflow-container">
					<table class="uk-table uk-table-align-vertical">
						<thead>
							<tr>
								<th width="5%">№</th>
								<th width="50%">Гарчиг</th>
								<th width="10%">Засах</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($uil_ajillagaa_select as $row)
								<tr>
									<td><?php echo $i++; ?></td>
									<td class="uk-text-large uk-text-nowrap">{{$row->title}}</td>
									<td class="uk-text-nowrap">
										<a href="{{asset('/uilajillagaa-zasah/'.$row->id)}}"><i class="material-icons md-24">&#xE254;</i></a>
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
