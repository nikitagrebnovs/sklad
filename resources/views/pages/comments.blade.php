@extends('layout.main')
@section('content')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Vincent Porter</div>
                                    <div class="status"><i class="fa fa-circle offline"></i> left 7 mins ago</div>
                                </div>
                            </li>
                            <li class="clearfix active">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Nikitos Bogatejshij</div>
                                    <div class="status"><i class="fa fa-circle online"></i> online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Mike Thomas</div>
                                    <div class="status"><i class="fa fa-circle online"></i> online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Christian Kelly</div>
                                    <div class="status"><i class="fa fa-circle offline"></i> left 10 hours ago</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Monica Ward</div>
                                    <div class="status"><i class="fa fa-circle online"></i> online</div>
                                </div>
                            </li>
                            <li class="clearfix">
                                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                <div class="about">
                                    <div class="name">Dean Henry</div>
                                    <div class="status"><i class="fa fa-circle offline"></i> offline since Oct 28</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">
                                        <h6 class="m-b-0">Nikitos Bogatejshij</h6>
                                        <small>Last seen: 2 hours ago</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 hidden-sm text-right">
                                    <a href="javascript:void(0);" class="btn btn-outline-secondary"><i
                                            class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary"><i
                                            class="fa fa-image"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-info"><i
                                            class="fa fa-cogs"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-warning"><i
                                            class="fa fa-question"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="chat-history" style="height: 800px; overflow: scroll; overflow-x: auto;">
                            <ul class="m-b-0">
                                @foreach($comments as $comment)
                                <li class="clearfix">
                                    <div class="message-data">
                                        <span class="message-data-time">{{ $comment->created_at->format('D h:i') }}</span>
                                    </div>
                                    <div class="message my-message"> <span class="text-success">{{ $comment->user->login }}</span><br>{{ $comment->content }}</div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <form action="{{ route('comment.store') }}" method="post">
                            @csrf
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">
                                    <label for="inp-comment"></label>
                                    <input name="inp-comment" id="inp-comment" type="text" class="form-control"
                                           placeholder="Enter text here...">
                                    <button class="btn btn-outline-info btn-block"><i class="fa fa-send"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    CSS code

@endsection
