@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post: {{ $post->title }}</h1>

    {{--  Mostramos los errores  --}}
    @include('dashboard.fragment.errors-form')

    {{-- action = "la ruta a donde se enviara la informacion" --}}
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @method('put')
        {{--  @crsf crea un token unico para evitar algun hackeo  --}}
        @csrf

        <label for="">Titulo</label>
        <input type="text" name="title" value="{{ $post->title }}"><br>

        <label for="">Slug</label>
        <input type="text" name="slug" value="{{ $post->slug }}"><br>

        <label for="">Categorias</label>
        <select name="category_id">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option {{ $post->category_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select><br>
        
        <label for="">Posteado</label>
        <select name="posted">
            <option {{ $post->posted == "not" ? 'selected' : '' }} value="not">No</option>
            <option {{ $post->posted == "yes" ? 'selected' : '' }} value="yes">Si</option>
        </select><br>

        <label for="">Contenido</label>
        <textarea name="content" cols="30" rows="10">{{ $post->content }}</textarea><br>

        <label for="">Descripcion</label>
        <textarea name="description" cols="30" rows="10">{{ $post->description }}</textarea><br>

        <button type="submit">Enviar</button>
    </form>
@endsection