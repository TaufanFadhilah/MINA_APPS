@extends('template')
@section('content')
<div class="page-header dataBgImage" data-bg-image="{{asset('demo/photos/img-wall-02.jpg')}}">
    <img class="img-thumbnail" src="{{asset('demo/users/img-user-01.jpg')}}" style="width: 150px;height: 150px;margin-top: 10px">
    <h3 class="user-name" style="color: white">{{session()->get('name')}}</h3>
 </div>
<div class="row">
    <div class="col-md-7">
        <div class="panel panel-default">
            <div class="panel-body">
                <textarea rows="2" class="form-control" placeholder="What are you thinking?" style="margin-top: 10px"></textarea>
                <div class="clearfix">
                    <button type="submit" class="btn btn-sm btn-primary pull-right mt-xs"><i class="fa fa-pencil"></i> Post</button>
                    <a href="javascript:;" class="btn btn-link btn-icon"><i class="fa fa-location-arrow"></i></a>
                    <a href="javascript:;" class="btn btn-link btn-icon"><i class="fa fa-microphone"></i></a>
                    <a href="javascript:;" class="btn btn-link btn-icon"><i class="fa fa-camera"></i></a>
                    <a href="javascript:;" class="btn btn-link btn-icon"><i class="fa fa-file"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-5">
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="list-flow-info">
                    <li class="col-xs-4 text-primary">
                        <h3>Followers</h3>
                        <h4>2753</h4>
                    </li>
                    <li class="col-xs-4 text-info">
                        <h3>Posts</h3>
                        <h4>381</h4>
                    </li>
                    <li class="col-xs-4 text-success">
                        <h3>Following</h3>
                        <h4>1946</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
</div>

<div class="row">
    <div class="col-md-7">
        <div class="panel panel-default">
            <div class="panel-body">
                
                <h4>Activity Timeline</h4>
                <ul class="flik-timeline flik-timeline-3" data-scroll-effect="slide-down-up-effect">
                    
                    <li class="event" data-date="30 June 2016">
                        <h3>User Created</h3>
                        <p class="event-content" data-date="30 June 2016">
                            Admin created new user <a href="#">User Name</a>
                        </p>
                    </li>
                    
                    <li class="event" data-date="29 June 2016">
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p class="event-content" data-date="29 June 2016">
                            consectetur adipiscing elit. Aenean vulputate ornare lacinia. Cras ut augue nulla. Nullam quis molestie leo. Integer et vehicula lectus. Quisque cursus lorem sed interdum ultricies.
                        </p>
                    </li>
                    
                    <li class="event" data-date="28 June 2016">
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <p class="event-content" data-date="28 June 2016">
                            consectetur adipiscing elit. Aenean vulputate ornare lacinia. Cras ut augue nulla. Nullam quis molestie leo. Integer et vehicula lectus. Quisque cursus lorem sed interdum ultricies.
                        </p>
                        
                        <ul class="list-inline lightgallery" data-mode="lg-slide-skew-rev" loop="1">
                            <li data-src="{{asset('demo/photos/img-wall-01.jpg')}}"> 
                                <a href><img src="{{asset('demo/photos/img-wall-01.jpg')}}" alt="" style="width: 90px;"></a>
                            </li>
                            <li data-src="{{asset('demo/photos/img-wall-03.jpg')}}">
                                <a href><img src="{{asset('demo/photos/img-wall-03.jpg')}}" alt="" style="width: 90px;"></a>
                            </li>
                            <li data-src="{{asset('demo/photos/img-wall-04.jpg')}}">
                                <a href><img src="{{asset('demo/photos/img-wall-04.jpg')}}" alt="" style="width: 90px;"></a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="event" data-date="27 June 2016">
                        <h3>Nullam efficitur, odio sed varius consectetur</h3>
                        <p class="event-content" data-date="27 June 2016">
                            Nulla nibh sollicitudin lacus, non finibus turpis libero ut elit. Pellentesque hendrerit ipsum risus, eu tincidunt nunc feugiat eget. Donec vel egestas sem. Aenean commodo erat et elit auctor, sed aliquet urna luctus. Aliquam viverra risus odio, eleifend eleifend eros aliquet nec.
                        </p>
                        <p>nulla nibh sollicitudin lacus, non finibus turpis libero ut elit. Pellentesque hendrerit ipsum risus, eu tincidunt nunc feugiat eget. Donec vel egestas sem. Aenean commodo erat et elit auctor, sed aliquet urna luctus. Aliquam viverra risus odio, eleifend eleifend eros aliquet nec.</p>
                    </li>
                    
                    <li class="event" data-date="27 June 2016">
                        <h3>Financial/legal</h3>
                        <p class="event-content" data-date="27 June 2016">
                            Facebook settles both lawsuits, ConnectU vs Facebook, Mark Zuckerberg et al.
                            and intellectual property theft, Wayne Chang et al. over The Winklevoss Chang Group's Social Butterfly project.
                            The settlement effectively had Facebook acquiring ConnectU for $20 million in cash and over
                            $1.2 million in shares, valued at $45 million based on $15 billion company valuation
                        </p>
                    </li>
                    
                    <li class="event" data-date="26 June 2016">
                        <h3>Popular culture</h3>
                        <p class="event-content" data-date="26 June 2016">
                            The Social Network, a film about the beginnings of Facebook directed by David Fincher is released.
                            The film is met with widespread critical acclaim as well as commercial success;
                            however, Mark Zuckerberg says that the film is a largely inaccurate account of what happened
                        </p>
                    </li>
                    
                    <li class="event" data-date="25 June 2016">
                        <h3>Open sourcing</h3>
                        <p class="event-content" data-date="25 June 2016">
                            Facebook releases its <a href="https://facebook.github.io/react/">React</a> native framework for building native apps as open source.
                            This is announced on the second day of the F8 conference.
                        </p>
                    </li>
                    
                </ul> <!-- END TIMELINE -->
                
            </div>
        </div>
    </div>
    
    <div class="col-md-5">
        
        <div class="panel panel-default">
            <div class="panel-body">
                <h4>About</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget odio nulla. Quisque sem tortor, sodales in felis non, sodales volutpat velit. Nullam quis quam et elit sollicitudin congue. Morbi eu lobortis ligula. Quisque volutpat, lorem ut interdum venenatis, urna ex dictum enim, non vulputate tellus dolor ut enim.</p>
                
                <form class="form-horizontal basic-info">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">Marco</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">Lopes</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">email@example.com</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">London</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Languages</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">Telugu · Tamil · English</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Gender</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">Male</p>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Date of birth</label>
                        <div class="col-sm-9">
                            <p class="form-control-static">31 March</p>
                        </div>
                    </div>
                    
                </form>
                
            </div>
        </div>
        
        <div class="panel panel-default">
            <div class="panel-body">
                <ul class="media-list">
                    <li class="media">
                        <a href="#" class="pull-left">
                            <img src="{{asset('demo/users/img-user-03.jpg')}}" alt="Avatar" class="img-circle" width="64" height="64">
                        </a>
                        <div class="media-body">
                            <p>
                                <span class="text-muted pull-right"><small>just now</small></span>
                                <strong><a href="#">User</a> uploaded 2 new photos.</strong>
                            </p>
                            <div class="row pb-xs">
                                <div class="col-sm-6 col-md-4">
                                    <img src="{{asset('demo/photos/img-wall-05.jpg')}}" alt="image" class="img-responsive">
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <img src="{{asset('demo/photos/img-wall-06.jpg')}}" alt="image" class="img-responsive">
                                </div>
                            </div>
                            <p>
                                <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i></a>
                            </p>
                        </div>
                    </li>

                    <li class="media">
                        <a href="#" class="pull-left">
                            <img src="{{asset('demo/users/img-user-05.jpg')}}" alt="Avatar" class="img-circle" width="64" height="64">
                        </a>
                        <div class="media-body">
                            <p class="push-bit">
                                <span class="text-muted pull-right"><small>1 hour ago</small></span>
                                <strong><a href="#">Adventurer</a> checked in at <a href="javascript:;">Cafe-Bar</a>.</strong>
                            </p>
                            <p>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-comments-o"></i></a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i></a>
                            </p>
                        </div>
                    </li>

                    <li class="media">
                        <a href="#" class="pull-left">
                            <img src="{{asset('demo/users/img-user-06.jpg')}}" alt="Avatar" class="img-circle" width="64" height="64">
                        </a>
                        <div class="media-body">
                            <p>
                                <span class="text-muted pull-right"><small>5 hours ago</small></span>
                                <strong><a href="#">User</a> updated status.</strong>
                            </p>
                            <p>Hey there! First post from the new application!</p>
                            <p>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-thumbs-o-up"></i></a>
                                <a href="javascript:void(0)" class="btn btn-xs btn-default"><i class="fa fa-share-square-o"></i></a>
                            </p>
                            <ul class="media-list">
                                <li class="media">
                                    <a href="#" class="pull-left">
                                        <img src="{{asset('demo/users/img-user-07.jpg')}}" alt="Avatar" class="img-circle" width="64" height="64">
                                    </a>
                                    <div class="media-body">
                                        <a href="#"><strong>User</strong></a>
                                        <span class="text-muted"><small><em>1 hour ago</em></small></span>
                                        <p>Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <a href="#" class="pull-left">
                                        <img src="{{asset('demo/users/img-user-06.jpg')}}" alt="Avatar" class="img-circle" width="64" height="64">
                                    </a>
                                    <div class="media-body">
                                        <form action="#" method="post" onsubmit="return false;">
                                            <textarea class="form-control" rows="2" placeholder="Your comment.."></textarea>
                                            <button type="submit" class="btn btn-xs btn-primary pt-xs"><i class="fa fa-pencil"></i> Post Comment</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="media text-center">
                        <a href="javascript:void(0)" class="btn btn-xs btn-default btn-block">View more..</a>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    
</div>
@endsection
@section('js')
<script type="text/javascript" src="{{asset('plugins/lib/modernizr.js')}}"></script>
@endsection