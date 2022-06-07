<form>
    <table border="1" >
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>email</th>
            <th>name</th>
            <th>sua</th>

        </tr>
        </thead>
        <tbody>
        @foreach($list as $l)

            <tr >
                <td> {{$l->id}}</td>
                <td>{{$l->email}}</td>
                <td>{{$l->name}}</td>
                <td class="center"> <a href="/user/{{$l->id}}/edit">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</form>
