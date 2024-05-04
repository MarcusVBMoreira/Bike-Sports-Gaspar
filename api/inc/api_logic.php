<?php

class Api_logic{
    // ===============================================================
    // PROPERTIES
    // ===============================================================
    private $endpoint;
    private $params;

    // ===============================================================
    // CONSTRUCTOR
    // ===============================================================
    public function __construct($endpoint, $params = null){
        $this->endpoint = $endpoint;
        $this->params = $params;
    }

    // ===============================================================
    public function check_endpoint(){// verifica se o endpoint recebido é valido
        return method_exists($this, $this->endpoint);// função nativa para checar se o endpoint existe no contexto atual
    }
    // ===============================================================
    




    // ===============================================================
    // METHODS FOR EACH ENDPOINT
    // ===============================================================

    public function status(){
        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => null
        ];
    }

    // ===============================================================
    // CLIENTES
    // ===============================================================
    public function get_all_clients(){

        $sql = "SELECT * FROM clientes";

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_all_active_clients(){
        $sql = "SELECT * FROM clientes WHERE deleted_at IS NULL";

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_all_inactive_clients(){
        $sql = "SELECT * FROM clientes WHERE deleted_at IS NOT NULL";

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_client_by_id(){
        $sql = "SELECT * FROM clientes WHERE 1 ";

        if(key_exists('id',$this->params)){

            if(filter_var($this->params['id'], FILTER_VALIDATE_INT)){
                $sql .= "AND id_cliente = " . intval($this->params['id']);
            }
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'CLIENT ID NOT ESPECIFIED',
                'results' => []
            ];
        }

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_client_by_ddd(){
        $sql = "SELECT * FROM clientes WHERE 1 ";

        if(key_exists('ddd',$this->params)){

            if(filter_var($this->params['ddd'], FILTER_VALIDATE_INT)){
                $sql .= "AND telefone LIKE '(" . intval($this->params['ddd']) . ")%'";
            }
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'CLIENT DDD NOT ESPECIFIED',
                'results' => []
            ];
        }

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_client_by_name(){
        $sql = "SELECT * FROM clientes WHERE 1 ";

        if(key_exists('name',$this->params)){
            $sql .= "AND nome LIKE '%" . $this->params['name'] . "%'";
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'CLIENT NAME NOT ESPECIFIED',
                'results' => []
            ];
        }

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_client_by_email(){

        if(key_exists('email',$this->params)){
            $params = [
                ':email' => $this->params['email']
            ];
            $db = new database();
            $results = $db->EXE_QUERY("
                SELECT * FROM clientes
                WHERE
                email = :email
            ", $params);
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'CLIENT EMAIL NOT ESPECIFIED',
                'results' => []
            ];
        }
        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_client_by_phone(){
        $sql = "SELECT * FROM clientes WHERE 1 ";

        if(key_exists('phone',$this->params)){

            if(filter_var($this->params['phone'], FILTER_VALIDATE_INT)){
                $sql .= "AND telefone LIKE '%" . intval($this->params['phone']) . "%'";
            }
        }else{
            return [
                'status' => 'ERROR',
                'message' => 'CLIENT PHONE NUMBER NOT ESPECIFIED',
                'results' => []
            ];
        }

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function create_new_client(){
        
        if(//Checar campos vazios
            !isset($this->params['nome']) || 
            !isset($this->params['cpf']) || 
            !isset($this->params['email']) || 
            !isset($this->params['telefone']) ||
            !isset($this->params['sobrenome']) ||
            !isset($this->params['data_nascimento']) ||
            !isset($this->params['senha']) ||
            $this->params['nome']=='' ||
            $this->params['email']=='' ||
            $this->params['cpf']=='' ||
            $this->params['telefone']=='' ||
            $this->params['sobrenome']=='' ||
            $this->params['data_nascimento']=='' ||
            $this->params['senha']==''
        ){
            return [
                'status'=> 'ERROR',
                'message'=> 'Informações insuficientes para adicionar cliente',
                'results'=> []
            ];
        }
        
        //checar emails duplicados
        $db = new database();
        $params = [
            ':email' => $this->params['email'],
            ':cpf' => $this->params['cpf']
        ];
        $results = $db->EXE_QUERY("
            SELECT id FROM clientes
            WHERE
            email = :email OR CPF = :cpf
        ",$params);
        if(count($results) != 0){
            return [
                'status' => 'ERROR',
                'message' => 'Já existe um cliente com o mesmo email ou CPF.',
                'results' => []
            ];
        }
        
        $params = [
            ':nome' => $this->params['nome'],
            ':cpf' => $this->params['cpf'],
            ':email' => $this->params['email'],
            ':telefone' => $this->params['telefone'],
            ':sobrenome' => $this->params['sobrenome'],
            ':data_nascimento' => $this->params['data_nascimento'],
            ':senha' => $this->params['senha']
        ];
        // NAO HA CAMPO PARA CPF NO FORMULARIO AINDA, O CAMPO NO BD ESTA NULO
        $db = new database();
        $db->EXE_QUERY("
            INSERT INTO clientes (
                    nome,
                    CPF,
                    sobrenome,
                    email,
                    senha,
                    data_nascimento,
                    telefone
                ) VALUES (
                    :nome,
                    :cpf,
                    :sobrenome,
                    :email,
                    :senha,
                    :data_nascimento,
                    :telefone
                )

        ",$params);
        
        /* $db = new database();
        $results = $db->EXE_QUERY("
            SELECT id FROM clientes
            WHERE
            email = :email
        ",$params); */

        return [
            'status' => 'SUCCESS',
            'message' => 'Cliente criado com sucesso',
            'results' => []
        ];
    }
    // ===============================================================
    public function update_client(){
        
        if(//Checar campos vazios
            !isset($this->params['nome']) || 
            !isset($this->params['cpf']) || 
            !isset($this->params['email']) || 
            !isset($this->params['telefone']) ||
            !isset($this->params['data_nascimento']) ||
            $this->params['nome']=='' ||
            $this->params['email']=='' ||
            $this->params['cpf']=='' ||
            $this->params['telefone']=='' ||
            $this->params['data_nascimento']==''
        ){
            return [
                'status'=> 'ERROR',
                'message'=> 'Informações insuficientes para atualizar cliente',
                'results'=> []
            ];
        }
        //checar emails duplicados
        $db = new database();
        $params = [
            ':id' => $this->params['id'],
            ':email' => $this->params['email'],
            ':cpf' => $this->params['cpf']
        ];
        $results = $db->EXE_QUERY("
            SELECT id FROM clientes
            WHERE
            (email = :email OR CPF = :cpf)
            AND deleted_at IS NULL
            AND id <> :id
        ",$params);
        return $results;
        if(count($results) != 0){
            return [
                'status' => 'ERROR',
                'message' => 'Já existe um cliente com o mesmo email ou CPF.',
                'results' => []
            ];
        }
        
        $params = [
            ':nome' => $this->params['nome'],
            ':cpf' => $this->params['cpf'],
            ':email' => $this->params['email'],
            ':telefone' => $this->params['telefone'],
            ':sobrenome' => $this->params['sobrenome'],
            ':data_nascimento' => $this->params['data_nascimento'],
            ':senha' => $this->params['senha']
        ];
        // NAO HA CAMPO PARA CPF NO FORMULARIO AINDA, O CAMPO NO BD ESTA NULO
        $db = new database();
        $db->EXE_QUERY("
            INSERT INTO clientes (
                    nome,
                    CPF,
                    sobrenome,
                    email,
                    senha,
                    data_nascimento,
                    telefone
                ) VALUES (
                    :nome,
                    :cpf,
                    :sobrenome,
                    :email,
                    :senha,
                    :data_nascimento,
                    :telefone
                )

        ",$params);
        
        /* $db = new database();
        $results = $db->EXE_QUERY("
            SELECT id FROM clientes
            WHERE
            email = :email
        ",$params); */

        return [
            'status' => 'SUCCESS',
            'message' => 'Cliente criado com sucesso',
            'results' => $params
        ];
    }




    // ===============================================================
    // PRODUTOS
    // ===============================================================
    public function get_all_products(){

        $db = new database();
        $results = $db->EXE_QUERY('SELECT * FROM produtos');

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' =>  $results
        ];
    }
    // ===============================================================
    public function get_all_active_products(){
        $sql = "SELECT * FROM produtos WHERE deleted_at IS NULL";

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_all_inactive_products(){
        $sql = "SELECT * FROM produtos WHERE deleted_at IS NOT NULL";

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================
    public function get_unavailable_products(){
        $sql = "SELECT * FROM produtos WHERE quantidade <= 0 AND deleted_at IS NULL ";

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }
    // ===============================================================

    public function get_product_by(){
        $sql = "SELECT * FROM produtos";

        // GET BY ID
        if(key_exists('codigo',$this->params)){
            if(filter_var($this->params['codigo'],FILTER_VALIDATE_INT)){
                $sql .= " WHERE codigo = " . $this->params['codigo'];
            }
        }

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' => $results
        ];
    }

    public function get_products_filter(){
        $sql = "SELECT * FROM produtos";

        if(key_exists('tipo',$this->params)){
            $sql .= " WHERE tipo = '" .$this->params['tipo']. "'";
        }
        if(key_exists('categoria',$this->params)){
            $sql .= " WHERE categoria = '" .$this->params['categoria']. "'";
        }

        $db = new database();
        $results = $db->EXE_QUERY($sql);

        return [
            'status' => 'SUCCESS',
            'message' => 'API RUNNING OK',
            'results' =>  $results
        ];
    }

    public function create_new_product(){
        
        if(//Checar campos vazios
            !isset($this->params['nome']) || 
            !isset($this->params['valor_a_vista']) || 
            $this->params['nome']=='' ||
            $this->params['valor_a_vista']==null
        ){
            return [
                'status'=> 'ERROR',
                'message'=> 'Informações insuficientes para adicionar produto',
                'results'=> []
            ];
        }
        
        //checar nomes duplicados
        $db = new database();
        $params = [
            ':nome' => $this->params['nome']
        ];
        $results = $db->EXE_QUERY("
            SELECT codigo FROM produtos
            WHERE
            nome = :nome
        ",$params);
        if(count($results) != 0){
            return [
                'status' => 'ERROR',
                'message' => 'Já existe um produto com o mesmo nome.',
                'results' => []
            ];
        }

        $params = [
            ':nome' => $this->params['nome'],
            ':valor_a_vista' => $this->params['valor_a_vista']
        ];
        
        $db = new database();
        $db->EXE_QUERY("
            INSERT INTO produtos (
                    nome,
                    valor
                ) VALUES (
                    :nome,
                    :valor_a_vista
                )

        ",$params);

        $params = [
            'nome' => $this->params['nome'],
            'valor_a_vista' => $this->params['valor_a_vista']
        ];
        
        /* $db = new database();
        $results = $db->EXE_QUERY("
            SELECT id FROM clientes
            WHERE
            email = :email
        ",$params); */

        return [
            'status' => 'SUCCESS',
            'message' => 'Produto criado com sucesso',
            'results' => $params
        ];
    }

}