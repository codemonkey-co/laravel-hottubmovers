@extends('partials.master')



<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h3>Admin - Indianapolis</h3>
			<form method="POST" action="dashboard">
				@if($renter_info)
					<input type="hidden" name="_method" value="put" />
				@endif
				{{ csrf_field() }}
				<div class="form-group">
					<label for="rented_by">Rented By</label>
					<input type="text" name="rented_by" id="rented_by" class="form-control" placeholder="Rented By" value="@if($renter_info){{ $renter_info->rented_by }}@endif" autofocus>
				</div>
				<div class="form-group">
					<label for="phone_number_show">Phone Number</label>
					<input type="text" name="phone_number_show" id="phone_number_show" class="form-control" placeholder="317-555-5555" value="@if($renter_info){{ $renter_info->phone_number_show }}@endif">
				</div>
				<div class="form-group">
					<label for="email_address">Renter's Email Address</label>
					<input type="text" name="email_address" id="email_address" class="form-control" placeholder="name@domain.com" value="@if($renter_info){{ $renter_info->email_address }}@endif">
				</div>
				<div class="form-group">
					<label for="phone_number">Renter's Phone Number</label>
					<input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="317-555-5555" value="@if($renter_info){{ $renter_info->phone_number }}@endif">
				</div>
				<div class="form-group">
					<label for="provider">Provider</label>
					<select name="provider" id="provider" class="form-control" required>
						@foreach($providers as $provider_sms => $provider)
							<option value="{{ $provider_sms }}"  @if($renter_info && $provider_sms == $renter_info->provider) selected="selected" @endif>{{ $provider }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="truck_fee">Truck Fee</label>
					<input type="text" name="truck_fee" id="truck_fee" class="form-control" placeholder="$80.00" value="@if($renter_info){{ $renter_info->truck_fee }}@endif">
				</div>
				<div class="form-group">
					<label for="per_hour">$$ Per Hour</label>
					<input type="text" name="per_hour" id="per_hour" class="form-control" placeholder="$149.00" value="@if($renter_info){{ $renter_info->per_hour }}@endif">
				</div>
				<div class="form-group">
					<label for="min_men">Minimum Men</label>
					<input type="text" name="min_men" id="min_men" class="form-control" placeholder="4 Men" value="@if($renter_info){{ $renter_info->min_men }}@endif">
				</div>
				<div class="form-group">
					<label for="min_hours">Minimum Hours</label>
					<input type="text" name="min_hours" id="min_hours" class="form-control" placeholder="2 hour" value="@if($renter_info){{ $renter_info->min_hours }}@endif">
				</div>
				<div class="form-group">
					<label for="send_email">Send Email?</label>
					<input type="checkbox" name="send_email" id="send_email" class="form-control" @if($renter_info && $renter_info->send_email == 'on') checked="true" @endif>
				</div>
				<div class="form-group">
					<label for="send_sms">Send SMS?</label>
					<input type="checkbox" name="send_sms" id="send_sms" class="form-control" @if($renter_info && $renter_info->send_sms == 'on') checked="true" @endif>
				</div>
				<div class="form-group">
					<button type="submit" class="form-control">Submit</button>
				</div>
				<div class="form-group">
					<a class="btn btn-primary form-control" href="/logout">logout</a>
				</div>
			</form>
		</div>
	</div>
</div>