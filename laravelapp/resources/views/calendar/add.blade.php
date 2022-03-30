@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form method="post" action="/calendar/create">
        @csrf
        <table>
            <tr><th>開始日：　<input type="date" name="start_date"></th></tr>
            <tr><th>終了日：　<input type="date" name="end_date"></th></tr>
            <tr><th>タイトル： <input type="text" name="title"></th></tr>
            <tr><th>内容：　<input type="textarea" name="contents"></th></tr>
            <tr><th><button type="submit">登録</button></th></tr>
        </table>
    </form>
@endsection
