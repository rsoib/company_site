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
            <a href="{{ route('adminServices.create') }}" class="btn btn-success">Добавить</a>
        </div>

        <table class="table table table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название</th>
                <th scope="col">Описние</th>
                <th scope="col">Иконка</th>
                <th scope="col">Действие</th>
            </tr>
            </thead>

            <tbody>

            @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>

                    <td>
                        {!! Html::link(route('adminServices.edit',['services' => $service->id]),$service->title) !!}
                    </td>

                    <td>{{ $service->description }}</td>
                    <td>
                        @if(isset($service->icon))
                            {!! Html::image('assets/images'.$service->icon) !!}
                        @endif
                    </td>
                    <td>
                        {!!Form::open(['url' => route('adminServices.destroy',['menus' => 	$service->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
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
