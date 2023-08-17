<table class="table table-bordered">
    <tr>
        <th>SL</th>
        <th>Food Name</th>
        <th>Action</th>
    </tr>

    @php
     $i = 1;
    @endphp
    @foreach($data as $d)
    <tr>
        <td>{{  $i++ }}</td>
        <td>{{ $d->food_name }}</td>
        <td>
        <a onclick="return editfunction('{{ $d->id }}');"  class="btn btn-info btn-sm">Edit</a>
        <a onclick="return deletefunction('{{ $d->id }}');" class="btn btn-danger btn-sm">Delete</a>
        </td>
        
    </tr>
    @endforeach
    
    
</table>