<div class="container">
	<div class="row">
		<h1 class="display-4 text-center">{{ Lang::get('ru.skills') }}</h1>
    

          @if(session('status'))
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    {!! session('status') !!} 
                </div>
            </div>
           @endif

    <div style="margin-bottom: 20px;">
      <a href="{{ route('adminSkills.create') }}" class="btn btn-success">Добавить</a>
    </div>

		<table class="table table table-bordered">
  			<thead>
    			<tr>
      				<th scope="col">ID</th>
      				<th scope="col">Название</th>
      				<th scope="col">Процент</th>
      				<th scope="col">Действие</th>
    			</tr>
  			</thead>
  			
      		<tbody>
      		
					@foreach($skills as $skill)
						<tr>
							<td>{{ $skill->id }}</td>
							
							<td>
								{!! Html::link(route('adminSkills.edit',['skills' => $skill->id]),$skill->title) !!}
							</td>
							
							<td>{{ $skill->percent }}</td>
							<td>
								{!!Form::open(['url' => route('adminSkills.destroy',['menus' => 	$skill->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
								{{ method_field('DELETE') }}
								{!! Form::button('Удалить',['class'=> 'btn btn-danger','type'=>'submit' ]) !!}
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
  
      		</tbody>

		</table>
	</div>
</div>