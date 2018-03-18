@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Create Listing</div>

            <div class="card-body">
				<form method="POST" action="/listing">
					@csrf
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" placeholder="Company Name">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" placeholder="Contact Email">
					</div>
					<div class="form-group">
						<label for="website">Website</label>
						<input type="text" name="website" class="form-control" placeholder="Contact Website">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" name="phone" class="form-control" placeholder="Contact Phone">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" name="address" class="form-control" placeholder="Contact Address">
					</div>
					<div class="form-group">
						<label for="bio">Bio</label>
						<input type="text" name="bio" class="form-control" placeholder="Bio">
					</div>
					<input type="submit" value="Create" class="btn btn-primary">
				</form>
            </div>
        </div>
    </div>
</div>
@endsection