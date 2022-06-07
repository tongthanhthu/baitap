<form action="/user/{{$user->id}}" method="POST">

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div >
        <label>Tên</label>
        <input  class="form-control" name="name" value="{{$user->name}}" placeholder="nhập tên người dùng" />
    </div>
    <div >
        <label>email</label>
        <input  class="form-control" name="email" value="{{$user->email}}" placeholder="nhập email" />
    </div>
    <div >
        <label>password</label>
        <input  class="form-control" type="password" name="password" value="" placeholder="để trống đê giữ nguyên mk" />
    </div>
    <button type="submit" >edit</button>
</form>
