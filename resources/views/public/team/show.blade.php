<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-dark  header-title m-t-0"> {!! $team['name'] !!} </h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ trans_url('teams') }}" class="btn btn-default pull-right"> Back</a>
                    </div>
                </div>
                <hr/>

                <div class="row">
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
                <label for="photo">
                    {!! trans('team::team.label.photo') !!}
                </label><br />
                    {!! $team['photo'] !!}
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
                <label for="most_valuable_person">
                    {!! trans('team::team.label.most_valuable_person') !!}
                </label><br />
                    {!! $team['most_valuable_person'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="facebook">
                    {!! trans('team::team.label.facebook') !!}
                </label><br />
                    {!! $team['facebook'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="tumblr">
                    {!! trans('team::team.label.tumblr') !!}
                </label><br />
                    {!! $team['tumblr'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="gmail">
                    {!! trans('team::team.label.gmail') !!}
                </label><br />
                    {!! $team['gmail'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="behance">
                    {!! trans('team::team.label.behance') !!}
                </label><br />
                    {!! $team['behance'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="twitter">
                    {!! trans('team::team.label.twitter') !!}
                </label><br />
                    {!! $team['twitter'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('team::team.label.status') !!}
                </label><br />
                    {!! $team['status'] !!}
            </div>
        </div>
    </div>
            </div>  
        </div>  
        <div class="col-md-4">
            @include('team::public.team.aside')
        </div>

    </div>
</div>