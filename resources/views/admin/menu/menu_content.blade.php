<div class="container">
	<div class="row">
		<h1 class="display-4 text-center">{{ Lang::get('ru.menusItem') }}</h1>

		<table class="table table table-bordered">
  			<thead>
    			<tr>
      				<th scope="col">#</th>
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