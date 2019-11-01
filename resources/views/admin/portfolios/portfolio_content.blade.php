<div class="container">
    <div class="row">
        <h1 class="display-4 text-center">{{ Lang::get('ru.services') }}</h1>


        @if(session('status'))
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    {!! session('status') !!}
                </div>
            </div>
        @endif

        <div style="margin-bottom: 20px;">
            <a href="{{ route('adminPortfolios.create') }}" class="btn btn-success">Добавить</a>
        </div>

        <table class="table table table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название</th>
                <th scope="col">Фильтр</th>
                <th scope="col">Изображение</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>

            <tbody>

            @foreach($portfolios as $portfolio)
                <tr>
                    <td>{{ $portfolio->id }}</td>

                    <td>
                        {!! Html::link(route('adminPortfolios.edit',['portfolios' => $portfolio->id]),$portfolio->title) !!}
                    </td>

                    <td>{{ $portfolio->filter->name }}</td>
                    <td>
                        @if(isset($portfolio->images))
                            {!! Html::image('/assets/images/'.$portfolio->images) !!}
                        @endif
                    </td>
                    
                    <td>
                        {!!Form::open(['url' => route('adminPortfolios.destroy',['portfolios' => 	$portfolio->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
