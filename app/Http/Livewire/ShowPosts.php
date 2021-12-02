<?php

namespace App\Http\Livewire;

use Livewire\Component;
//pasar datos de l bd al componente
use App\Models\Post;

class ShowPosts extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    
    //metodo render se encarga de renderizar el contenido de la vista
    public function render()
    {
        //filtro where para buscar en los registros
        $posts = Post::where('title', 'like', '%' . $this->search . '%')
                        ->orwhere('content', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction )
                        ->get();
        return view('livewire.show-posts', compact('posts'));
    }

    public function order($sort){

        if($this->sort = "$sort"){

            if($this->direction == 'desc'){
                $this->directio = 'asc';

            }
             else {
                $this->direction = 'desc';
            }
        }
        else {
            $this->sort = "$sort";
            $this->direction = 'asc';
        }
        
    }
}
