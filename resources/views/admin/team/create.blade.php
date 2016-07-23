<div class="box-header with-border">
    <h3 class="box-title"> {{ trans('cms.new') }}  {!! trans('team::team.name') !!} </h3>
    <div class="box-tools pull-right">
        <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#team-team-create'  data-load-to='#team-team-entry' data-datatable='#team-team-list'><i class="fa fa-floppy-o"></i> Save</button>
        <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#team-team-entry' data-href='{{trans_url('admin/team/team/0')}}'><i class="fa fa-times-circle"></i> {{ trans('cms.close') }}</button>
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
</div>
<div class="box-body" >
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Team</a></li>
        </ul>
        {!!Form::vertical_open()
        ->id('team-team-create')
        ->method('POST')
        ->files('true')
        ->action(trans_url('admin/team/team'))!!}
        <div class="tab-content">
            <div class="tab-pane active" id="details">
                @include('team::admin.team.partial.entry')
                <div class='col-md-4 col-sm-6'>
                      <label>Photo</label>
                      {!!Filer::uploader('photo',@$team->getUploadURL('photo'),1)!!}
                      {!!Filer::editor('photo', @$team['photo'],1) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="box-footer" >
    &nbsp;
</div>