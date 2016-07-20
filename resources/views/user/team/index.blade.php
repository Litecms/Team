@include('public::notifications')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-dark  header-title m-t-0"> My Teams </h4>
        </div>
        <div class="col-md-6">
            <a href="{{ trans_url('/user/team/team/create') }}" class="btn btn-default pull-right"> {{ trans('cms.create')  }} Team</a>
        </div>
    </div>
    <p class="text-muted m-b-25 font-13">
        Your awesome text goes here.
    </p>
    <hr>
    <div class="row">
        <div class="col-md-4 m-b-5 pull-right">
            {!!Form::open()->method('GET')!!}
            <div class="input-group">
              {!!Form::text('search')->type('search')->class('form-control')->placeholder('Search for...')->raw()!!}
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Search</button>
              </span>
            </div>
            {!! Form::close()!!}
        </div>
    </div>   
    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>{!! trans('team::team.label.name')!!}</th>
        <th>{!! trans('team::team.label.designation')!!}</th>
        <th>{!! trans('team::team.label.photo')!!}</th>
        <th>{!! trans('team::team.label.description')!!}</th>
        <th>{!! trans('team::team.label.most_valuable_person')!!}</th>
        <th>{!! trans('team::team.label.facebook')!!}</th>
        <th>{!! trans('team::team.label.tumblr')!!}</th>
        <th>{!! trans('team::team.label.gmail')!!}</th>
        <th>{!! trans('team::team.label.behance')!!}</th>
        <th>{!! trans('team::team.label.twitter')!!}</th>
        <th>{!! trans('team::team.label.status')!!}</th>
                    <th width="150">{!! trans('team::team.label.status')!!}</th>
                    <th width="150">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->designation }}</td>
                    <td>{{ $team->photo }}</td>
                    <td>{{ $team->description }}</td>
                    <td>{{ $team->most_valuable_person }}</td>
                    <td>{{ $team->facebook }}</td>
                    <td>{{ $team->tumblr }}</td>
                    <td>{{ $team->gmail }}</td>
                    <td>{{ $team->behance }}</td>
                    <td>{{ $team->twitter }}</td>
                    <td>{{ $team->status }}</td>
                    <td><span class="label status-{{ $team->status }}"> {{ $team->status }} </span></td>
                    <td>
                        <a href="{{ trans_url('/user') }}/team/team/{!! $team->getRouteKey() !!}"> View </a>
                        <a href="{{ trans_url('/user') }}/team/team/{!! $team->getRouteKey() !!}/edit"> Edit </a>
                        <a data-action="DELETE" 
                            data-href="{{ trans_url('/user') }}/team/team/{!! $team->getRouteKey() !!}" 
                            href="trans_url('/user')/team/team/{!! $team->getRouteKey() !!}"> 
                            Delete 
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $teams->links() }}
</div>