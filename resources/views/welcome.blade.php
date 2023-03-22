@extends('layouts.app')
@section('title', 'Liste des demandes')
@section('content')
<div>
    <p>salut</p>
    <?php 
        $user = Auth::user();
        // Afficher les noms des rôles de l'utilisateur
        $roles = $user->getRoleNames();
        dd($roles);
        foreach ($roles as $role) {
            echo $role . "<br>";
        }
        ?>
</div>