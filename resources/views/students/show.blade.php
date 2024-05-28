<style>
  .container {
  width: 50%;
  margin-left: 30%;
}

.card-header {
  background-color: #007bff;
  color: #fff;
  padding: 10px;
}

.card-body {
  padding: 20px;
}

.table {
  width: 100%;
}

.table th,
.table td {
  padding: 10px;
}

.btn {
  padding: 5px 10px;
  margin-right: 5px;
}

.btn-success {
  background-color: #28a745;
  color: #fff;
}

.btn-info {
  background-color: #17a2b8;
  color: #fff;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
}

.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

.btn-sm {
  font-size: 12px;
}
</style>
 
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<div class="card" style="width: 50%; margin-left: 30%">
  <div class="card-header">Students Page</div>
  <a class="btn btn-primary" href="javascript:history.go(-1)">Back</a>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Course : {{ $students->course }}</p>
        <p class="card-text">Subject : {{ $students->subject }}</p>
        <p class="card-text">Grades : {{ $students->grades }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
