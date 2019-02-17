@extends('admin.layouts.new_master')

@section('content')
	<section class="invoice">
    <div class="row">
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3>{{$newOrder}}</h3>

        <p>Hóa đơn chưa xử lý</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3>{{$totalOrder}}</h3>

        <p>Hóa đơn đã xử lý</p>
      </div>
      <div class="icon">
        <i class="ion ion-checkmark-circled"></i>
      </div>
      <a href="" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3>Đ {{$totalDay}}</h3>

        <p>Doanh thu ngày</p>
      </div>
      <div class="icon">
        <i class="ion ion-cash"></i>
      </div>
      <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-red">
      <div class="inner">
        <h3>Đ {{$totalMonth}}</h3>

        <p>Doanh thu tháng</p>
      </div>
      <div class="icon">
        <i class="ion ion-cash"></i>
      </div>
      <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
<div class="row">
    <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Số sản phẩm bán được</h3>

              <div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Task</th>
                  <th>Progress</th>
                  <th style="width: 40px">Label</th>
                </tr>
                @foreach ($array as $prod)
                <tr>
                  <td>{{$prod['id']}}</td>
                  <td>{{$prod['name']}}</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-striped" style="width: {{$prod['qtt']}}0%"></div>
                    </div>
                  </td>
                  <td><span class="badge " style="background-color: green ">{{$prod['qtt']}}</span></td>
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
         
</div>
        
                
               
</section>
@endsection