<!DOCTYPE html>
<html>
<table class="table table-striped">
    <tbody>
        @foreach ($boards as $board)
        <tr>

            <td>{{ $board->text }}</td>

            <td>{{ $board->user->name }}</td>
            @if(Auth::id()==$board->user_id)

            <td>
                <a href="{{ route('boards.edit', ['board'=>$board->id]) }}">編集</a>
                <form action="{{route('boards.destroy', ['board' => $board])}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="削除" />
                </form>
            </td>
            @else
            <td><a href="{{ route('boards.show', ['board'=>$board->id]) }}">詳細</a></td>
            @endif


        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('boards.create') }}">新規投稿</a>

</html>