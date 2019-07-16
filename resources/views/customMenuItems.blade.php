@foreach($items as $item)
	<li class="dropdown">
		<a href="{{ $item->url() }}">{{ $item->title }}</a>
		@if($item->hasChildren())
			<ul class="dropdown-menu">
				@include('customMenuItems',['items'=>$item->children()])
			</ul>
		@endif
	</li>
@endforeach