@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>List of Timetables</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('timetables.create') }}"> Add New Timetable</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Subject Code</th>
            <th>Subject Name</th>
            <th>Created At</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($timetable as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->subject_code }}</td>
            <td>{{ $s->subject_name }}</td>
            <td>{{ $s->created_at }}</td>
            <td>
                <form action="{{ route('timetables.destroy',$s->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('timetables.show',$s->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('timetables.edit',$s->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
