
<form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data" class="form-floating">
    <fieldset>
        <div class="form-group" >
            <input class="form-control" placeholder="E-mail" name="mail_address" type="email" autofocus >
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control is-invalid" id="floatingInputInvalid" placeholder="nhập mật khẩu" >
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->get('password') as $message)
                        <label for="floatingInputInvalid">{{$message}}</label>
                    @endforeach
                </div>
            @endif
        </div>

        <div class="form-group">
            <input class="form-control" placeholder="họ tên" name="name" type="text" autofocus>
        </div>
        <button type="submit" class="btn btn-lg btn-success btn-block" name="submit">Thêm mới</button>
    </fieldset>
    @csrf
</form>
