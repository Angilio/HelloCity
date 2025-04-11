@extends('base')
@section('title', 'About-Us | ' . env('APP_NAME'))
@section('content')
    <main id="main">
        <div id="rightCol">
            <img src="/asset/images/Cvnaka.png" id="imgCv" alt="Photo cv">
        </div>
        <div id="description">
            <p>
               <h1 id="Titre"> Hello city !</h1><br>
                Est un site laravel statique spécifique pour affichage de l'horaire de Madagascar sachant que le concepteur est un Malagasy. <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam obcaecati asperiores, aperiam doloremque saepe illum iure eum labore minima impedit ex molestiae atque sit? Ea quis adipisci nulla dolore accusamus.
            </p>
            
            <p>Built with <span>&hearts;</span> by RAZAFINDRASOLO Angilio </p>
            <p><a href="/" class="btn btn-outline-primary">Turn to the home page</a></p>
        </div>
    </main>
@endsection
