@extends('labs.layout')
 
@section('content')
<br>
<br>
<br>
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD Labs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('labs.create') }}"> Create New lab</a>
            </div>
        </div>
    </div>
   <br>
<br>
<br>
<br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Lab Name</th>
            <th>Date Added</th>
            <th>Location</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($labs as $lab)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $lab->LabName }}</td>
            <td>{{ $lab->DateAdded }}</td>
            <td>{{ $lab->Location }}</td>
            <td>
                <form action="{{ route('labs.destroy',$lab->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('labs.show',$lab->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('labs.edit',$lab->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $labs->links() !!}
      <div><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1u7NKnHUsEsDlYEiWn1Sd6-3WfNcTCfG1" width="640" height="480"></iframe>
      </div>
@endsection