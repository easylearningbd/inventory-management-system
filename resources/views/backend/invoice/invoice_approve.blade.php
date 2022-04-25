@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Inovice Approve</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
    @php
    $payment = App\Models\Payment::where('invoice_id',$invoice->id)->first();
    @endphp                    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
<h4>Invoice No: #{{ $invoice->invoice_no }} - {{ date('d-m-Y',strtotime($invoice->date)) }} </h4>
    <a href="{{ route('invoice.pending.list') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-list"> Pending Invoice List </i></a> <br>  <br>               

     <table class="table table-dark" width="100%">
        <tbody>
            <tr>
                <td><p> Customer Info </p></td>
                <td><p> Name: <strong> {{ $payment['customer']['name']  }} </strong> </p></td>
                <td><p> Mobile: <strong> {{ $payment['customer']['mobile_no']  }} </strong> </p></td>
               <td><p> Email: <strong> {{ $payment['customer']['email']  }} </strong> </p></td>                
            </tr>

             <tr>
             <td></td>
              <td colspan="3"><p> Description : <strong> {{ $invoice->description  }} </strong> </p></td>
             </tr>
        </tbody>
         
     </table>            

                    
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                     
                        
                    </div> <!-- container-fluid -->
                </div>
 

@endsection