@if ($errors->any())
<div class="alert alert-danger" roule="alert">
    <h5><strong>Ci sono alcuni errori:</strong></h5>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
