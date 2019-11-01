<div class="container">
	<div class="row">
		<h1 class="display-4 text-center">{{ Lang::get('ru.add_menu') }}</h1>
    	
    	<div style="margin-bottom: 30px;"></div>
    	
    	<div class="col-lg-12">
    		{!! Form::open(['url' => (isset($skill->id)) ? route('adminSkills.update',['menus'=>$skill->id]) : route('adminSkills.store'), 'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

				<div class="col-md-6 mb-3">
      				<label for="validationServer01">Заголовок:</label>
    
      				{!! Form::text('title',isset($skill->title) ? $skill->title : old('title'),      ['class'=>'form-control is-valid','placeholder' => 'Введите название технологии','required']) !!}

    			</div>

    			

    			<div class="col-md-6 mb-3">
      				<label for="validationServer01">Процент:</label>

      				{!! Form::number('percent',isset($skill->percent) ? $skill->percent : old('percent'), ['class'=>'form-control is-valid','placeholder' => 'Введите процент','required']) !!}

    			</div>

          @if(isset($skill->id))
            <input type="hidden" name="_method" value="PUT">
          @endif

    			<div class="col-md-8 mb-3">
      				{!! Form::button('Сохранить',['class' => 'btn btn-primary','type' => 'submit']) !!}
    			</div>

    		{!! Form::close() !!}


    	</div>
  		
	</div>
</div>