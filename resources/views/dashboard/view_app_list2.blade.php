@extends('home')
@section('content')
<style>
         #app_list_2 {
         direction: rtl;
         }
         table {
         position: relative;
         width: 100%;
         border-collapse: collapse;
         font-family: sans-serif;
         font-size: 13px;
         }
         table tr {
         position: relative;
         width: 100%;
         }
         table tr td {
         border: 1px solid #ccc;
         padding: 5px 5px;
         }
         table tr th {
         border: 1px solid #ccc;
         padding: 5px 5px;
         text-align: right;
         }
      </style>
<section class="content" id="app_list_2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12"> 
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Application List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <tr>
                     <th colspan="2"> الموافق  </th>
                     <th colspan="2">  تاريخ الاستلام  </th>
                     <th colspan="2"> رقم الصفحه  </th>
                     <th colspan="2"> المجموعه الكلي ____جابزه  </th>
                  </tr> 
                  <tr>
                     <th>العدد           </th>
                     <th>اسم الجواذ باالعربي</th>
                     <th>اسم ال كفيل  </th>
                     <th>رقم الجواز   </th>
                     <th>المهنه               </th>
                     <th>السم المكتب</th>
                     <th>رقم التاشيره و التاريخ</th>
                     <th>حواله</th>
                  </tr>
                  <?php $count = 0; ?>
                  @foreach($app_detail_list->orderBy('visa_application.id','desc')->get(); as $value) 
                  <?php 
                      $count++;
                   ?>
                  <tr>
                     <td>{{$count}}</td>
                     <td>{{$value->arabic_agency_name}}</td>
                     <td>{{$value->arabic_agency_name}}</td>
                     <td>42201-5349-7081</td>
                     <td>24-January 1999</td>
                     <td>Intermediate</td>
                     <td>Married</td>
                     <td></td>
                  </tr> 
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
</section>
<script type="text/javascript">
   $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>            <!-- /.card -->
@endsection