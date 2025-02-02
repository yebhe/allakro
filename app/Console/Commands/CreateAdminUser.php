<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateAdminUser extends Command
{
    protected $signature = 'make:admin';
    protected $description = 'Créer un administrateur pour l\'application';

    public function handle()
    {
        $name = $this->ask('Nom de l\'administrateur ?');
        $email = $this->ask('Email de l\'administrateur ?');
        $password = $this->secret('Mot de passe ?');

        // Validation
        $validator = Validator::make(
            ['email' => $email, 'password' => $password],
            ['email' => 'required|email|unique:users', 'password' => 'required|min:6']
        );

        if ($validator->fails()) {
            $this->error('Erreur : ' . implode(', ', $validator->errors()->all()));
            return;
        }

        // Création de l'utilisateur admin
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 'admin' // Assurez-vous d’avoir une colonne 'role' dans votre table users
        ]);

        $this->info("Super administrateur $name créé avec succès !");
    }
}
