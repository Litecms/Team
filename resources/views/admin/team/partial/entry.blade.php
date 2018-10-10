            <div class='row'>
                <div class='col-md-6 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('team::team.label.name'))
                       -> required()
                       -> placeholder(trans('team::team.placeholder.name'))!!}
                </div>

                <div class='col-md-6 col-sm-6'>
                       {!! Form::text('designation')
                       -> label(trans('team::team.label.designation'))
                       -> required()
                       -> placeholder(trans('team::team.placeholder.designation'))!!}
                </div>

                <div class='col-md-12 col-sm-6'>
                       {!! Form::textarea('description')
                       -> label(trans('team::team.label.description'))
                       -> placeholder(trans('team::team.placeholder.description'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('team::team.label.image') }}
                        </label>
                        <div class='col-lg-12 col-sm-12'>
                            {!! $team->files('image')
                            ->url($team->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-12 col-sm-12'>
                        {!! $team->files('image')
                        ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-6 col-sm-6'>
                       {!! Form::text('link[ti-twitter-alt]')
                       -> label('Twitter')
                       -> placeholder(trans('team::team.placeholder.link'))!!}

                       {!! Form::text('link[ti-linkedin]')
                       -> label('Linked In')
                       -> placeholder(trans('team::team.placeholder.link'))!!}

                       {!! Form::text('link[ti-facebook]')
                       -> label('Facebook')
                       -> placeholder(trans('team::team.placeholder.link'))!!}

                       {!! Form::text('link[ti-instagram]')
                       -> label('Instagram')
                       -> placeholder(trans('team::team.placeholder.link'))!!}
                </div>
            </div>