<div class="box-header with-border">
    <h3 class="box-title"> {{ trans('cms.view') }}   {!! trans('team::team.name') !!}  [{!!$team->first_name!!} {!!$team->last_name!!}]  </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-success btn-sm" data-action='NEW' data-load-to='#team-team-entry' data-href='{{trans_url('admin/team/team/create')}}'><i class="fa fa-times-circle"></i> New</button>
        @if($team->id )
        <button type="button" class="btn btn-primary btn-sm" data-action="EDIT" data-load-to='#team-team-entry' data-href='{{ trans_url('/admin/team/team') }}/{{$team->getRouteKey()}}/edit'><i class="fa fa-pencil-square"></i> Edit</button>
        <button type="button" class="btn btn-danger btn-sm" data-action="DELETE" data-load-to='#team-team-entry' data-datatable='#team-team-list' data-href='{{ trans_url('/admin/team/team') }}/{{$team->getRouteKey()}}' >
        <i class="fa fa-times-circle"></i> Delete
        </button>
        @endif
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">  {!! trans('team::team.name') !!}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('team-team-show')
        ->method('POST')
        ->files('true')
        ->action(trans_url('admin/team/team'))!!}
            <div class="tab-content">
                <div class="tab-pane active" id="details">
                    @include('team::admin.team.partial.entry')
                     <div class='col-md-4 col-sm-6'>
                      <label>Photo</label>
                      <div claa="row">
                      <img src="{!!url(@$team->defaultImage('team.sm','photo'))!!}">
                      </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>