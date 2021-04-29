@extends('layouts.user_layout')
@section('content')

<div class="card">
     <div class="card-body">
       <div class="table-responsive">
         <h5 class="card-title">transactions List</h5>
            <table id="packagetable" class="table table-striped table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>User Id</th>
                    <th>account_number</th>
                    <th>trx_id</th>
                    <th>screenshot</th>
                    <th>contact</th>
                    <th>message	</th>
                  </tr>
                </thead>
                    <tbody>
                       @foreach($transactions as $transaction)
                        @if(Auth::user()->email==$transaction['email'])
                        <tr>
                          <td>{{$transaction['id']}}</td>
                          <td>{{$transaction['name']}}</td>
                          <td>{{$transaction['email']}}</td>
                          <td>{{$transaction['user_id']}}</td>
                          <td>{{$transaction['account_number']}}</td>
                          <td>{{$transaction['trx_id']}}</td>
                          <td> <img src="{{ asset('uploads/transection/' . $transaction->screenshot) }}"
                            alt="loading" width="70" height="80" /> </td>
                          <!-- <td>{{$transaction['screenshot']}}</td> -->
                          <td>{{$transaction['contact']}}</td>
                          <td>{{$transaction['message']}}</td>
                        </tr>
                       
                        @endif
                        @endforeach
                    </tbody>
                      <tfoot>
                          <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>user ID</th>
                            <th>account_number</th>
                            <th>trx_id</th>
                            <th>screenshot</th>
                            <th>contact</th>
                            <th>message	</th>
                          </tr>
                      </tfoot>
            </table>
        </div>
     </div>
</div>


@endsection
