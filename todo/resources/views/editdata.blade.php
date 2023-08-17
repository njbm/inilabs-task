<form class="todolistinsert" method="post">
    @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control" value="{{ $data->food_name }}" name="food_name" 
        id="food_name_update" placeholder="Food Name" aria-describedby="button-addon2">
        
        <button class="btn btn-success" type="submit" onclick="return todolistupdate('{{ $data->id }}')" 
        id="button-addon2">Update</button>
    </div>
</form>