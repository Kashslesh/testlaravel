<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ConnexionRequest;
use App\Models\Connexion;

class ConnexioneController extends Controller
{
    public function submit(ConnexionRequest $total){
        $users = new Connexion();
        $users->Nom = $total->input('login');
        $users->Password = $total->input('password');


        $users->save();
        return redirect()->route('Home')->with('success','Vous etez bien énrégistré');
        }
        public function allData(){
            $Nom = new Connexion;
                // dd(Connexion::all());
            // return view('messages',['data'=>$Nom->orderBy('id','desc')->skip()->take(2)->get()]);
            // return view('messages',['data'=>$Nom->where('Nom','=', 'test2'  )->get()]);
            return view('messages',['data'=>$Nom->all()]);
        }
        public function showPassword($id){
            $password = new Connexion;
            return view('one-messages',['data'=>$password->find($id)]);
        }
        public function updateMot($id){
            $modification = new Connexion;
            return view('update-messages',['data'=>$modification->find($id)]);
        }
        public function updateMotSubmit($id, ConnexionRequest $total){
            $users =  Connexion::find($id);
            $users->Nom = $total->input('login');
            $users->Password = $total->input('password');
    
    
            $users->save();
            return redirect()->route('connexion-data-one',$id)->with('success','Mot de passe est bien modifié');
            }
            public function deleteMdp($id){
                Connexion::find($id)->delete();
                return redirect()->route('connexion-data')->with('success','Mot de passe est bien suprimé');

            }
}
