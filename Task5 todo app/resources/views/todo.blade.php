<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="container" style="max-width:500px; margin:0 auto;">

<div class="card mt-4">
    <div class="card-header">
        <h3>Todo Apps</h3>
    </div>

<div class="card-body">
    <form class="todolistinsert" id="insertform" method="post">
    @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="food_name" id="food_name" 
        placeholder="Food Name" aria-describedby="button-addon2">
            <button class="btn btn-success" type="submit" onclick="return todolistinsert()" 
            id="button-addon2">Add</button>
         </div>
    </form>

<div id="editform"></div>

<div id="showtodolist"></div>
    
</div>
</div>

<!--Ajax start-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">

$("#editform").hide();
showdata();

function showdata(){
    $.ajax({
      headers : { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
      url     : 'getdata',
      type    : 'GET',
      data    : {},
      success: function(data)
      {
        $("#showtodolist").html(data);
      }
    });
  }

    $("#insertform").submit(function(e){
    e.preventDefault();

    })

 function todolistinsert(){

    var food_name = $("#food_name").val();

    $.ajax({
    headers : { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
    url     : 'todolistinserts/'+food_name,
    type    : 'POST',

    success: function()
    {
        showdata();
        $("#food_name").val('');
    },
    error: function(){
        alert("error")
    }
  });

}


function deletefunction(id){

if (confirm('Are you sure?')) {

    $.ajax({
    headers : { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
    url     : 'deletedata/'+id,
    type    : 'GET',
    success: function(data)
        {
            showdata();

            $("#insertform").show();
            $("#editform").hide();
        }
    });
    
    }
    else{  }
}


function editfunction(id){

    $("#insertform").hide();
    $("#editform").show();

    $.ajax({
    headers : { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
    url     : 'editdata/'+id,
    type    : 'GET',
    success: function(data)
        {
            showdata();
            $("#editform").html(data);
        }
    });

}


$("#editform").submit(function(e){
   e.preventDefault();

})

function todolistupdate(id){
   
   var food_name = $("#food_name_update").val();

    $.ajax({
    headers : { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
    url     : 'todolistupdate/'+food_name+'/'+id,
    type    : 'POST',

    success: function()
    {
        showdata();
        $("#insertform").show();
        $("#editform").hide();
    },
    error: function(){
        alert("error")
    }
    });
}
  
</script>