@extends('layouts.app')

@section('title','Рецепты')

@section('actions')
    <a href="{{ route('recipes.create') }}">Добавить рецепт</a>
@endsection

@section('content')
    <table>
        <thead>
        <tr>
            <th>Название</th>
            <th>Категория</th>
            <th>Время готовки</th>
        </tr>
        </thead>
        <tbody>
        @foreach($recipes as $r)
            <tr>
                <td>{{ $r->name }}</td>
                <td>{{ $r->category->title }}</td>
                <td>{{ $r->cooking_time }} мин.</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
