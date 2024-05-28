


@if($message = Session::get('success'))
<div class="alert alert-success">
{{ $message }}
</div>
@endif

@if($message = Session::get('info'))
<div class="alert alert-info">
{{ $message }}
</div>
@endif


@if($message = Session::get('fail'))
<div class="alert alert-danger">
{{ $message }}
</div>
@endif