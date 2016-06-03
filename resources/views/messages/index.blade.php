
@extends('templates.default')

@section('content')


  <!--------------------header------------------------>

        @include('templates.header')

  <!--------------------- end of header---------------------->

        <div id="wrapper">
            <div id="layout-static">


              <!----Left Bar--->

                  @include('templates.leftbar')
              <!----End Left Bar--->



                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                          <div class="row" style = "margin:0;">
                            <div class = "col-sm-10">
                            <ol class="breadcrumb">

                              <div class="media messages-container">
      <div class="messages-list pull-left">
          <div class="panel panel-default">
              <ul class="list-group">
                  <li class="list-group-item active">
                      <a href="#">
                          <div class="media">
                              <div class="media-object pull-left">
                                  <img src="{{url(Auth::user()->profilePic)}}" width="50" alt="" />
                              </div>
                              <div class="media-body">
                                  <span class="date">Today</span>
                                  <span class="user">Mary D.</span>
                                  <div class="message">Are we ok to meet...</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="list-group-item">
                      <a href="#">
                          <div class="media">
                              <div class="media-object pull-left">
                                  <img src="{{url(Auth::user()->profilePic)}}" height="50" alt="" />
                              </div>
                              <div class="media-body">
                                  <span class="date">Sat</span>
                                  <span class="user">Adrian T.</span>
                                  <div class="message">Looking forward to...</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="list-group-item">
                      <a href="#">
                          <div class="media">
                              <div class="media-object pull-left">
                                  <img src="{{url(Auth::user()->profilePic)}}" width="50" alt="" />
                              </div>
                              <div class="media-body">
                                  <span class="date">5 days</span>
                                  <span class="user">Michelle A.</span>
                                  <div class="message">Nice design.</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="list-group-item">
                      <a href="#">
                          <div class="media">
                              <div class="media-object pull-left">
                                  <img src="{{url(Auth::user()->profilePic)}}" height="50" alt="" />
                              </div>
                              <div class="media-body">
                                  <span class="date">Sat</span>
                                  <span class="user">Sue T.</span>
                                  <div class="message">Looking forward to...</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="list-group-item">
                      <a href="#">
                          <div class="media">
                              <div class="media-object pull-left">
                                  <img src="{{url(Auth::user()->profilePic)}}" height="50" alt="" />
                              </div>
                              <div class="media-body">
                                  <span class="date">Sat</span>
                                  <span class="user">Adrian T.</span>
                                  <div class="message">Looking forward to...</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="list-group-item">
                      <a href="#">
                          <div class="media">
                              <div class="media-object pull-left">
                                  <img src="{{url(Auth::user()->profilePic)}}" height="50" alt="" />
                              </div>
                              <div class="media-body">
                                  <span class="date">Sat</span>
                                  <span class="user">Adrian T.</span>
                                  <div class="message">Looking forward to...</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="list-group-item">
                      <a href="#">
                          <div class="media">
                              <div class="media-object pull-left">
                                  <img src="{{url(Auth::user()->profilePic)}}" height="50" alt="" />
                              </div>
                              <div class="media-body">
                                  <span class="date">Sat</span>
                                  <span class="user">Adrian T.</span>
                                  <div class="message">Looking forward to...</div>
                              </div>
                          </div>
                      </a>
                  </li>
                  <li class="list-group-item">
                      <a href="#">
                          <div class="media">
                              <div class="media-object pull-left">
                                  <img src="{{url(Auth::user()->profilePic)}}" height="50" alt="" />
                              </div>
                              <div class="media-body">
                                  <span class="date">Sat</span>
                                  <span class="user">Adrian T.</span>
                                  <div class="message">Looking forward to...</div>
                              </div>
                          </div>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="media-body">
          <div class="panel panel-default share">
              <div class="input-group">
                  <div class="input-group-btn">
                      <a class="btn btn-primary" href="#">
                          <i class="fa fa-envelope"></i> Send
                      </a>
                  </div>

                  <!-- /btn-group -->
                  <input type="text" class="form-control share-text" placeholder="Write message..." />
              </div>

              <!-- /input-group -->
              </div>
          <div class="media">
              <div class="pull-left media-object">
                  <a href="#">
                      <img src="{{url(Auth::user()->profilePic)}}" width="60" alt="" />
                  </a>
              </div>
              <div class="media-body message">
                  <div class="panel panel-default">
                      <div class="panel-heading panel-heading-white">
                          <div class="pull-right">
                              <small class="text-muted">2 min ago</small>
                          </div>
                          <a href="#">Mary D.</a>
                      </div>
                      <div class="panel-body">
                          Hi Bill,
                          <br/> Is it ok if we schedule the meeting tomorrow?
                      </div>
                  </div>
              </div>
          </div>
          <div class="media">
              <div class="pull-right media-object">
                  <img src="{{url(Auth::user()->profilePic)}}" width="60" alt="" />
              </div>
              <div class="media-body message">
                  <div class="panel panel-default">
                      <div class="panel-heading panel-heading-white">
                          <div class="pull-right">
                              <small class="text-muted">10 min ago</small>
                          </div>
                          <a href="#">Me</a>
                      </div>
                      <div class="panel-body">
                          Are we still on for Today?
                      </div>
                  </div>
              </div>
          </div>
          <div class="media">
              <div class="pull-left media-object">
                  <img src="{{url(Auth::user()->profilePic)}}" width="60" alt="" />
              </div>
              <div class="media-body message">
                  <div class="panel panel-default">
                      <div class="panel-heading panel-heading-white">
                          <div class="pull-right">
                              <small class="text-muted">1 day ago</small>
                          </div>
                          <a href="#">Mary D.</a>
                      </div>
                      <div class="panel-body">
                          Cool. It's settled. Tomorrow will discuss the project.
                      </div>
                  </div>
              </div>
          </div>
          <div class="media">
              <div class="pull-right media-object">
                  <img src="{{url(Auth::user()->profilePic)}}" width="60" alt="" />
              </div>
              <div class="media-body message">
                  <div class="panel panel-default">
                      <div class="panel-heading panel-heading-white">
                          <div class="pull-right">
                              <small class="text-muted">3 days ago</small>
                          </div>
                          <a href="#">Me</a>
                      </div>
                      <div class="panel-body">
                          I suggest a meeting on Tuesday. What do you think?
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>




                     </div> <!---- End of Timeline and Middle Content  -------->


                            <div class = "col-sm-2">
                              <div class="sidebar1 right">

    <ul class="chat-filter nav nav-pills ">
        <li class="active"><a href="#" data-target="li">All</a>
        </li>
        <li><a href="#" data-target=".online">Online</a>
        </li>
        <li><a href="#" data-target=".offline">Offline</a>
        </li>
    </ul>
    <ul class="chat-contacts">
        <li class="online" data-user-id="1">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>"Free Today"</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="online away" data-user-id="2">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>"Feeling Groovy"</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="online" data-user-id="3">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <span class="status"></span>
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Busy</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
        <li class="offline" data-user-id="4">
            <a href="#">
                <div class="media">
                    <div class="pull-left">
                        <img src="{{url(Auth::user()->profilePic)}}" width="40" class="img-circle" />
                    </div>
                    <div class="media-body">
                        <div class="contact-name">{{ Auth::user()->getNameOrUsername() }}</div>
                        <small>Offline</small>
                    </div>
                </div>
            </a>
        </li>
    </ul>
    <div class="chat-search">
        <input type="text" class="form-control" placeholder="Search" />
    </div>
</div>
                            </div>
                          </div>
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">

        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>
