@extends('cpanel.layouts.master')
@section('content')

<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner pull-">
                  <h3>3</h3>

                  <p>مراكز التدريب المعتمدة</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">تفاصيل اكثر <i class="fa fa-arrow-circle-left"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                    <h3>2</h3>

                  <p>مراكز امتحانات معتمدة</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">تفاصيل اكثر <i class="fa fa-arrow-circle-left"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>2</h3>

                  <p>مراكز تحت الاجراء</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">تفاصيل اكثر <i class="fa fa-arrow-circle-left"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>1</h3>

                  <p>المراكز منتهية الصلاحية</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">تفاصيل اكثر <i class="fa fa-arrow-circle-left"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>    
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">مراكز تحت الاجراء</h3>
    
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                محتوي الموقع
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              
            </div>
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->

          
    
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
@endsection
