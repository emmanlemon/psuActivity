@include('header')
<div class="container">
    <form action="{{ route('client.update' , $client->id ) }}" method="post">
        <h2 class="mt-2">Edit Client Data: <a href="{{ route('client.index') }}" class="btn btn-primary my-2">Back</a></h2>
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @csrf
        @method('PUT')
        <div class="mb-1">
            <label class="form-label">First Name</label>
            <input type="input" class="form-control" name="first_name" value="{{ $client->first_name }}">
        </div>
        <div class="mb-1">
            <label class="form-label">Last Name</label>
            <input type="input" class="form-control" name="last_name" value="{{ $client->last_name }}">
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
            <input type="number" class="form-control" name="contact_number" value="{{ $client->contact_number }}">
        </div>
        <div class="mb-1">
            <label class="form-label">Address</label>
            <input type="input" class="form-control" name="address" value="{{ $client->address }}">
        </div>
        <button type="reset" class="btn btn-secondary mt-2">Reset</button>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
</div>