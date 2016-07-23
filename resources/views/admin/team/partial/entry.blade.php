{!! Form::hidden('upload_folder')!!}
<div class='col-md-4 col-sm-6'>
       {!! Form::text('first_name')
       -> label(trans('team::team.label.first_name'))
       -> placeholder(trans('team::team.placeholder.first_name'))
       -> required()!!}
</div>

<div class='col-md-4 col-sm-6'>
       {!! Form::text('last_name')
       -> label(trans('team::team.label.last_name'))
       -> placeholder(trans('team::team.placeholder.last_name'))
       -> required()!!}
</div>

<div class='col-md-4 col-sm-6'>
       {!! Form::text('designation')
       -> label(trans('team::team.label.designation'))
       -> placeholder(trans('team::team.placeholder.designation'))
       -> required()!!}
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
       {!! Form::email('gmail')
       -> label(trans('team::team.label.gmail'))
       -> placeholder(trans('team::team.placeholder.gmail'))
       -> required()!!}
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
       {!! Form::select('status')
       -> options(trans('team::team.options.status'))
       -> label(trans('team::team.label.status'))
       -> placeholder(trans('team::team.placeholder.status'))
       -> required()!!}
</div>
<div class='col-md-12 col-sm-12'>
       {!! Form::textarea('description')
       -> label(trans('team::team.label.description'))
       -> addClass('html-editor')
       -> placeholder(trans('team::team.placeholder.description'))!!}
</div>




 <!-- <div class='col-md-4 col-sm-6'>
      <label for="type">Most Valuable person?</label>
       {!! Form::hidden('most_valuable_person','')
      ->forceValue('No')!!}
      {!! Form::checkbox('most_valuable_person','')
      ->forceValue('Yes')
      ->inline()!!}


</div> -->
