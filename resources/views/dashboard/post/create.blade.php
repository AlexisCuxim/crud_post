@extends('dashboard.layout')

@section('content')
    <h1>Crear Post</h1>

    {{--  Mostramos los errores  --}}
    @include('dashboard.fragment.errors-form')

    {{-- action = "la ruta a donde se enviara la informacion" --}}
    <form action="{{ route('post.store') }}" method="post">
        {{--  @crsf crea un token unico para evitar algun hackeo  --}}
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title"><br>

        <label for="">Slug</label>
        <input type="text" name="slug"><br>

        <label for="">Categorias</label>
        <select name="category_id">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select><br>
        
        <label for="">Posteado</label>
        <select name="posted">
            <option value="not">No</option>
            <option value="yes">Si</option>
        </select><br>

        <label for="">Contenido</label>
        <textarea name="content" cols="30" rows="10"></textarea><br>

        <label for="">Descripcion</label>
        <textarea name="description" cols="30" rows="10"></textarea><br>

        <button type="submit">Enviar</button>
    </form>
@endsection