@extends('admin::curd.index')
@section('heading')
<i class="fa fa-file-text-o"></i> {!! trans('team::team.name') !!} <small> {!! trans('cms.manage') !!} {!! trans('team::team.names') !!}</small>
@stop

@section('title')
{!! trans('team::team.names') !!}
@stop

@section('breadcrumb')
<ol class="breadcrumb">
    <li><a href="{!! trans_url('admin') !!}"><i class="fa fa-dashboard"></i> {!! trans('cms.home') !!} </a></li>
    <li class="active">{!! trans('team::team.names') !!}</li>
</ol>
@stop

@section('entry')
<div class="box box-warning" id='team-team-entry'>
</div>
@stop

@section('tools')
@stop

@section('content')
<table id="team-team-list" class="table table-striped table-bordered data-table">
    <thead  class="list_head">
        <th>{!! trans('team::team.label.first_name')!!}</th>
        <th>{!! trans('team::team.label.last_name')!!}</th>
        <th>{!! trans('team::team.label.designation')!!}</th>
    </thead>
    <thead  class="search_bar">
        <th>{!! Form::text('search[first_name]')->raw()!!}</th>
        <th>{!! Form::text('search[last_name]')->raw()!!}</th>
        <th>{!! Form::text('search[designation]')->raw()!!}</th>
    </thead>
</table>
@stop

@section('script')
<script type="text/javascript">

var oTable;
$(document).ready(function(){
    app.load('#team-team-entry', '{!!trans_url('admin/team/team/0')!!}');
    oTable = $('#team-team-list').dataTable( {
        "bProcessing": true,
        "sDom": 'R<>rt<ilp><"clear">',
        "bServerSide": true,
        "sAjaxSource": '{!! trans_url('/admin/team/team') !!}',
        "fnServerData" : function ( sSource, aoData, fnCallback ) {

            $('#team-team-list .search_bar input, #team-team-list .search_bar select').each(
                function(){
                    aoData.push( { 'name' : $(this).attr('name'), 'value' : $(this).val() } );
                }
            );
            app.dataTable(aoData);
            $.ajax({
                'dataType'  : 'json',
                'data'      : aoData,
                'type'      : 'GET',
                'url'       : sSource,
                'success'   : fnCallback
            });
        },

        "columns": [
            {data :'first_name'},
            {data :'last_name'},
            {data :'designation'},
        ],
        "pageLength": 25
    });

    $('#team-team-list tbody').on( 'click', 'tr', function () {

        oTable.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');

        var d = $('#team-team-list').DataTable().row( this ).data();

        $('#team-team-entry').load('{!!trans_url('admin/team/team')!!}' + '/' + d.id);
    });

    $("#team-team-list .search_bar input, #team-team-list .search_bar select").on('keyup select', function (e) {
        e.preventDefault();
        if (e.keyCode == 13 || e.keyCode == 9) {
            oTable.api().draw();
        }
    });
});
</script>
@stop

@section('style')
@stop

