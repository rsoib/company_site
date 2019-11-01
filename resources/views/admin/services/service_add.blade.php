<div class="container">
	<div class="row">
		<h1 class="display-4 text-center">{{ Lang::get('ru.add_menu') }}</h1>
    	
    	<div style="margin-bottom: 30px;"></div>
    	
    	<div class="col-lg-12">
    		{!! Form::open(['url' => (isset($service->id)) ? route('adminServices.update',['services'=>$service->id]) : route('adminServices.store'), 'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

				<div class="col-md-6 mb-3">
      				<label for="validationServer01">Заголовок:</label>
      				{!! Form::text('title',isset($service->title) ? $service->title : old('title'), ['class'=>'form-control is-valid','placeholder' => 'Введите название сервиса','required']) !!}
    			</div>

       

    			<div class="col-md-6 mb-3" style="margin-bottom: 20px;">
      				<label for="validationServer01">Описание:</label>
      				{!! Form::text('description',isset($service->description) ? $service->description : old('description'), ['class'=>'form-control is-valid','placeholder' => 'Введите описание','required']) !!}
    			</div>
          
       

          <div class="col-md-6 mb-3">
              <label for="validationServer01">Иконка:</label><br>
              @if(isset($service->icon))
                 {{ Html::image('/assets/images/'.$service->icon) }}  
                 {!! Form::hidden('icon',$service->icon) !!}
              @endif
              {!! Form::file('icon',['class' => 'filestyle','data-button', 'style'=>"margin-top: 15px;"]) !!}
          </div>
          
          

          @if(isset($service->id))
            <input type="hidden" name="_method" value="PUT">
          @endif

    			<div class="col-md-8 mb-3">
      				{!! Form::button('Сохранить',['class' => 'btn btn-primary','type' => 'submit']) !!}
    			</div>

    		{!! Form::close() !!}


    	</div>
  		
	</div>
</div>