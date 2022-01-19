<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
</style>
<h1>Ini Setang</h1>
<body>
    
    <h2>A basic HTML table</h2>
    
    <table style="width:100%">
        <tr>
            <th>Company</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>
                <a href="{{ url('/edit', $item->id) }}">Edit</a>
                <form action="{{ url('/test', $item->id) }}" method="post">
                    @csrf
                     
                    @method("DELETE")

                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a href="/create">Add</a>
    
    
</body>
</html>

