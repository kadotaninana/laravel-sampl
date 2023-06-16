<html>
<form action="{{route('boards.store')}}" method="post">
    @csrf
    <div>
        <label for=""></label>
        <input type="text" id="text" name="text">
    </div>
    <input type="submit" value="送信する">
</form>



</html>