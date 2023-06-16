<!DOCTYPE html>
<html>
<form action="{{ route('boards.update', ['board' => $board]) }}" method="POST">
    @csrf
    @method('put')
    <div>
        <label for=""></label>
        <input type="text" id="text" name="text" value="{{$board->text}}">

    </div>
    <input type="submit" value="更新">
</form>
<button type="button" onClick="history.back()">戻る</button>

</html>