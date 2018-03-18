@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-success btn-sm">Add Listing</a></span></div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <h3>Your Listings</h3>
                @if(count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                        </tr>
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{ $listing->name }}</td>
                                <td>
                                    <form method="POST" action="/listings/{{ $listing->id }}" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" class="btn btn-danger float-right" value="Delete">
                                    </form>
                                    <a class="btn btn-info float-right" href="/listings/{{ $listing->id }}/edit">Edit</a>&nbsp;
                                </td>
                            </tr>
                        @endforeach
                    </table>

                @endif
            </div>
        </div>
    </div>
</div>

@endsection
