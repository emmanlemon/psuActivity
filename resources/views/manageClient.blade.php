@include('header')
<div class="container min-vh-100">
    <h2>Client: <a href="{{ route('view' , 'add') }}" class="btn btn-primary">Add Client +</a></h2>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Sex</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Address</th>
          </tr>
        </thead>
        <tbody>
        @if(empty(count($clients)))
        <tr>
            <td>No Data Yet.</td>   
        </tr>
        @else    
            @foreach($clients as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->first_name }}</td>
                    <td>{{ $row->last_name }}</td>
                    <td>{{ $row->sex }}</td>
                    <td>{{ $row->contact_number }}</td>
                    <td>{{ $row->address }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
      </table>
</div>