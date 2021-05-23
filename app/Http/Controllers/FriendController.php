<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Auth  ;
class FriendController extends Controller
{
    public function index()
        {
        return view('user.friends',
            [
                'friends' => Auth::user()->friends(),
                'requests' => Auth::user()->friendRequests()
            ]);
    }
    public function getAdd($username)
    {
        $user = User::where('username', $username)->first();
        # если пользователь не найден в базе
        if ( ! $user )
        {
            return redirect()
                ->route('user')
                ->with('info', 'Пользователь не найден!');
        }
        if ( Auth::user()->id === $user->id )
        {
            return redirect()->route('user');
        }
        if ( Auth::user()->hasFriendRequestPending($user)
            || $user->hasFriendRequestPending( Auth::user() ) )
        {
            return redirect()
                ->route('user.visit', ['id' => $user->id])
                ->with('info', 'Пользователю отправлен запрос в друзья.');
        }
        if ( Auth::user()->isFriendWith($user) )
        {
            return redirect()
                ->route('user.visit', ['id' => $user->id])
                ->with('info', 'Пользователь уже в друзьях.');
        }

     Auth::user()->addFriend($user);
      return redirect()
          ->route('user.visit', ['id' => $user->id]) ;
    }


    public function getAccept($username)
    {
        $user = User::where('username', $username)->first();

        if ( ! $user )
        {
            return redirect()
                ->route('user') ;
        }
        if ( ! Auth::user()->hasFriendRequestReceived($user) )
        {
            return redirect()->route('user');
        }

        Auth::user()->acceptFriendRequest($user);

        return redirect()
            ->route('user.visit', ['id' => $user->id]) ;
    }

    }
