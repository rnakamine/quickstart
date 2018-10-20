@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>間違っています。。</strong>

        <br><br>

        <ul>
            @foreach($erros->all() as $error))
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif