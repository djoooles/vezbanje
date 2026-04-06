@extends("layout")

@section("naslovStranice")

    Admin All Contacts Page
@endsection


@section("content")
    @csrf
    <table class="table">

        <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Message</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($allContacts as $contact)
                <th scope="col">{{ $contact->id }}</th>
                <th scope="col">{{ $contact->email }}</th>
                <th scope="col">{{ $contact->subject }}</th>
                <th scope="col">{{ $contact->message }}</th>
                <th scope="col">{{ $contact->created_at }}</th>
                <td>
                    <a href="/admin/delete-contact/{{ $contact->id }}" class="btn btn-danger">Obrisi</a>
                    <a class="btn btn-primary">Edituj</a>
                </td>

        </tr>
        </tbody>
        @endforeach

    </table>





@endsection
