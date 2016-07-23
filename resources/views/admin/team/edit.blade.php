<div class="box-header with-border">
    <h3 class="box-title"> Edit  {!! trans('team::team.name') !!} [{!!$team->first_name!!} {!!$team->last_name!!}] </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#team-team-edit'  data-load-to='#team-team-entry' data-datatable='#team-team-list'><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#team-team-entry' data-href='{{trans_url('admin/team/team')}}/{{$team->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('cms.cancel') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#team" data-toggle="tab">{!! trans('team::team.tab.name') !!}</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('team-team-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(trans_url('admin/team/team/'. $team->getRouteKey()))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="team">
                @include('team::admin.team.partial.entry')
                 <div class='col-md-4 col-sm-6'>
                      <label>Photo</label>
                      {!!Filer::uploader('photo',@$team->getUploadURL('photo'),1)!!}
                      {!!Filer::editor('photo', @$team['photo'],1) !!}
                </div>
            </div>
        </div>
        {!!Form::close()!!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>