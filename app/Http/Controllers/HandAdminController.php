<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HandAdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index(){
       
        return phpinfo();
    }
    public function estoque(){
        $users = DB::select("SELECT nome, qtde, valorcompra
        FROM estoque;");
        return $users;
    }
    public function pedidossucess(){
        $users = DB::select("Select p.nome, p.valor, pd.status, pd.valor from pedido as pd
        join produto as p on p.id  = pd.id_produto
        where pd.status = 'SUCESS'");
        return $users;
    }
    public function pedidoscancel(){
        $users = DB::select("Select p.nome, p.valor, pd.status, pd.valor from pedido as pd
        join produto as p on p.id  = pd.id_produto
        where pd.status = 'CANCEL'");
        return $users;
    }
    public function pedidoswait(){
        $users = DB::select("Select p.nome, p.valor, pd.status, pd.valor from pedido as pd
        join produto as p on p.id  = pd.id_produto
        where pd.status = 'WAIT'");
        return $users;
    }
    public function vendastotal(){
        $users = DB::select("SELECT valor, data FROM bancowendell.venda;");
        return $users;
    }
}
