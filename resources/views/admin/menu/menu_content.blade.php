<div class="container">
	<div class="row">
		<h1 class="display-4 text-center">{{ Lang::get('ru.menusItem') }}</h1>
    

          @if(session('status'))
            <div class="col-lg-12">
                <div class="alert alert-success" role="alert">
                    {!! session('status') !!} 
                </div>
            </div>
           @endif

    <div style="margin-bottom: 20px;">
      <a href="{{ route('adminMenus.create') }}" class="btn btn-success">Добавить новый пункт</a>
    </div>

		<table class="table table table-bordered">
  			<thead>
    			<tr>
      				<th scope="col">ID</th>
      				<th scope="col">Название</th>
      				<th scope="col">Ссылка</th>
      				<th scope="col">Действие</th>
    			</tr>
  			</thead>
  			
        @if($menus)
            @include('admin.menu.customAdminMenu',array('items' => $menus->roots(), 'paddingLeft' => ''))
        @endif

		</table>
	</div>
</div>