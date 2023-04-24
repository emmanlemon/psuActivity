@include('header')
<div class="container vh-100">
    <form action="{{ route('client.store') }}" method="post">
        <h2 class="mt-2">Add Client: <a href="{{ route('client.index') }}" class="btn btn-primary my-2">Back</a></h2>
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @csrf
        <div class="mb-1">
            <label class="form-label">First Name</label>
            <input type="input" class="form-control" name="first_name" placeholder="Enter Your FirstName">
        </div>
        <div class="mb-1">
            <label class="form-label">Last Name</label>
            <input type="input" class="form-control" name="last_name" placeholder="Enter Your LastName">
        </div>
        <div class="mb-1">
            <label class="form-label">Sex:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex"  value="male" checked>
                <label class="form-check-label">Male</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" value="female" >
                <label class="form-check-label">Female</label>
             </div>
        </div>
        <div class="mb-1">
            <label class="form-label">Contact Number</label>
            <input type="number" class="form-control" name="contact_number" placeholder="Enter Your Contact Number">
        </div>
        <div class="mb-1">
            <label class="form-label">Address</label>
            <input type="input" class="form-control" name="address" placeholder="Enter Your Address">
        </div>
        <button type="reset" class="btn btn-secondary mt-2">Reset</button>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>