            @include('team::team.partial.header')

            <section class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            @include('team::team.partial.aside')
                        </div>
                        <div class="col-md-9 ">
                            <div class="area">
                                <div class="item">
                                    <div class="feature">
                                        <img class="img-responsive center-block" src="{!!url($team->defaultImage('images' , 'xl'))!!}" alt="{{$team->title}}">
                                    </div>
                                    <div class="content">
                                        <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="id">
                    {!! trans('team::team.label.id') !!}
                </label><br />
                    {!! $team['id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="name">
                    {!! trans('team::team.label.name') !!}
                </label><br />
                    {!! $team['name'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="designation">
                    {!! trans('team::team.label.designation') !!}
                </label><br />
                    {!! $team['designation'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="description">
                    {!! trans('team::team.label.description') !!}
                </label><br />
                    {!! $team['description'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="image">
                    {!! trans('team::team.label.image') !!}
                </label><br />
                    {!! $team['image'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="link">
                    {!! trans('team::team.label.link') !!}
                </label><br />
                    {!! $team['link'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_id">
                    {!! trans('team::team.label.user_id') !!}
                </label><br />
                    {!! $team['user_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="user_type">
                    {!! trans('team::team.label.user_type') !!}
                </label><br />
                    {!! $team['user_type'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_at">
                    {!! trans('team::team.label.created_at') !!}
                </label><br />
                    {!! $team['created_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="updated_at">
                    {!! trans('team::team.label.updated_at') !!}
                </label><br />
                    {!! $team['updated_at'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="deleted_at">
                    {!! trans('team::team.label.deleted_at') !!}
                </label><br />
                    {!! $team['deleted_at'] !!}
            </div>
        </div>
    </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('team::team.label.name'))
                       -> required()
                       -> placeholder(trans('team::team.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('designation')
                       -> label(trans('team::team.label.designation'))
                       -> required()
                       -> placeholder(trans('team::team.placeholder.designation'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('description')
                       -> label(trans('team::team.label.description'))
                       -> placeholder(trans('team::team.placeholder.description'))!!}
                </div>

                <div class='col-md-12 col-sm-12'>
                    <div class="form-group">
                        <label for="image" class="control-label col-lg-12 col-sm-12 text-left"> {{trans('team::team.label.image') }}
                        </label>
                        <div class='col-lg-3 col-sm-12'>
                            {!! $team->files('image')
                            ->url($team->getUploadUrl('image'))
                            ->mime(config('filer.image_extensions'))
                            ->dropzone()!!}
                        </div>
                        <div class='col-lg-7 col-sm-12'>
                        {!! $team->files('image')
                        ->editor()!!}
                        </div>
                    </div>
                </div>
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('link')
                       -> label(trans('team::team.label.link'))
                       -> placeholder(trans('team::team.placeholder.link'))!!}
                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



