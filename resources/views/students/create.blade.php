
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<div class="card" style="width: 50%; margin-left: 30%">
  <div class="card-header">Admin Page</div>
  <a class="btn btn-primary" href="javascript:history.go(-1)">Back</a>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" ></br>
        <label>Course</label></br>
        <input type="text" name="course" id="course" class="form-control" ></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" class="form-control" ></br>
        <label>Grades</label></br>
        <input type="text" name="grades" id="grades" class="form-control" ></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

