<div class="container">
	<div class="row">
		<h1 class="display-4 text-center">{{ Lang::get('ru.add_menu') }}</h1>
    	
    	<div style="margin-bottom: 30px;"></div>
    	
    	<div class="col-lg-12">
    		{!! Form::open(['url' => (isset($menu->id)) ? route('adminMenus.update',['menus'=>$menu->id]) : route('adminMenus.store'), 'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

				<div class="col-md-6 mb-3">
      				<label for="validationServer01">Заголовок:</label>
    
      				{!! Form::text('title',isset($menu->title) ? $menu->title : old('title'), ['class'=>'form-control is-valid','placeholder' => 'Введите название пункта','required']) !!}

    			</div>

    			<div class="col-md-6 mb-3" style="margin-bottom: 20px;">
      				<label for="validationServer01">Родительский пункт меню:</label>
    
      				{!! Form::select('parent',$menus,isset($menu->parent) ? $menu->parent : null,['class'=>'form-control is-valid']) !!}

    			</div>

    			<div class="col-md-6 mb-3">
      				<label for="validationServer01">Путь:</label>

      				{!! Form::text('path',isset($menu->path) ? $menu->path : old('path'), ['class'=>'form-control is-valid','placeholder' => 'Введите путь для ссылки','required']) !!}

    			</div>

          @if(isset($menu->id))
            <input type="hidden" name="_method" value="PUT">
          @endif

    			<div class="col-md-8 mb-3">
      				{!! Form::button('Сохранить',['class' => 'btn btn-primary','type' => 'submit']) !!}
    			</div>

    		{!! Form::close() !!}


    	</div>
  		
	</div>
</div>