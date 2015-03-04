
<div class="panel-body">
  <div class="row" >
        <div class="col-md-12">
          @if (Session::has('flash_notification.message'))
            <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! Session::get('flash_notification.message') !!}
            </div>
            @endif
            </div>
          </div>
                @if($errors->has())
                    <div class="alert alert-danger" role="danger" >
                        @foreach ($errors->all() as $error)
                            <ul>
                                <li>{!! $error !!}</li>
                            </ul>
                        @endforeach

                    </div>
                @endif
                <form method="post" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group {!! $errors->first('title')?'has-error':'' !!}">
                            <div class="input-group-addon">{!! 'title' !!}</div>
<input type="textarea" name="title" value="{!!  is_object($ListData)?$ListData->getBody():'' !!}" class ='form-control' autocomplete= 'off'  />
                        </div>
                        <span class="help-block">&nbsp;</span>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group {!! $errors->first('body')?'has-error':'' !!}">
                            <div class="input-group-addon">{!! 'Body' !!}</div>
<textarea name="body" class ='form-control' autocomplete= 'off' > {!!  is_object($ListData)?$ListData->getTitle():'' !!} </textarea>

                        </div>
                        <span class="help-block">&nbsp;</span>
                    </div>
                </div>

                <div class="row">
                    <br/>
                    <div class="col-md-6">
                        <div class="col-sm-5 submitWrap">
                            <button type="submit" class="btn btn-primary btn-md" > {!! 'save' !!}</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>

