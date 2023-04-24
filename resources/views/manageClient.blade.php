@include('header')
<div class="container min-vh-100">
    <h2 class="mt-4">Client: <a href="{{ route('view' , 'add') }}" class="btn btn-primary">Add Client +</a></h2>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Sex</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Address</th>
            <th scope="col">Action</th>
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
                    <td>{{ $row->first_name }}</td>
                    <td>{{ $row->last_name }}</td>
                    <td>{{ $row->sex }}</td>
                    <td>{{ $row->contact_number }}</td>
                    <td>{{ $row->address }}</td>
                    <td class="d-flex flex-row gap-1 align-items-center">
                        <a href="{{ route('client.show' , $row->id) }}" class="btn btn-info text-white">Show</a>
                        <a href="{{ route('view' , 'edit') }}" class="btn btn-success text-white">Edit</a>
                        <form action="">
                            <button class="btn btn-danger mt-3">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
      </table>
</div>