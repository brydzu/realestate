@extends('cms::layouts.default')

@section('content')
	<div class="text-right page-block-btns"> 
		<a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-square"><i class="fa fa-plus"></i> {{ trans('admin.users.add') }}</a>
	</div>
	<div class="block">
	    <div class="block-content">
		    <div class="table-responsive">
        		
		    @include('cms::snippets.table-users')

        	</div>
	    </div>
	</div>
@stop