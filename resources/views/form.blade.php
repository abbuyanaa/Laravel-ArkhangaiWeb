@extends('layout.master')

@section('content')

<div class="uk-grid">
	<div class="uk-width-medium-4-5 uk-container-center">
		<div class="md-card">
			<div class="md-card-content large-padding">

				<h2 class="heading_b">1. Billing Address</h2>
				<div class="uk-grid uk-grid-divider uk-margin-medium-bottom" data-uk-grid-margin>
					<div class="uk-width-medium-2-3">
						<div class="uk-grid" data-uk-grid-margin>
							<div class="uk-width-medium-1-2">
								<label>First Name</label>
								<input type="text" class="md-input" />
							</div>
							<div class="uk-width-medium-1-2">
								<label>Last Name</label>
								<input type="text" class="md-input" />
							</div>
						</div>
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<label>Company (optional)</label>
								<input type="text" class="md-input" />
							</div>
						</div>
						<div class="uk-grid" data-uk-grid-margin>
							<div class="uk-width-1-1">
								<label>Address (line 1)</label>
								<input type="text" class="md-input" />
							</div>
							<div class="uk-width-1-1">
								<label>Address (line 2)</label>
								<input type="text" class="md-input" />
							</div>
						</div>
						<div class="uk-grid" data-uk-grid-margin>
							<div class="uk-width-1-3">
								<label>Postal code</label>
								<input type="text" class="md-input" />
							</div>
							<div class="uk-width-2-3">
								<select id="select_demo_4" data-md-selectize>
									<option value="">Country...</option>
									<option value="c1">Country 1</option>
									<option value="c2">Country 2</option>
									<option value="c3">Country 3</option>
								</select>
							</div>
						</div>
					</div>
					<div class="uk-width-medium-1-3">
						<strong>About Address</strong><br>
						<p class="uk-text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolor dolorum excepturi nulla perferendis quam quas temporibus. Aliquam aliquid, amet asperiores, culpa ea eos fuga ipsa molestiae tempore veniam veritatis?</p>
					</div>
				</div>
				<hr class="uk-grid-divider">

				<h2 class="heading_b">2. Shipping Method</h2>
				<div class="uk-grid uk-grid-divider" data-uk-grid-margin>
					<div class="uk-width-medium-2-3">
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<input type="radio" name="sm" id="sm_regular" data-md-icheck />
								<label for="sm_regular" class="inline-label">Regular (6-18 days) - FREE</label>
							</div>
						</div>
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<input type="radio" name="sm" id="sm_express" data-md-icheck />
								<label for="sm_express" class="inline-label">Express (3-5 days) - $12.00</label>
							</div>
						</div>
					</div>
					<div class="uk-width-medium-1-3">
						<p class="uk-text-muted"><a href="#modal_shipping" data-uk-modal>See more info on shipping</a></p>
						<div class="uk-modal" id="modal_shipping">
							<div class="uk-modal-dialog">
								<button type="button" class="uk-modal-close uk-close"></button>
								<div class="uk-modal-header">
									<h3 class="uk-modal-title">Shipping Info</h3>
								</div>
								<p>With customers all around the world, we are happy to send our products to
									anywhere that has a letterbox. P.O. Boxes in the U.S. and Canada can be sent
								to with the regular shipping option.</p>
								<p>While we always dispatch an order within 2 working days, we can???t directly
								control the delivery times beyond our end.</p>
								<p>As a general rule, assume that regular post will take 3???8 working days for
									Australia, North America and the UK, and 6???28 working days for the rest of
									the world. Express post is generally 1???3 working days for Australia, North
								America and the UK, and 2???8 working days for other International. ???</p>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<hr class="uk-grid-divider">

				<h2 class="heading_b">3. Payment Method</h2>
				<div class="uk-grid uk-grid-divider" data-uk-grid-margin>
					<div class="uk-width-medium-2-3">
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<input type="radio" name="pm" id="pm_credit_card" data-md-icheck />
								<label for="pm_credit_card" class="inline-label"><img src="assets/img/ecommerce/payment_icons/Visa.png" alt=""><img src="assets/img/ecommerce/payment_icons/MasterCard.png" alt=""><img src="assets/img/ecommerce/payment_icons/Diners%20Club.png" alt=""></label>
							</div>
							<div class="uk-width-1-1">
								<div class="js-pm_info pm_credit_card uk-margin-top" style="display: none">
									<div class="uk-grid" data-uk-grid-margin>
										<div class="uk-width-medium-2-4">
											<label>Card Number</label>
											<input type="text" class="md-input" />
										</div>
										<div class="uk-width-medium-1-4">
											<label>Expiration Date</label>
											<input type="text" class="md-input label-fixed" placeholder="MM/YYYY"/>
										</div>
										<div class="uk-width-medium-1-4">
											<label>Card Verification Number</label>
											<input type="text" class="md-input"/>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<input type="radio" name="pm" id="pm_paypal" data-md-icheck />
								<label for="pm_paypal" class="inline-label"><img src="assets/img/ecommerce/payment_icons/PayPal.png" alt=""></label>
							</div>
							<div class="uk-width-1-1">
								<div class="js-pm_info pm_paypal uk-margin-top" style="display: none">
									<div class="uk-grid" data-uk-grid-margin>
										<div class="uk-width-medium-1-1">
											<label>PayPal Account</label>
											<input type="text" class="md-input" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="uk-width-medium-1-3">
						<strong>Payment Methods</strong><br>
						<p class="uk-text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolor dolorum excepturi nulla perferendis quam quas temporibus. Aliquam aliquid, amet asperiores, culpa ea eos fuga ipsa molestiae tempore veniam veritatis?</p>
					</div>
				</div>
				<hr class="uk-grid-divider">

				<div class="uk-grid uk-margin-large-top" data-uk-grid-margin>
					<div class="uk-width-medium-1-1">
						<button class="md-btn md-btn-large md-btn-primary" type="button">Place Order</button>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

@endsection
