<div class="container">
	<div class="row">
		<h1 class="display-4 text-center">Статьи</h1>
    

          @if(session('status'))
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    {!! session('status') !!} 
                </div>
            </div>
           @endif

    <div style="margin-bottom: 20px;">
      <a href="{{ route('adminBlog.create') }}" class="btn btn-success">Добавить</a>
    </div>

		<table class="table table table-bordered">
  			<thead>
    			<tr>
      				<th scope="col">ID</th>
      				<th scope="col">Заголовок</th>
      				<th scope="col">Псевдоним</th>
              <th scope="col">Текст</th>
              <th scope="col">Изображение</th>
              <th scope="col">Категории</th>
      				<th scope="col">Действие</th>
    			</tr>
  			</thead>
  			
        <tbody>
          @foreach($articles as $article)
            <tr>
              <td>{{ $article->id }}</td>
              <td>{!! Html::link(route('adminBlog.edit',['aricles' => $article->id]),$article->title) !!}</td>
              <td>{{ $article->alias }}</td>
              <td>{{ $article->text }}</td>
              <td><img src='{{ asset("assets/images/$article->images") }}'></td>
              <td>{{ $article->category->name }}</td>
              <td>
                {!!Form::open(['url' => route('adminBlog.destroy',['articles' =>  $article->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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