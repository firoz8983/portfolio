@extends('admin_layout')
@section('admin_content')
 <p class="alert-success">
    <?php
     $message=Session::get('message'); 
   if($message){
       echo $message;
       Session::put('message',null);
     }
    ?>
  </p>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Table</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th>Number</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              
            
                  
             
              <tbody>
               @foreach ($all_message as $row)
                <tr>
                    <td>{{$row->id}} </td>
                <td class="center">{{ $row->name}}</td>
                <td class="center">{{ $row->email}}</td>
                <td class="center">{{$row->message_body}} </td>
                    <td class="center">
                        <a class="btn btn-info" href="{{URL::to('/view'.$row->id)}}">
                            <i class="halflings-icon eye"></i>  
                        </a>
                        <a class="btn btn-danger" href="#">
                            <i class="halflings-icon white trash"></i> 
                        </a>
                    </td>
                </tr>
                
                @endforeach
              </tbody>
           
          </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->


    
@endsection