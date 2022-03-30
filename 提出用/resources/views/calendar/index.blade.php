<?php 

use Illuminate\Support\Facades\DB; 

// eventsテーブルからタイトルと開始日を取得
$title = DB::table('events')->select('title')->get(); 
$start = DB::table('events')->select('start')->get();

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>Laravel × FullCalendar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Script -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <div class="m-auto w-50 m-5 p-5">
                <div id='calendar'></div>
                <a href="/calendar/add"><button>予定登録</button></a>
                <!--  addメソッドに表示する予定だったもの -->
                <form method="post" action="/calendar/create">
                    @csrf
                    <table>
                        <tr><th>開始日：　<input type="date" name="start"></th></tr>
                        <tr><th>タイトル： <input type="text" name="title"></th></tr>
                        <tr><th><button type="submit">登録</button></th></tr>
                    </table>
                 </form>
        </div>

        <link href='{{ asset('fullcalendar-5.9.0/lib/main.css') }}' rel='stylesheet' />
        <script src='{{ asset('fullcalendar-5.9.0/lib/main.js') }}'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    // カレンダーの表示設定(この場合月ごとに表示)
                    initialView: 'dayGridMonth',
                    // 言語設定。日本語に設定。
                    locale: 'ja',
                    //　高さ自動調整設定
                    height: 'auto',
                    /* events: '/index', */
                    // 
                    editable: 'true',
                    // 開始曜日設定。1なので月曜日開始曜日設定(参考：0(日曜日)～6(土曜日))
                    firstDay: 1,
                    // カレンダー上部要素
                    headerToolbar: {
                        // 左部分。月表示とリスト表示
                        left: "dayGridMonth,listMonth",
                        // 真ん中。タイトル
                        center: "title",
                        // 右部分。今日の日付に飛ぶボタンとカレンダーを遡ったり次の月にするボタン。
                        right: "today prev,next"
                    },
                    // ボタンのテキスト設定
                    buttonText: {
                        today: '今月',
                        month: '月',
                        list: 'リスト'
                    },
                    // カレンダーに書き込まれる予定
                    events: [
                        {
                            title: '<?php echo $title ?>',
                            start: '<?php echo $start ?>',
                        },

                        {
                            title: '提出期限',
                            start: '2022-03-30',
                        },
                    ],
                    // リスト表示時にイベントが1件もない時のテキスト設定
                    noEventsContent: 'スケジュールはありません',
                });
                calendar.render();
            });
        </script>
    </body>
</html>