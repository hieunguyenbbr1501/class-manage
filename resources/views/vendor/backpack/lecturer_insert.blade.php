@extends(backpack_view('blank'))


@section('content')
    <div class="container">
        <form action="{{ url('/admin/insert/lecturer/post') }}" enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <label for="file">Upload file Excel theo đúng định dạng</label>
            <div>
                <input type="file" name="file">
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
        </form>
    </div>
@endsection
