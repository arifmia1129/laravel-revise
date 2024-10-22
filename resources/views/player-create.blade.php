<h3>Entry a new player</h3>
<form action="{{route('player.store')}}" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <br>
        <input type="text" name="name" id="name" placeholder="Write a player name">
    </div>
    <br>
    <div>
        <label for="team">Team</label>
        <br>
        <input type="text" name="team" id="team" placeholder="Write a player team">
    </div>
    <br>
    <button type="submit">Create</button>
</form>