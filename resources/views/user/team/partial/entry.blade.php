                {!! Form::hidden('upload_folder')!!}
                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('name')
                       -> label(trans('team::team.label.name'))
                       -> placeholder(trans('team::team.placeholder.name'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('designation')
                       -> label(trans('team::team.label.designation'))
                       -> placeholder(trans('team::team.placeholder.designation'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('photo')
                       -> label(trans('team::team.label.photo'))
                       -> placeholder(trans('team::team.placeholder.photo'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('description')
                       -> label(trans('team::team.label.description'))
                       -> placeholder(trans('team::team.placeholder.description'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('most_valuable_person')
                       -> label(trans('team::team.label.most_valuable_person'))
                       -> placeholder(trans('team::team.placeholder.most_valuable_person'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('facebook')
                       -> label(trans('team::team.label.facebook'))
                       -> placeholder(trans('team::team.placeholder.facebook'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('tumblr')
                       -> label(trans('team::team.label.tumblr'))
                       -> placeholder(trans('team::team.placeholder.tumblr'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('gmail')
                       -> label(trans('team::team.label.gmail'))
                       -> placeholder(trans('team::team.placeholder.gmail'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('behance')
                       -> label(trans('team::team.label.behance'))
                       -> placeholder(trans('team::team.placeholder.behance'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('twitter')
                       -> label(trans('team::team.label.twitter'))
                       -> placeholder(trans('team::team.placeholder.twitter'))!!}
                </div>

                <div class='col-md-4 col-sm-6'>
                       {!! Form::text('status')
                       -> label(trans('team::team.label.status'))
                       -> placeholder(trans('team::team.placeholder.status'))!!}
                </div>

{!!   Form::actions()
->large_primary_submit('Submit')
->large_inverse_reset('Reset')
!!}
