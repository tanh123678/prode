<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">​

  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('new-admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('new-admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('new-admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('new-admin/dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{asset('new-admin/dist/css/skins/skin-blue.min.css')}}">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" style="position: absolute;top: 0px;width: 100%;">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="{{asset('new-admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{asset('new-admin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{asset('new-admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('admin.logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}></a>
                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('new-admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        {{-- <li class="active"><a href="{{route('shop.index')}}"><i class="fa fa-link"></i> <span>shop</span></a></li> --}}
        <li><a href="{{asset('onl')}}"><i class="fa fa-link"></i> <span>shop</span></a></li>
        <li><a href="{{asset('admin/ad')}}"><i class="fa fa-link"></i> <span>admins</span></a></li>
        <li><a href="{{asset('admin/user')}}"><i class="fa fa-link"></i> <span>users</span></a></li>
        <li><a href="{{asset('admin/product')}}"><i class="fa fa-link"></i> <span>prod</span></a></li>

        {{-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Categories</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            
            @foreach($categories as $cate)
                  <li class="nav-item">
                    <a href="{{ url('admin/cates/' . $cate->id ) }}" class="nav-link">
                     
                      <p>
                        {{$cate->name}}
                      </p>
                    </a>
                  </li>
                  @endforeach
          </ul>
        </li> --}}
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
@yield('content')
    </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="{{asset('new-admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('new-admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('new-admin/dist/js/adminlte.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript" charset="utf-8" async defer></script>
{{-- <script>
    function myfunction(){
      if(!confirm("Chắc chưa"))
        event.preventDefault();
    }
  </script> --}}
<script type="text/javascript" charset="utf-8">
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
   
    // $(document).ready(function () {
    //       //bắt sự kiện click vào nút show
    //       $('.btn-show').click(function () {
    //           //hiện modal show lên
    //           $('#modal-show').modal('show');
    //           //lấy dữ liệu từ attribute data-url lưu vào biến url
    //           var url=$(this).attr('data-url');
    //           $.ajax({
    //             //sử dụng phương thức get
    //             type: 'get',
    //             url: url,
    //             //nếu thực hiện thành công thì chạy vào success
    //             success: function (response) {
    //             //hiển thị dữ liệu được controller trả về vào trong modal
    //             $('#student-show').text(response.data.title);
    //             $('#thumbnail').attr('src','{{asset('')}}'+response.data.thumbnail+'');
    //             $('#ngaysinh-show').text(response.data.description);
    //             $('#sdt-show').text(response.data.content);
    //             },
    //             error: function (jqXHR, textStatus, errorThrown) {
    //             //xử lý lỗi tại đây
    //             }
    //           })
    //       })

    //       // $('.btn-delete').click(function(e){
    //       //   e.preventDefault();
    //       //   var _this = $(this);
    //       //   var id = $(this).attr('data-id');
    //       //   if(confirm('chac chua')){
    //       //     $.ajax({
    //       //       type: 'delete',
    //       //       url: 'admin/del/' + id,
    //       //       data:{
    //       //         _token: $('meta[name="_token"]').attr('content')
    //       //       },
    //       //       success: function(response){
    //       //         toastr.success('xoa thanh cong');
    //       //         _this.parent().parent().remove();
    //       //       }
    //       //     })
    //       //   }
    //       // })

    // })  
    //   $('.btn-delete').click(function () {
    //         //lấy attribute data-url của nút xoá lưu vào url
    //         // e.preventDefault(); 
    //         var url=$(this).attr('data-url');
    //         //hiển thị dialogbox xác nhận xoá

    //         if (confirm("Are you sure?")){
    //           $.ajax({
    //             //phương thức delete
    //             type: 'delete',
    //             url: url,
    //              data:{
    //             _token: $('meta[name="csrf-token"]').attr('content') 
    //              },
                
    //             success: function (response) {
    //               // console.log('aaa')
    //               //thông báo xoá thành công bằng toastr
    //               $('#deletePost-'+response.id+'').parents('.parent').remove();
    //               //$(this).parents('#parent').remove();
    //              // if ($('#student-show').text() == response.post.title) {}
    //               toastr.warning('delete todo success!')
    //             },
    //             error: function (error) {}
    //           });
    //         }

    //       })
  //cate
 
       //tag ajax
      $('#addformtag').submit(function(event) {
      event.preventDefault();

      $.ajax({
        url: '/admin/user',
        type: 'post',

        data: {
          name: $('#name').val(),
          email: $('#email').val(), 
          password: $('#password').val(),  
          _token: $('meta[name="csrf-token"]').attr('content')   
        },
        success: function(response){
          toastr.success('Add new student success!')
                  //ẩn modal add đi
                  $('#modal-add-tag').modal('hide');
                  setTimeout(function () {
                    window.location.href="{{route('user.index')}}";
                  },800);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  //xử lý lỗi tại đây
                }

              });


    });
  
     //bắt sự kiện click vào nút show
          $('.btn-show-tag').click(function () {
              //hiện modal show lên
              $('#tag-show').modal('show');
          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');
          $.ajax({
            //sử dụng phương thức get
            type: 'get',
            url: url,
            //nếu thực hiện thành công thì chạy vào success
            success: function (response) {
              // console.log(response);
              //hiển thị dữ liệu được controller trả về vào trong modal
              $('#name-show').text(response.data.name);
              $('#slug-show').text(response.data.email);

            },
            error: function (jqXHR, textStatus, errorThrown) {
             
            }
          })
        })  
// delete
          $('.btn-delete-tag').click(function () {

          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');

          if (confirm("Are you sure?")){
            $.ajax({
              //phương thức delete
              type: 'delete',
              url: url,
              data:{
                _token: $('meta[name="csrf-token"]').attr('content') 
              },
              success: function (response) {
                //thông báo xoá thành công bằng toastr
                toastr.warning('delete student success!')
                setTimeout(function () {
                  window.location.href="{{route('user.index')}}";
                },800);
              },
              error: function (error) {
                
              }
            })
          }
        })

// edit

//bắt sự kiện click vào nút edit
        $('.btn-edit-user').click(function (e) {
        //mở modal edit lên
        $('#modal-edit-user').modal('show');
        e.preventDefault();
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        $.ajax({
          //phương thức get
          type: 'get',
          url: url,
          success: function (response) {
            console.log(response);
            //đưa dữ liệu controller gửi về điền vào input trong form edit.
            $('#name-edit').val(response.data.name);
            $('#email-edit').val(response.data.email);
            //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
            $('#form-edit-user').attr('data-url','{{ asset('admin/user/') }}/'+response.data.id)
          },
          error: function (error) {
            
          }
        })
      })
      //bắt sự kiện submit form edit
      $('#form-edit-user').submit(function (e) {
        e.preventDefault();
        //lấy data-url của form edit
        var url=$(this).attr('data-url');

        $.ajax({
          //phương thức put
          type: 'put',
          url: url,
          //lấy dữ liệu trong form
          data: {
            name: $('#name-edit').val(),
            email: $('#email-edit').val(),
            _token: $('meta[name="csrf-token"]').attr('content'),
           
            
          },

          success: function (response) {
             console.log('aaa');
            //thông báo update thành công
            toastr.success('edit user success!')
            //ẩn modal edit
            $('#modal-edit-user').modal('hide');
            setTimeout(function () {
              window.location.href="{{route('user.index')}}";
            },800);
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //xử lý lỗi tại đây
          }
        })
      })    




 //admin
 $('#addformad').submit(function(event) {
      event.preventDefault();

      $.ajax({
        url: '/admin/ad',
        type: 'post',

        data: {
          name: $('#name').val(),
          email: $('#email').val(), 
          password: $('#password').val(),  
          _token: $('meta[name="csrf-token"]').attr('content')   
        },
        success: function(response){
          toastr.success('Add new student success!')
                  //ẩn modal add đi
                  $('#modal-add-ad').modal('hide');
                  setTimeout(function () {
                    window.location.href="{{route('ad.index')}}";
                  },800);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                  //xử lý lỗi tại đây
                }

              });


    });
  
     //bắt sự kiện click vào nút show
          $('.btn-show-ad').click(function () {
              //hiện modal show lên
              $('#ad-show').modal('show');
          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');
          $.ajax({
            //sử dụng phương thức get
            type: 'get',
            url: url,
            //nếu thực hiện thành công thì chạy vào success
            success: function (response) {
              // console.log(response);
              //hiển thị dữ liệu được controller trả về vào trong modal
              $('#name-show').text(response.data.name);
              $('#slug-show').text(response.data.email);

            },
            error: function (jqXHR, textStatus, errorThrown) {
             
            }
          })
        })  
// delete
          $('.btn-delete-ad').click(function () {

          //lấy dữ liệu từ attribute data-url lưu vào biến url
          var url=$(this).attr('data-url');

          if (confirm("Are you sure?")){
            $.ajax({
              //phương thức delete
              type: 'delete',
              url: url,
              data:{
                _token: $('meta[name="csrf-token"]').attr('content') 
              },
              success: function (response) {
                //thông báo xoá thành công bằng toastr
                toastr.warning('delete student success!')
                setTimeout(function () {
                  window.location.href="{{route('ad.index')}}";
                },800);
              },
              error: function (error) {
                
              }
            })
          }
        })

// edit

//bắt sự kiện click vào nút edit
        $('.btn-edit-ad').click(function (e) {
        //mở modal edit lên
        $('#modal-edit-ad').modal('show');
        e.preventDefault();
        //lấy data-url của nút edit
        var url=$(this).attr('data-url');
        $.ajax({
          //phương thức get
          type: 'get',
          url: url,
          success: function (response) {
            console.log(response);
            //đưa dữ liệu controller gửi về điền vào input trong form edit.
            $('#name-edit').val(response.data.name);
            $('#email-edit').val(response.data.email);
            //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
            $('#form-edit-user').attr('data-url','{{ asset('admin/ad/') }}/'+response.data.id)
          },
          error: function (error) {
            
          }
        })
      })
      //bắt sự kiện submit form edit
      $('#form-edit-ad').submit(function (e) {
        e.preventDefault();
        //lấy data-url của form edit
        var url=$(this).attr('data-url');

        $.ajax({
          //phương thức put
          type: 'put',
          url: url,
          //lấy dữ liệu trong form
          data: {
            name: $('#name-edit').val(),
            email: $('#email-edit').val(),
            _token: $('meta[name="csrf-token"]').attr('content'),
           
            
          },

          success: function (response) {
             console.log('aaa');
            //thông báo update thành công
            toastr.success('edit admin success!')
            //ẩn modal edit
            $('#modal-edit-ad').modal('hide');
            setTimeout(function () {
              window.location.href="{{route('ad.index')}}";
            },800);
          },
          error: function (jqXHR, textStatus, errorThrown) {
            //xử lý lỗi tại đây
          }
        })
      })
 //endadmin
//tag ajax
//category ajax
  //       $('#addformcategory').submit(function(event) {
  //     event.preventDefault();

  //     $.ajax({
  //       url: '/admin/category',
  //       type: 'post',

  //       data: {
  //         name: $('#name').val(),   
  //         _token: $('meta[name="csrf-token"]').attr('content')   
  //       },
  //       success: function(response){
  //         toastr.success('Add new student success!')
  //                 //ẩn modal add đi
  //                 $('#modal-add-category').modal('hide');
  //                 setTimeout(function () {
  //                   window.location.href="";
  //                 },800);
  //               },
  //               error: function (jqXHR, textStatus, errorThrown) {
  //                 //xử lý lỗi tại đây
  //               }

  //             });


  //   });

  //       //bắt sự kiện click vào nút show
  //         $('.btn-show-category').click(function () {
  //             //hiện modal show lên
  //             $('#category-show').modal('show');
  //         //lấy dữ liệu từ attribute data-url lưu vào biến url
  //         var url=$(this).attr('data-url');
  //         $.ajax({
  //           //sử dụng phương thức get
  //           type: 'get',
  //           url: url,
  //           //nếu thực hiện thành công thì chạy vào success
  //           success: function (response) {
  //             // console.log(response);
  //             //hiển thị dữ liệu được controller trả về vào trong modal
  //             $('#name-show').text(response.data.name);
  //             $('#slug-show').text(response.data.name);

  //           },
  //           error: function (jqXHR, textStatus, errorThrown) {
             
  //           }
  //         })
  //       })

  //       // delete
  //         $('.btn-delete-category').click(function () {

  //         //lấy dữ liệu từ attribute data-url lưu vào biến url
  //         var url=$(this).attr('data-url');

  //         if (confirm("Are you sure?")){
  //           $.ajax({
  //             //phương thức delete
  //             type: 'delete',
  //             url: url,
  //             data:{
  //               _token: $('meta[name="csrf-token"]').attr('content') 
  //             },
  //             success: function (response) {
  //               //thông báo xoá thành công bằng toastr
  //               toastr.warning('delete student success!')
  //               setTimeout(function () {
  //                 window.location.href="";
  //               },800);
  //             },
  //             error: function (error) {
                
  //             }
  //           })
  //         }
  //       })

  //   // edit

  // //bắt sự kiện click vào nút edit
  //       $('.btn-edit-category').click(function (e) {
  //       //mở modal edit lên
  //       $('#modal-edit-category').modal('show');
  //       e.preventDefault();
  //       //lấy data-url của nút edit
  //       var url=$(this).attr('data-url');
  //       $.ajax({
  //         //phương thức get
  //         type: 'get',
  //         url: url,
  //         success: function (response) {
  //           console.log(response);
  //           //đưa dữ liệu controller gửi về điền vào input trong form edit.
  //           $('#name-edit').val(response.data.name);
  //           $('#slug-edit').val(response.data.slug);
           

  //           //thêm data-url chứa route sửa todo đã được chỉ định vào form sửa.
  //           $('#form-edit-category').attr('data-url','/'+response.data.id)
  //         },
  //         error: function (error) {
            
  //         }
  //       })
  //     })
  //     //bắt sự kiện submit form edit
  //     $('#form-edit-category').submit(function (e) {
  //       e.preventDefault();
  //       //lấy data-url của form edit
  //       var url=$(this).attr('data-url');

  //       $.ajax({
  //         //phương thức put
  //         type: 'put',
  //         url: url,
  //         //lấy dữ liệu trong form
  //         data: {
  //           name: $('#name-edit').val(),
  //           _token: $('meta[name="csrf-token"]').attr('content'),
           
            
  //         },

  //         success: function (response) {
  //            console.log('aaa');
  //           //thông báo update thành công
  //           toastr.success('edit student success!')
  //           //ẩn modal edit
  //           $('#modal-edit-category').modal('hide');
  //           setTimeout(function () {
  //             window.location.href="";
  //           },800);
  //         },
  //         error: function (jqXHR, textStatus, errorThrown) {
  //           //xử lý lỗi tại đây
  //         }
  //       })
  //     })    


  </script>
  


      
      <script type="text/javascript">
       function readURL(input) {

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#add-thumbnail').append('<img id="blah" src="'+ e.target.result+'" alt="your image" style="width: 80px; height: 80px;" />')
              //$('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#imgInp").change(function() {
          readURL(this);
        });
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
     @yield('footer')
</body>
</html>