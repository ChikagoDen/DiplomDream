<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\biblioteca_tabl;
use App\Models\User;

class BibliotecaTablPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\biblioteca_tabl  $bibliotecaTabl
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, biblioteca_tabl $bibliotecaTabl)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->is_admin >=1; 
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\biblioteca_tabl  $bibliotecaTabl
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, biblioteca_tabl $bibliotecaTabl)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\biblioteca_tabl  $bibliotecaTabl
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, biblioteca_tabl $bibliotecaTabl)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\biblioteca_tabl  $bibliotecaTabl
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, biblioteca_tabl $bibliotecaTabl)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\biblioteca_tabl  $bibliotecaTabl
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, biblioteca_tabl $bibliotecaTabl)
    {
        //1
    }
}
