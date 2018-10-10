    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#team" data-toggle="tab">{!! trans('team::team.tab.name') !!}</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='UPDATE' data-form='#team-team-edit'  data-load-to='#team-team-entry' data-datatable='#team-team-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CANCEL' data-load-to='#team-team-entry' data-href='{{guard_url('team/team')}}/{{$team->getRouteKey()}}'><i class="fa fa-times-circle"></i> {{ trans('app.cancel') }}</button>

            </div>
        </ul>
        {!!Form::vertical_open()
        ->id('team-team-edit')
        ->method('PUT')
        ->enctype('multipart/form-data')
        ->action(guard_url('team/team/'. $team->getRouteKey()))!!}
        <div class="tab-content clearfix">
            <div class="tab-pane active" id="team">
                <div class="tab-pan-title">  {{ trans('app.edit') }}  {!! trans('team::team.name') !!} [{!!$team->name!!}] </div>
                @include('team::admin.team.partial.entry', ['mode' => 'edit'])
            </div>
        </div>
        {!!Form::close()!!}
    </div>