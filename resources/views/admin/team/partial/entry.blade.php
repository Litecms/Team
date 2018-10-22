            <div class='row'>
                <div class='col-md-4 col-sm-12'>
                       {!! Form::text('name')
                       -> label(trans('team::team.label.name'))
                       -> required()
                       -> placeholder(trans('team::team.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-12'>
                       {!! Form::text('designation')
                       -> label(trans('team::team.label.designation'))
                       -> required()
                       -> placeholder(trans('team::team.placeholder.designation'))!!}
                </div>

                <div class='col-md-4 col-sm-12'>
                       {!! Form::text('order')
                       -> label(trans('team::team.label.order'))
                       -> placeholder(trans('team::team.placeholder.order'))!!}
                </div>

                <div class='col-md-8 col-sm-12'>
                       {!! Form::textarea('description')
                       -> rows(11)
                       -> label(trans('team::team.label.description'))
                       -> placeholder(trans('team::team.placeholder.description'))!!}
                </div>
                <div class='col-md-4'>

                         {!! Form::url('link[twitter]')
                         -> label('Twitter')
                         -> placeholder(trans('team::team.placeholder.link'))!!}

                         {!! Form::url('link[linkedin]')
                         -> label('Linked In')
                         -> placeholder(trans('team::team.placeholder.link'))!!}

                         {!! Form::url('link[facebook]')
                         -> label('Facebook')
                         -> placeholder(trans('team::team.placeholder.link'))!!}

                         {!! Form::url('link[instagram]')
                         -> label('Instagram')
                         -> placeholder(trans('team::team.placeholder.link'))!!}

                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label text-left"> {{trans('team::team.label.image') }}
                        </label>
                        <div class="row">
                          <div class='col-lg-12 col-sm-12'>
                          @if($mode == 'create' || $mode == 'edit')
                                  {!! $team->files('image')
                                  ->url($team->getUploadUrl('image'))
                                  ->mime(config('filer.image_extensions'))
                                  ->dropzone()!!}
                          @else
                              {!! $team->files('image')
                              ->show()!!}
                          @endif
                          </div>
                        </div>



                    </div>
                </div>
            </div>
