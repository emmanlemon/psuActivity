@include('header')
<div class="container text-capitalize">
    <h2 class="mt-2">Client Information: <a href="{{ route('client.index') }}" class="btn btn-primary my-2">Back</a></h2>
    <p>First Name: {{ $client->first_name }}</p>
    <p>Last Name: {{ $client->last_name }}</p>
    <p>Sex: {{ $client->sex }}</p>
    <p>Contact Number: {{ $client->contact_number }}</p>
    <p>Address: {{ $client->address }}</p>
</div>