@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Edit Listing <span class="float-right"><a href="/dashboard" class="btn btn-info btn-sm">Go Back</a></span></div>

            <div class="card-body">
				<form method="POST" action="/listings/{{ $listing->id }}">
					@csrf
					<input type="hidden" name="_method" value="PUT">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" class="form-control" placeholder="Company Name" value="{{ $listing->name }}">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control" placeholder="Contact Email" value="{{ $listing->email }}">
					</div>
					<div class="form-group">
						<label for="website">Website</label>
						<input type="text" name="website" class="form-control" placeholder="Contact Website" value="{{ $listing->website }}">
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" name="phone" class="form-control" placeholder="Contact Phone" value="{{ $listing->phone }}">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" name="address" class="form-control" placeholder="Contact Address" value="{{ $listing->address }}">
					</div>
					<div class="form-group">
						<label for="bio">Bio</label>
						<input type="text" name="bio" class="form-control" placeholder="Bio" value="{{ $listing->bio }}">
					</div>
					<input type="submit" value="Save" class="btn btn-primary">
				</form>
            </div>
        </div>
    </div>
</div>
@endsection