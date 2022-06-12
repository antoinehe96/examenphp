<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Artist</th>
        </tr>
    </thead>
    <tbody>
        @foreach($albums as $album)
            <tr>
                <td>{{ $album->id }}</td>
                <td>{{ $album->title }}</td>
                <td>{{ $album->artist->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
