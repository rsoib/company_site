@foreach($items as $item)
	<li class="dropdown">
		<a href="{{ $item->url() }}">{{ $item->title }} <i class="{{ ($item->id == 7) ? 'fa fa-angle-down' : '' }}"></i></a>
		@if($item->hasChildren())
			<ul class="dropdown-menu">
				@include('customMenuItems',['items'=>$item->children()])
			</ul>
		@endif
	</li>
@endforeach