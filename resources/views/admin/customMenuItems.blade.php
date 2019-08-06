@foreach($items as $item)
	<li class="dropdown {{ ($item->active == true) ? 'active' : '' }}">
		<a href="{{ $item->url() }}">{{ $item->title }} <i class="{{ ($item->id == 7) ? 'fa fa-angle-down' : '' }}"></i></a>
		
	</li>
@endforeach