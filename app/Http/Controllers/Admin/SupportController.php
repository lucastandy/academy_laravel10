<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateSupport;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support){

        $supports = $support->all();

        return view('admin/supports/index',compact('supports'));
    }

    public function create(){
        return view('admin/supports/create');
    }

    public function show(string|int $id){
        $support = Support::find($id);
        if(!$support = Support::find($id)){
            return back();
        }
        return view('admin/supports/show', compact('support'));
    }



    public function store(StoreUpdateSupport $request, Support $support){

        $data = $request->all();
        $data['status'] = 'a';

        $support = $support->create($data);

        return redirect()->route('supports.index');

    }

    public function edit(Support $support, string|int $id){
        // Verifica se o id existe. Se não existir, o usuário será redirecionado para a página anterior
        if(!$support = $support->where('id', $id)->first()){
            return back();
        }

        return view('admin/supports.edit',compact('support'));
    }

    public function update(Request $request, Support $support, string $id){
        
        if(!$support = $support->find($id)){
            return back();
        }

        $support->update($request->only([
            'subject','body'
        ]));

        return redirect()->route('supports.index');
    }

    public function destroy(string|int $id){

        if(!$support = Support::find($id)){
            return back();
        }

        $support->delete();

        return redirect()->route('supports.index');
    }

}
