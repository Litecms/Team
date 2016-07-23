<section class="teams">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <h1 class="main-title">
                    <small>Our Team</small>
                    Work For <span>You</span>
                </h1>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="row m-t-40">
            <div class="team-block">
                @forelse($teams as $team)
                    <div class="col-md-4">
                        <div class="team-block-inner">
                            <h1 class="name">
                                {!!$team['first_name']!!} <br><span>{!!$team['last_name']!!}</span>
                            </h1>
                            <p class="designation">{!!$team['designation']!!}</p>
                            <div class="social-links">
                                <a href="{!!$team['facebook']!!}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="{!!$team['twitter']!!}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="{!!$team['google_plus']!!}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="{!!$team['instagram']!!}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="team-image">
                            <img src="{!!url($team->defaultImage('team.lg','photo'))!!}" class="img-responsive" alt="">
                        </div>
                    </div>
                @empty
                @endif

            </div>
        </div>
    </div>
</section>
