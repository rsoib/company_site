@foreach($items as $item)
	<tr>
		<td>{{ $item->id }}</td>
		<td style="text-align:left;">{{ $paddingLeft }} {!! Html::link(route('adminMenus.edit',['menus' => $item->id]),$item->title) !!}</td>
		<td><a href="{{ $item->url() }}">{{ $item->url() }}</a></td>
		<td>
			{!!Form::open(['url' => route('adminMenus.destroy',['menus' => $item->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
				{{ method_field('DELETE') }}
				{!! Form::button('Удалить',['class'=> 'btn btn-danger','type'=>'submit' ]) !!}
			{!! Form::close() !!}	
		</td>

	</tr>

	<tr>
		@if($item->hasChildren())
		
				@include('admin.menu.customAdminMenu',array('items' => $item->children(),'paddingLeft' => $paddingLeft.'--'))
		@endif
	</tr>

@endforeach