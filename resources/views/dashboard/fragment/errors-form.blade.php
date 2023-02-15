    {{--  comprabamos si hay errores que laravel automaticamente las guarda en la variable $errors y en caso de que haya que las itere con un foreach --}}
    
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="error">
                {{ $error }}
            </div>
        @endforeach
    @endif