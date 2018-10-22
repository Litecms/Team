            @include('team::team.partial.header')

            <section class="grid bg-white">
                <div class="container ">
                    <div class="row">
                        @foreach($teams as $team)
                        <div class="col-md-4 ">
                            <div class="main-area parent-border list-item">

                                <div class="item border">
                                    <div class="feature">

                                            <img src="{{url($team->defaultImage('image','sm'))}}" class="img-responsive center-block" alt="">

                                    </div>
                                    <div class="content">
                                        <h2>{{str_limit($team['name'], 300)}}
                                        </h2>
                                        <b>{{$team->designation}}
                                        </b>
                                        <p>{{str_limit($team->description, 250)}}</p>
                                        <div class="metas mt20">

                                            <div class="tag pull-left">
                                                @foreach($team->link as $key=>$link)
                                                <a href="{{@$link}}" target="_blank"><i class="fa fa-{{@$key}}  icon-3x icon-border"></i></a>
                                                @endforeach
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                         @endforeach
                          <div class="pagination text-center">
                            {{ $teams->links() }}
                            </div>
                    </div>
                </div>
            </section>
