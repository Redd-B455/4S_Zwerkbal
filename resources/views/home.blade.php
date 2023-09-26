@extends('layout')

@section('nav')
    <nav>
        <a href="/" class="active">Home</a>
        <a href="/tournaments">Toernooien</a>
        <a href="/teams">Teams</a>
        <a href="/players">Spelers</a>
    </nav>
@endsection

@section('content')

    <h1>Dashboard</h1>
    <p>Zwerkbal (Engels: Quidditch) is een sport voor tovenaars uit de Harry Potterboeken van J.K. Rowling. In de wereld van Harry Potter is Zwerkbal een populaire sport: veel mensen praten erover mee en zijn zeer enthousiast als er een groot toernooi wordt gespeeld. Ook heeft iedere heks of tovenaar wel een favoriet Zwerkbalteam.</p>

    <div class="FlexContainer">
        <div class="FlexItem">
            <p>aantal aankomende toernooien: <br><b>5</b></p>
        </div>
        <div class="FlexItem2">
            <p>aantal aankomende toernooien: <br><b>5</b></p>
        </div>
        <div class="FlexItem3">
            <img src=".\public\img\snitch.png" alt="Missing Snitch">
        </div>
    </div>
@endsection