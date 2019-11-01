<div class="container">
	<div class="row">
		<h1 class="display-4 text-center">{{ Lang::get('ru.add_menu') }}</h1>
    	
    	<div style="margin-bottom: 30px;"></div>
    	
    	<div class="col-lg-12">
    		{!! Form::open(['url' => (isset($portfolio->id)) ? route('adminPortfolios.update',['portfolios'=>$portfolio->id]) : route('adminPortfolios.store'), 'class'=>'contact-form','method'=>'POST','enctype'=>'multipart/form-data']) !!}

				<div class="col-md-6 mb-3">
      				<label for="validationServer01">Заголовок:</label>
      				{!! Form::text('title',isset($portfolio->title) ? $portfolio->title : old('title'), ['class'=>'form-control is-valid','placeholder' => 'Введите название портфолио','required']) !!}
    			</div>

       <div class="col-md-6 mb-3" style="margin-bottom: 20px;">
              <label for="validationServer01">Фильтр:</label>
              <select name="filter_id" id="" class="form-control">
                <?php if (isset($portfolio)): ?>
                  <option value="{{ $portfolio->filter->id }}">{{ $portfolio->filter->name }}</option>
                <?php endif ?>
                  <?php foreach ($filters as $key => $filter): ?>
                      <option value="{{ $filter->id }}">{{ $filter->name }}</option>
                  <?php endforeach ?>
              </select>

          </div>
       

          <div class="col-md-6 mb-3">
              <label for="validationServer01">Изображение:</label><br>
              @if(isset($portfolio->images))
                 {{ Html::image('/assets/images/'.$portfolio->images) }}  
                 {!! Form::hidden('images',$portfolio->images) !!}
              @endif
              {!! Form::file('images',['class' => 'filestyle','data-button', 'style'=>"margin-top: 15px;"]) !!}
          </div>
          
         

          @if(isset($portfolio->id))
            <input type="hidden" name="_method" value="PUT">
          @endif

    			<div class="col-md-8 mb-3">
      				{!! Form::button('Сохранить',['class' => 'btn btn-primary','type' => 'submit']) !!}
    			</div>

    		{!! Form::close() !!}


    	</div>
  		
	</div>
</div>