<?php
namespace LuanCS\MinhasLojas\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LuanCS\MinhasLojas\Models\Loja;

class MinhasLojasController extends Controller
{
    public function index()
    {
        return view('minhaslojas::admin.index');
    }
    public function create()
    {
        return view('minhaslojas::admin.create');
    }

    public function store(Request $request)
    {
        $loja = new Loja();
        $loja->nome = $request->nome;
        $loja->endereco = $request->endereco;
        $loja->save();
        return redirect(route('minhaslojas.admin.index'));
    }

    public function edit($id)
    {
        $loja = Loja::find($id);
        return view('minhaslojas::admin.edit', compact('loja'));
    }

    public function update(Request $request, $id)
    {
        $loja = Loja::find($id);

        $loja->nome = $request->nome;
        $loja->endereco = $request->endereco;
        $loja->save();

        return redirect(route('minhaslojas.admin.index'));
    }

    public function destroy($id)
    {
        $loja = Loja::find($id);
        $loja->delete();
        return redirect(route('minhaslojas.admin.index'));
    }
}