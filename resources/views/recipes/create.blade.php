@extends('layouts.app')

@section('title','Добавить рецепт')

@section('actions')
    <a href="{{ route('recipes.index') }}">Назад</a>
@endsection

@section('content')
    <form method="post" action="{{ route('recipes.store') }}">
        @csrf
        <div>
            <label>Название</label>
            <input name="name" value="{{ old('name') }}">
        </div>
        <div>
            <label>Категория</label>
            <select name="category_id">
                @foreach($categories as $c)
                    <option value="{{ $c->id }}">{{ $c->title }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Ингредиенты</label>
            <textarea name="ingredients">{{ old('ingredients') }}</textarea>
        </div>
        <div>
            <label>Инструкции</label>
            <textarea name="instructions">{{ old('instructions') }}</textarea>
        </div>
        <div>
            <label>Время готовки (мин.)</label>
            <input name="cooking_time" type="number" value="{{ old('cooking_time') }}">
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
