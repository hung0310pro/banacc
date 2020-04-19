<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ url('img/logo-fav.png') }}">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="{{ url('lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"/>
    <link rel="stylesheet" type="text/css"
          href="{{ url('lib/material-design-icons/css/material-design-iconic-font.min.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ url('lib/material-design-icons/css/material-design-iconic-font.min.css') }}"
          type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ url('lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('lib/jqvmap/jqvmap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}"/>
<script type="text/javascript">
    $(document).ready(function () {
        $(".left-sidebar-wrapper .left-sidebar-content li.parent a").click(function (e) {
            $(".left-sidebar-wrapper .left-sidebar-content li.parent ul.sub-menu").toggle();
        });
    });

</script>
</head>
<body>
    <div class="be-wrapper be-fixed-sidebar">
      <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
          <div class="navbar-header"><a href="{{ route('home') }}" class="navbar-brand"></a></div>
          <div class="be-right-navbar">
            <ul class="nav navbar-nav navbar-right be-user-nav">
              <li class="dropdown" style="margin-top: 13px;"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="{{ url('img/avatar.png') }}" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                <ul role="menu" class="dropdown-menu">
                  <li>
                    <div class="user-info">
                    @guest

                    @else
                      <div class="user-name">{{ Auth::user()->name }}</div>
                      <div class="user-position online">Available</div>
                    </div>
                    @endguest
                  </li>
                  <li><a href="{!! route('logoutcustom') !!}"><span class="icon mdi mdi-power"></span> Logout</a></li>
                </ul>
              </li>
            </ul>
            <div class="page-title"><span>Dashboard</span></div>
            <ul class="nav navbar-nav navbar-right be-icons-nav" style="margin-top: 17px;">
              <li><button class="btn btn-success">Số Dư : {{ Auth::user()->total_money }} VNĐ </button></li>
              <li class="dropdown"><a href="#" role="button" aria-expanded="false" class="be-toggle-right-sidebar"><span class="icon mdi mdi-settings"></span></a></li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                <ul class="dropdown-menu be-notifications">
                  <li>
                    <div class="title">Notifications<span class="badge">3</span></div>
                    <div class="list">
                      <div class="be-scroller">
                        <div class="content">
                          <ul>
                            <li class="notification notification-unread"><a href="#">
                                <div class="image"><img src="{{ url('img/avatar2.png') }}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Jessica Caruso</span> accepted your invitation to join the team.</div><span class="date">2 min ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{ url('img/avatar3.png') }}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">Joel King</span> is now following you</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{ url('img/avatar4.png') }}" alt="Avatar"></div>
                                <div class="notification-info">
                                  <div class="text"><span class="user-name">John Doe</span> is watching your main repository</div><span class="date">2 days ago</span>
                                </div></a></li>
                            <li class="notification"><a href="#">
                                <div class="image"><img src="{{ url('img/avatar5.png') }}" alt="Avatar"></div>
                                <div class="notification-info"><span class="text"><span class="user-name">Emily Carter</span> is now following you</span><span class="date">5 days ago</span></div></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">View all notifications</a></div>
                  </li>
                </ul>
              </li>
              <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="icon mdi mdi-apps"></span></a>
                <ul class="dropdown-menu be-connections">
                  <li>
                    <div class="list">
                      <div class="content">
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ url('img/github.png') }}" alt="Github"><span>GitHub</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ url('img/bitbucket.png') }}" alt="Bitbucket"><span>Bitbucket</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ url('img/slack.png') }}" alt="Slack"><span>Slack</span></a></div>
                        </div>
                        <div class="row">
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ url('img/dribbble.png') }}" alt="Dribbble"><span>Dribbble</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ url('img/mail_chimp.png') }}" alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                          <div class="col-xs-4"><a href="#" class="connection-item"><img src="{{ url('img/dropbox.png') }}" alt="Dropbox"><span>Dropbox</span></a></div>
                        </div>
                      </div>
                    </div>
                    <div class="footer"> <a href="#">More</a></div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="be-left-sidebar">
        <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
          <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
              <div class="left-sidebar-content">
                <ul class="sidebar-elements">
                  <li class="divider">Menu</li>
                  <li class="active"><a href="{{ route('home') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                  </li>
                  @if (Auth::user()->level === 1)
                  <li><a href="{{ route('listuser.index') }}"><i class="icon mdi mdi-border-all"></i><span>List Users</span></a>
                  </li>
                 <li><a href="{{ route('catalogspage') }}"><i class="icon mdi mdi-dot-circle"></i><span>Add New Menu</span></a>
                  </li>
                   <li><a href="{{ route('catalogchildspage') }}"><i class="icon mdi mdi-view-web"></i><span>Add Child Menu</span></a>
                  </li>
                  @endif
                 <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Catalogs</span></a>
                    <ul class="sub-menu">
                     <?php
                     $catalogs = App\CatalogsModel::all();
                    ?>
                     <?php foreach ($catalogs as $value) : ?>
                    <?php if($value->catalogstatus == 1) : ?>
                      <li><a href="{{ route('homeacc.show',$value->id) }}"><?= $value->catalogname ?></a>
                      </li>
                      <?php endif; ?>
                      <?php endforeach; ?>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current Project</span></div>
            <div class="progress">
              <div style="width: 60%;" class="progress-bar progress-bar-primary"></div>
            </div>
          </div>
        </div>
      </div>
@yield('content')


