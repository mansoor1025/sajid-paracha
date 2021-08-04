@extends('home')
@section('content')
<style>
         body {
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
<section class="content">
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
                  <thead>
                  <tr>
                  	<th>S.no</th>
                  	<th>Agency Name</th>
                    <th>Visa No</th>
                    <th>Code No</th>
                    <th>Sponcers NO</th>
                    <th>E Number</th>
                    <th>Name</th>
                    <th>Father Name</th> 
                    <th>Action</th>
                  </tr>
                  
                  </thead>
                  <tbody>
                  	 <?php 
                  	        $count = 0; ?>
                  @if($app_detail_list->count() > 0)  
                   @foreach($app_detail_list->orderBy('id','desc')->get() as $value)
                   <?php 
                        $count++;
                        $agency_name = DB::table('users')->where('id',$value->agency_id)->value('agency_name');
                    ?>
                   	<tr>
                   		<td>{{$count}}</td>
                   		<td>{{$value->visa_no}}</td>
                   		<td>{{$agency_name}}</td>
                   		<td>{{$value->code_no}}</td>
                   		<td>{{$value->sponcers_no}}</td>
                   		<td>{{$value->e_number}}</td>
                   		<td>{{$value->name_full}}</td>
                   		<td>{{$value->father_name}}</td>
                   		<td>
                   			<i class="fas fa-edit"></i>
                   			<i class="fas fa-eye"></i>
                   			<i class="fas fa-trash"></i>
                   		</td>
                   	</tr>
                   @endforeach
                  @endif 
                  </tbody>
                  
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