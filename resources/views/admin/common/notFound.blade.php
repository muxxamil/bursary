@extends('admin.common.layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Not Found') }}</div>

                <div class="card-body">
                    <div class="alert alert-error" role="alert">
                        Page not found!
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
