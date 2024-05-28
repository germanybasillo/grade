


@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>