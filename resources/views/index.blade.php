@extends('layout.master')

@section('content')

<!-- tasks -->
<div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
	<div class="uk-width-medium-1-2">
		<div class="md-card">
			<div class="md-card-content">
				<h3 class="heading_a uk-margin-bottom">Санал хүсэлт</h3>
				<div class="uk-overflow-container">
					<table class="uk-table">
						<thead>
							<tr>
								<th class="uk-text-nowrap">Нэр</th>
								<th class="uk-text-nowrap">Цахим хаяг</th>
								<th class="uk-text-nowrap uk-text-right">Он / Сар / Өдөр</th>
							</tr>
						</thead>
						<tbody>
							@foreach($support as $srow)
							<tr class="uk-table-middle">
								<td class="uk-width-3-10 uk-text-nowrap">{{$srow->name}}</td>
								<td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge">In progress</span></td>
								<td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">{{$srow->datetime}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="uk-width-medium-1-2">
		<div class="md-card">
			<div class="md-card-content">
				<h3 class="heading_a uk-margin-bottom">Сайтын хандалт</h3>
				<div class="uk-overflow-container">
					<table class="uk-table">
						<thead>
							<tr>
								<th class="uk-text-nowrap">Нэр</th>
								<th class="uk-text-nowrap">Цахим хаяг</th>
								<th class="uk-text-nowrap uk-text-right">Он / Сар / Өдөр</th>
							</tr>
						</thead>
						<tbody>
							@foreach($visited as $vrow)
							<tr class="uk-table-middle">
								<td class="uk-width-3-10 uk-text-nowrap">{{$vrow->ip_address}}</td>
								<td class="uk-width-2-10 uk-text-nowrap"><span class="uk-badge">{{$vrow->counter}}</span></td>
								<td class="uk-width-2-10 uk-text-right uk-text-muted uk-text-small">{{$vrow->datetime}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
	<div class="uk-width-medium-2-2">
		<div class="md-card">
			<div class="md-card-content">
				<h3 class="heading_a uk-margin-bottom">Хамгийн их үзсэн мэдээ</h3>
				<div class="uk-overflow-container">
					<table class="uk-table">
						<thead>
							<tr>
								<th class="uk-text-nowrap">№</th>
								<th class="uk-text-nowrap">Гарчиг</th>
								<th class="uk-text-nowrap">Үзсэн</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($most_news as $row_news)
							<tr class="uk-table-middle">
								<td class="uk-width-3-10 uk-text-nowrap" style="width: 10%"><?php echo $i++; ?></td>
								<td class="uk-width-2-10 uk-text-nowrap" style="width: 90%">{{$row_news->title}}</td>
								<td class="uk-width-2-10 uk-text-nowrap" style="width: 10%">{{$row_news->view}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card-content'}">
	<div class="uk-width-medium-2-2">
		<div class="md-card">
			<div class="md-card-content">
				<h3 class="heading_a uk-margin-bottom">Хамгийн их үзсэн тендер</h3>
				<div class="uk-overflow-container">
					<table class="uk-table">
						<thead>
							<tr>
								<th class="uk-text-nowrap">№</th>
								<th class="uk-text-nowrap">Гарчиг</th>
								<th class="uk-text-nowrap">Үзсэн</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							@foreach($most_tender as $row_tender)
							<tr class="uk-table-middle">
								<td class="uk-width-3-10 uk-text-nowrap" style="width: 10%"><?php echo $i++; ?></td>
								<td class="uk-width-2-10 uk-text-nowrap" style="width: 90%">{{$row_tender->title}}</td>
								<td class="uk-width-2-10 uk-text-nowrap" style="width: 10%">{{$row_tender->view}}</td>
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
