<x-app-layout>
    <h1>Form to edit a new post</h1>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">
            Titulo
            <input type="text" name="title" value="{{$post->title}}">
        </label>
        <br><br>
        <label for="">
            Categoría
            <input type="text" name="category" value="{{$post->category}}">
        </label>
        <br><br>
        <label for="">
            Contenido
            <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
        </label>
        <br><br>
        <button type="submit">Actualizar post</button>
    </form>
</x-app-layout>