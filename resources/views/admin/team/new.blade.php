<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">  {!! trans('team::team.names') !!} [{!! trans('team::team.text.preview') !!}]</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-primary btn-sm"  data-action='NEW' data-load-to='#team-team-entry' data-href='{!!guard_url('team/team/create')!!}'><i class="fa fa-plus-circle"></i> {{ trans('app.new') }} </button>
        </div>
    </div>
</div>